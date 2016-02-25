<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AppBundle\Entity\TAmostras;
use AppBundle\Form\TAmostrasType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Agenda controller.
 *
 * @Route("/Planeamento")
 */
class TAmostrasAdminCustomController extends Controller
{
    /**
     * Lists all TAmostras entities.
     *
     * @Route("/NovoPlaneamento", name="tamostras")
     * @Method("GET")
     * @Template()
     */
    public function indexAction(Request $request)
    {
        $form = $this->createFormBuilder()->getForm();
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();

        $qb = $em->createQueryBuilder();



        $query = $qb->select('s')
            ->from('AppBundle:TAmostras', 's')
            ->where('s.ftEstado = :estado')
            ->setParameter('estado', 'P');

        $arr_filtros = array("ftEstado"=>"D");

        if ($request->isMethod('GET')) {

            if(!empty($request->query->get('cliente')) ){
                $query->andWhere('s.fnCliente = :cliente')->setParameter('cliente', $request->query->get('cliente'));

            }
            if(!empty($request->query->get('produto')) ){
                $query->andWhere('s.fnProduto = :produto')->setParameter('produto', $request->query->get('produto'));

            }
            if(!empty($request->query->get('grupo')) ){
                $query->andWhere('s.ftGrupoparametros = :grupo')->setParameter('grupo', $request->query->get('grupo'));
            }
            if(!empty($request->query->get('dataini')) ){

                $date = new \DateTime($request->query->get('dataini'));

                $query->andWhere("s.startdatetime >= '". $date->format('Y-m-d') ."' ");



            }
            if(!empty($request->query->get('datafim')) ){

                $date = new \DateTime($request->query->get('datafim'));

                $query->andWhere("s.enddatetime <= '". $date->format('Y-m-d') ."' ");
            }
        }

        $entities =  $query->getQuery()->getResult();


        //$entities = $em->getRepository('AppBundle:TAmostras')->findBy(array($arr_filtros));
        $clientes = $em->getRepository('AppBundle:TClientes')->findAll();
        $produtos = $em->getRepository('AppBundle:TProdutos')->findAll();
        $grupos = $em->getRepository('AppBundle:TGruposparametros')->findAll();


        return array(
            'entities' => $entities,'clientes' => $clientes,'produtos' => $produtos,'grupos' => $grupos,
        );
    }

    /**
     * Lists all TAmostras entities.
     *
     * @Method("POST")
     * @Template()
     */
    public function LancaAmostrasAction()
    {
        $arr = $this->get("request")->getContent();
        $arr2 = explode("-", $arr);
        $where ="";
        foreach ($arr2 as &$value) {
            if($where == ""){
                $where = "fn_id =" . $value ;
            }else{
                $where = $where  . " OR " .  "fn_id =" . $value ;
            }
        }

        $sql = "update t_amostras set ft_id_estado = 'V' where " . $where;
        $activeDate = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);

        try {
            $activeDate->execute();
        } catch (Exception $e) {
            return new Response(json_encode($e));
        }

        return new Response("ok");

    }
    public function AmostrasGetCicloVidaAction()
    {
        $arr = $this->get("request")->getContent();
        $arr2 = explode("=", $arr);
        $sql = "SELECT * FROM t_amostras_logs WHERE fn_id_amostra =".$arr2[1];
        $activeDate = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
        $activeDate->execute();
        $result = $activeDate->fetchAll();

        return new Response(json_encode($result));

    }
    public function AmostrasGetParametrosAction()
    {
        $arr = $this->get("request")->getContent();
        $arr2 = explode("=", $arr);
        $sql = "SELECT r.fn_id ,r.ft_descricao AS resultado, p.ft_descricao AS parametros, e.ft_codigo , r.ft_formatado ,u.ft_descricao AS unidades , para_esp.ft_texto_relatorio FROM `t_resultados` AS r INNER JOIN t_parametros AS p ON r.fn_id_parametro = p.fn_id INNER JOIN t_estados AS e ON r.ft_id_estado = e.ft_id INNER JOIN t_unidadesmedida AS u ON r.fn_id_unidade = u.fn_id INNER JOIN t_amostras AS a ON r.fn_id_amostra = a.fn_id INNER JOIN t_produtosespecificacoes AS pro ON a.fn_id_produto = pro.fn_id_produto LEFT JOIN t_parametrosporespecificacao AS para_esp ON pro.fn_id_especificacao = para_esp.fn_id_especificacao AND  r.fn_id_parametro = para_esp.fn_id_familiaparametro WHERE r.fn_id_amostra = ".$arr2[1];
        $activeDate = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
        $activeDate->execute();
        $result = $activeDate->fetchAll();
        return new Response(json_encode($result));

    }


    /**
     * Creates a new TAmostra entity.
     *
     * @Route("/importacao", name="importacaoamostra")
     * @Method("POST")
     * @Template("AppBundle:TAmostrasAdminCustom:importacao.html.twig")
     */
    public function importacaoAction(Request $request)
    {
        $texto = "";
        if ($request->isMethod('POST')) {


            $uploadedFile = $request->files->get('fileToUpload');
            $filename = $uploadedFile->getPathname();
            $csvData = file_get_contents($filename);
            $lines = explode(PHP_EOL, $csvData);
            $array = array();
            foreach ($lines as $line) {
                $array[] = str_getcsv($line);
            }


            try {
                foreach ($array as &$value) {
                    $rr = explode(";",$value[0]);

                    if(count($rr) != 0){
                        $entity = new TAmostras();
                        $em = $this->getDoctrine()->getManager();

                        $modelo = $em->getRepository('AppBundle:TModelosamostra')->findOneByftDescricao($rr[5]);
                        $estado = $em->getRepository('AppBundle:TEstados')->findOneByftCodigo('P');
                        $clientes = $em->getRepository('AppBundle:TClientes')->findOneByftNome($rr[2]);
                        $produtos = $em->getRepository('AppBundle:TProdutos')->findOneByftDescricao($rr[0]);
                        $grupos = $em->getRepository('AppBundle:TGruposparametros')->findOneByftCodigo($rr[1]);
                        $entity->setFtEstado($estado);
                        $entity->setFnCliente($clientes);
                        $entity->setFnProduto($produtos);
                        $entity->setFtGrupoparametros($grupos);
                        $entity->setFnModelo($modelo);
                        $date = new \DateTime(str_replace("/","-",$rr[3]));
                        $entity->setStartdatetime($date);
                        $date = new \DateTime(str_replace("/","-",$rr[4]));
                        $entity->setEnddatetime($date);
                        $em->persist($entity);
                        $em->flush();
                    }


                }
                $texto = "Importação realizada com sucesso";
            } catch (Exception $e) {
                $texto = "Falha na importação por favor valide os dados";
            }


        }


        return $this->render(
            'AppBundle:TAmostrasAdminCustom:importacao.html.twig',array('string' => $texto));
    }


    /**
     * Creates a new TAmostra entity.
     *
     * @Route("/NovoPlaneamento/new", name="tamostras_create")
     * @Method("GET")
     * @Template("AppBundle:Amostras:new.html.twig")
     */
    public function createAction(Request $request)
    {

        $entity = new TAmostras();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }
    /**
     * Creates a form to create a Agenda entity.
     *
     * @param Agenda $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(TAmostras $entity)
    {

        $form = $this->createForm(new TAmostrasType(), $entity, array(
            'action' => $this->generateUrl('tamostras_create'),
            'method' => 'POST',
        ));
        return $form;
    }


    /**
     * Displays a form to create a new TAmostras entity.
     *
     * @Route("/NovoPlaneamento/new", name="tamostras_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new TAmostras();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a TAmostras entity.
     *
     * @Route("/NovoPlaneamento/{id}", name="tamostras_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:TAmostras')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TAmostras entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing TAmostras entity.
     *
     * @Route("/NovoPlaneamento/{id}/edit", name="tamostras_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:TAmostras')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TAmostras entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Creates a form to edit a TAmostras entity.
     *
     * @param TAmostras $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(TAmostras $entity)
    {
        $form = $this->createForm(new TAmostrasType(), $entity, array(
            'action' => $this->generateUrl('tamostras_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Atualizar'));

        return $form;
    }
    /**
     * Edits an existing TAmostras entity.
     *
     * @Route("/NovoPlaneamento/{id}", name="tamostras_update")
     * @Method("PUT")
     * @Template("AppBundle:TAmostras:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:TAmostras')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TAmostras entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();
            return $this->redirect($this->generateUrl('tamostras_edit', array('id' => $id)));
        }



        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a TAmostras entity.
     *
     * @Route("/NovoPlaneamento/{id}", name="tamostras_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:TAmostras')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find TAmostras entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tamostras'));
    }

    /**
     * Creates a form to delete a TAmostras entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tamostras_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Apagar'))
            ->getForm()
            ;
    }


}





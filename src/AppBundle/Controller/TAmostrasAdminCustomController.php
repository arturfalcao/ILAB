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
use AppBundle\Entity\Agenda;
use AppBundle\Form\AgendaType;
use AppBundle\Entity\ModelosListas;
use AppBundle\Entity\TResultados;
use AppBundle\Entity\TEstados;

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

            try {

                $sql = "SELECT MAX(id_table) FROM t_parametrosamostra_log ";
                $activeDate = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
                $activeDate->execute();
                $last =  $activeDate->fetchAll();

                $sql = "INSERT INTO t_parametrosamostra_log (fn_id, listatrabalho_id, ft_descricao, fn_id_metodo, fn_id_tecnica, fn_id_amostra, fn_id_areaensaio, fd_limiterealizacao, ft_cumpreespecificacao, ft_conclusao, fn_id_modeloparametro, ft_observacao, fd_criacao, fd_conclusao, fd_autorizacao, fn_id_laboratorio, fn_precocompra, fn_precovenda, fn_factorcorreccao, fb_acreditado, fn_limitelegal, fn_id_familiaparametro, ft_formulaquimica, fn_id_frasco, fn_volumeminimo, fb_confirmacao, ft_id_estado, fb_contraanalise, fd_Realizacao,id) SELECT aa.fn_id, aa.listatrabalho_id, aa.ft_descricao, aa.fn_id_metodo, aa.fn_id_tecnica, aa.fn_id_amostra, aa.fn_id_areaensaio, aa.fd_limiterealizacao, aa.ft_cumpreespecificacao, aa.ft_conclusao, aa.fn_id_modeloparametro, aa.ft_observacao, aa.fd_criacao, aa.fd_conclusao, aa.fd_autorizacao, aa.fn_id_laboratorio, aa.fn_precocompra, aa.fn_precovenda, aa.fn_factorcorreccao, aa.fb_acreditado, aa.fn_limitelegal, aa.fn_id_familiaparametro, aa.ft_formulaquimica, aa.fn_id_frasco, aa.fn_volumeminimo, aa.fb_confirmacao, aa.ft_id_estado, aa.fb_contraanalise, aa.fd_Realizacao , aa.id FROM t_parametrosamostra_log AS aa WHERE aa.fn_id_amostra =" . $value;

                $activeDate = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
                $activeDate->execute();

                $sql = "UPDATE t_parametrosamostra_log SET  date = NOW() ,  user = '". $this->get('security.token_storage')->getToken()->getUser() ."' , ft_id_estado = 'V' , fn_id_amostra = " .$value . " where id_table > " . $last[0]["MAX(id_table)"] ;
                $activeDate = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
                $activeDate->execute();


            } catch (Exception $e) {
                return new Response(json_encode($e));
            }
        }

        try {
            $sql = "update t_amostras set ft_id_estado = 'V' , updated_by_time = NOW() ,  updated_by = '". $this->get('security.token_storage')->getToken()->getUser() ."' where " . $where;
            $activeDate = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
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
    public function AmostrasGetCicloVidaPorParametroAction()
    {
        $arr = $this->get("request")->getContent();
        $arr2 = explode("=", $arr);
        $sql = "SELECT * FROM t_parametrosamostra_log WHERE id = ". $arr2[1] . " order by id asc";
        $activeDate = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
        $activeDate->execute();
        $result = $activeDate->fetchAll();
        return new Response(json_encode($result));
    }
    public function AmostrasGetParametroDataAction()
    {
        $arr = $this->get("request")->getContent();
        $arr2 = explode("=", $arr);
        $sql = "SELECT para.ft_custommethod, para.fn_id, para.ft_descricao,para.fn_id_metodo,para.fn_id_tecnica,para.fn_id_amostra,para.fn_id_areaensaio,para.fd_limiterealizacao,para.ft_cumpreespecificacao,para.ft_conclusao,para.fn_id_modeloparametro,para.ft_observacao,para.fd_criacao,para.fd_conclusao,para.fd_autorizacao,para.fn_id_laboratorio,para.fn_precocompra,para.fn_precovenda,para.fn_factorcorreccao,para.fb_acreditado,para.fn_limitelegal,para.fn_id_familiaparametro,para.ft_formulaquimica,para.fn_id_frasco,para.fn_volumeminimo,para.fb_confirmacao,para.ft_id_estado,para.fb_contraanalise,para.fd_Realizacao,para.fb_amostrainterno ,para.fb_amostraexterno ,para.fb_determinacaoexterno ,para.fb_determinacaointerno , modelo.ft_descricao AS modelodepara FROM t_parametrosamostra AS para  INNER JOIN t_modelosparametro AS modelo ON para.fn_id_modeloparametro = modelo.fn_id WHERE id = ". $arr2[1];
        $activeDate = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
        $activeDate->execute();
        $result = $activeDate->fetchAll();
        return new Response(json_encode($result));
    }

    public function AmostrasGetUnidadePorParametroAction()
    {
        $arr = $this->get("request")->getContent();
        $arr2 = explode("=", $arr);
        $sql = "SELECT * FROM t_resultados WHERE fn_id_parametro = ". $arr2[1];
        $activeDate = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
        $activeDate->execute();
        $result = $activeDate->fetchAll();
        return new Response(json_encode($result));
    }

    public function SaveParaporAmostraAction()
    {
        $arr1 = json_decode($this->get("request")->getContent(),true);

        $qb = $this->getDoctrine()->getManager()->createQueryBuilder();

        $q = $qb->update('AppBundle\Entity\TParametrosamostra', 'u')
            ->set('u.ftFormulaquimica', $qb->expr()->literal($arr1[1]))
            ->set('u.fnFamiliaparametro', $qb->expr()->literal($arr1[2]))
            ->set('u.fnLaboratorio', $qb->expr()->literal($arr1[3]))
            ->set('u.fnAreaensaio', $qb->expr()->literal($arr1[4]))
            ->set('u.fnMetodo', $qb->expr()->literal($arr1[5]))
            ->set('u.fnTecnica', $qb->expr()->literal($arr1[6]))
            ->set('u.fbConfirmacao', $qb->expr()->literal($arr1[7]))
            ->set('u.fbContraanalise', $qb->expr()->literal($arr1[8]))
            ->set('u.fnPrecocompra', $qb->expr()->literal($arr1[9]))
            ->set('u.fnPrecovenda', $qb->expr()->literal($arr1[10]))
            ->set('u.fnFactorcorreccao', $qb->expr()->literal($arr1[11]))
            ->set('u.ftConclusao', $qb->expr()->literal($arr1[12]))
            ->set('u.ftObservacao', $qb->expr()->literal($arr1[13]))
            ->set('u.fbAmostraexterno', $qb->expr()->literal($arr1[14]))
            ->set('u.fbAmostrainterno', $qb->expr()->literal($arr1[15]))
            ->set('u.fbDeterminacaoexterno', $qb->expr()->literal($arr1[16]))
            ->set('u.fbDeterminacaointerno', $qb->expr()->literal($arr1[17]))
            ->set('u.ftCustomMethod', $qb->expr()->literal($arr1[18]))
            ->where('u.id  = :idpara')
            ->setParameter('idpara', ($arr1[0]))
            ->getQuery();
        $p = $q->execute();
        return new Response(json_encode($p));
    }

    public function GetAllParaAction()
    {
        $queryBuilder = $this->getDoctrine()->getManager()->createQueryBuilder();
        $queryBuilder->select('u.ftDescricao','u.fnId' )->from('AppBundle:TParametros','u');
        // consider using ->getArrayResult() to use less memory
        return new Response(json_encode($queryBuilder->getQuery()->getResult()));
    }
    public function GetAllUnidadesMedidaAction()
    {
        $queryBuilder = $this->getDoctrine()->getManager()->createQueryBuilder();
        $queryBuilder->select('u.ftDescricao','u.fnId' )->from('AppBundle:TUnidadesmedida','u');
        // consider using ->getArrayResult() to use less memory
        return new Response(json_encode($queryBuilder->getQuery()->getResult()));
    }
    public function GetAllFamiliasAction()
    {
        $queryBuilder = $this->getDoctrine()->getManager()->createQueryBuilder();
        $queryBuilder->select('u.ftDescricao','u.fnId' )->from('AppBundle:TFamiliasparametros','u');
        // consider using ->getArrayResult() to use less memory
        return new Response(json_encode($queryBuilder->getQuery()->getResult()));
    }
    public function GetAllLaboratoriosAction()
    {
        $queryBuilder = $this->getDoctrine()->getManager()->createQueryBuilder();
        $queryBuilder->select('u.ftNome','u.fnId' )->from('AppBundle:TLaboratorios','u');
        // consider using ->getArrayResult() to use less memory
        return new Response(json_encode($queryBuilder->getQuery()->getResult()));
    }
    public function GetAllAreaAction()
    {
        $queryBuilder = $this->getDoctrine()->getManager()->createQueryBuilder();
        $queryBuilder->select('u.ftDescricao','u.fnId' )->from('AppBundle:TAreasensaio','u');
        // consider using ->getArrayResult() to use less memory
        return new Response(json_encode($queryBuilder->getQuery()->getResult()));
    }

    public function GetTecnicaByMetodoAction()
    {
        $arr = $this->get("request")->getContent();
        $arr2 = explode("=", $arr);
        $queryBuilder = $this->getDoctrine()->getManager()->createQueryBuilder();
        $queryBuilder->select('c.ftDescricao','c.fnId','(c.fnTecnica) as tecnica' )->from('AppBundle:TMetodos','c')->where('c.fnId=:cp')->setParameter('cp', $arr2[1]);
        return new Response(json_encode($queryBuilder->getQuery()->getResult()));


    }

    public function GetGrupoByModeloAction(){
        $arr = $this->get("request")->getContent();
        $arr2 = explode("=", $arr);
        $queryBuilder = $this->getDoctrine()->getManager()->createQueryBuilder();
        $queryBuilder1 = $this->getDoctrine()->getManager()->createQueryBuilder();

        $queryBuilder->select('(u.fnGrupoparametros) as grupo' )->from('AppBundle:TModelosamostra','u')->where('u.fnId=:cp')->setParameter('cp', $arr2[1]);

        $queryBuilder1->select('u.fnId' )->from('AppBundle:TGruposparametros','u')->where('u.fnId=:cp')->setParameter('cp', $queryBuilder->getQuery()->getResult()[0]['grupo'] );
        
        return new Response(json_encode($queryBuilder1->getQuery()->getResult()));

    }
    public function GetAllMetodoAction()
    {
        $arr = $this->get("request")->getContent();
        $arr2 = explode("=", $arr);

        $queryBuilder = $this->getDoctrine()->getManager()->createQueryBuilder();
        $queryBuilder1 = $this->getDoctrine()->getManager()->createQueryBuilder();

        if(array_key_exists( 1, $arr2) == true){
            $queryBuilder->select('u.fnId' )->from('AppBundle:TParametrosamostra','u')->where('u.id=:cp')->setParameter('cp', $arr2[1]);
            // consider using ->getArrayResult() to use less memory

            if($queryBuilder->getQuery()->getResult()[0]['fnId'] !== null){
                $sql = "SELECT * from t_parametrospormetodo where fn_id_metodo = ". $queryBuilder->getQuery()->getResult()[0]['fnId'] ." " ;
                $activeDate = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
                $activeDate->execute();
                $result = $activeDate->fetchAll();
                $where ="";
                foreach ($result as &$value) {

                    if($where  == ""){
                        $where .= "fn_id = " . $value['fn_id_parametro']  . "" ;
                    }else{
                        $where .= " or fn_id = " . $value['fn_id_parametro']  . "" ;
                    }
                }
                if( count($result) != 0){
                    $sql = "SELECT ft_descricao as ftDescricao , fn_id as fnId , fn_id_tecnica from t_metodos where ". $where ." " ;
                    $activeDate = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
                    $activeDate->execute();
                    $result = $activeDate->fetchAll();
                    return new Response(json_encode($result));

                }else{
                    $queryBuilder->select('c.ftDescricao','c.fnId','(u.fnTecnica) as tecnica ' )->from('AppBundle:TMetodos','c');
                }

            }else{
                $queryBuilder->select('u.ftDescricao','u.fnId' ,'(u.fnTecnica) as tecnica')->from('AppBundle:TMetodos','u');

            }
        }else{
            $queryBuilder->select('u.ftDescricao','u.fnId' ,'(u.fnTecnica) as tecnica')->from('AppBundle:TMetodos','u');
        }



        return new Response(json_encode($queryBuilder->getQuery()->getResult()));
    }

    public function GetAllTecnicaAction()
    {
        $queryBuilder = $this->getDoctrine()->getManager()->createQueryBuilder();
        $queryBuilder->select('u.ftDescricao','u.fnId' )->from('AppBundle:TTecnicas','u');
        // consider using ->getArrayResult() to use less memory
        return new Response(json_encode($queryBuilder->getQuery()->getResult()));
    }



    public function GetLegislacaoByProdutoAction()
    {
        $parameter = $this->get("request")->getContent();
        $parameter = explode("&", $parameter);
        $arr1 = explode("=", $parameter[0]);

        $produto_id = intval($arr1[1]);

        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();

        $statement = $connection->prepare('SELECT DISTINCT prod.fn_id_legislacao id_legislacao 
                                           FROM t_produtos prod
                                           WHERE prod.fn_id = :prod_id');

        $statement->bindValue('prod_id', $produto_id);
        $statement->execute();
        $results = $statement->fetchAll();

        $info = [];

        for($j=0;$j < count($results); $j++)
        {
            $info[$j]['id_legislacao'] = $results[$j]['id_legislacao'];
        }

        return new Response(json_encode($info));
    }
 
    public function GetEspecificacaoByProdutoAction()
    {
        $parameter = $this->get("request")->getContent();
        $parameter = explode("&", $parameter);
        $arr1 = explode("=", $parameter[0]);

        $produto_id = intval($arr1[1]);


        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare('SELECT DISTINCT te.fn_id_especificacao id_especificacao , e.ft_descricao descricao 
                                           FROM t_produtosespecificacoes te
                                           INNER JOIN t_especificacoes e ON te.fn_id_especificacao = e.fn_id
                                           WHERE te.fn_id_produto = :prod_id');
        $statement->bindValue('prod_id', $produto_id);
        $statement->execute();
        $results = $statement->fetchAll();

        $info = [];

        for($j=0;$j < count($results); $j++)
            {
                $info[$j]['id_especificacao'] = $results[$j]['id_especificacao'];
                $info[$j]['descricao'] = $results[$j]['descricao'];
            }

        return new Response(json_encode($info));
    }



    public function AmostrasGetParametrosAction()
    {
        $arr = $this->get("request")->getContent();
        $arr2 = explode("=", $arr);
        $sql = "SELECT DISTINCT p.id AS idparametro,r.fn_id as id ,r.ft_descricao AS resultado, p.ft_descricao AS parametros, e.ft_codigo , r.ft_formatado ,u.ft_descricao AS unidades , para_esp.ft_texto_relatorio FROM t_resultados AS r INNER JOIN t_parametrosamostra AS p ON r.fn_id_parametro = p.id  INNER JOIN t_estados AS e ON r.ft_id_estado = e.ft_id INNER JOIN t_unidadesmedida AS u ON r.fn_id_unidade = u.fn_id INNER JOIN t_amostras AS a ON r.fn_id_amostra = a.fn_id LEFT JOIN t_parametrosporespecificacao AS para_esp ON a.fn_id_especificacao = para_esp.fn_id_especificacao AND  p.fn_id = para_esp.fn_id_familiaparametro  WHERE  p.ft_id_estado NOT LIKE 'X' and r.fn_id_amostra = ".$arr2[1]." GROUP BY idparametro" ;
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

                        //$modelo = $em->getRepository('AppBundle:TModelosamostra')->findOneByftDescricao($rr[5]);
                        $estado = $em->getRepository('AppBundle:TEstados')->findOneByftCodigo('P');
                        $clientes = $em->getRepository('AppBundle:TClientes')->findOneByftCodigo($rr[2]);
                        $produtos = $em->getRepository('AppBundle:TProdutos')->findOneByftDescricao($rr[0]);
                        $grupos = $em->getRepository('AppBundle:TGruposparametros')->findOneByftCodigo($rr[1]);
                        $entity->setFtEstado($estado);
                        $entity->setFnCliente($clientes);
                        $entity->setFnProduto($produtos);
                        $entity->setFtGrupoparametros($grupos);
                        $entity->setFtRefexterna($rr[5]);
                        $entity->setUpdatedByTime(date("Y-m-d H:m:s"));
                        $entity->setUpdatedBy($this->get('security.token_storage')->getToken()->getUser());
                        //$entity->setFnModelo($modelo);
                        $date = new \DateTime(str_replace("/","-",$rr[3]));
                        $entity->setStartdatetime($date);
                        $date = new \DateTime(str_replace("/","-",$rr[4]));
                        $entity->setEnddatetime($date);
                        $em->persist($entity);
                        $em->flush();
                        $this->GenerateParaBySample($entity->getFnId() , $rr[1]);

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

    public function GenerateParaBySample($sample,$paraGroup){

        $em = $this->getDoctrine()->getManager();
        $amostra = $em->getRepository('AppBundle:TAmostras')->findOneByFnId($sample);
        $arr= [];

        $paraGroupID  = $em->getRepository('AppBundle:TGruposparametros')->findByftCodigo($paraGroup);
        $arr = $em->getRepository('AppBundle:TParametrosgrupo')->findBytgrupo($paraGroupID);

        // Cria os parametros e gera os primeiros log
        foreach ($arr as $value) {
            $value2= $em->getRepository('AppBundle:TParametros')->findOneByFnId($value->getTparametro());
            $conn = $this->getDoctrine()->getConnection();
            $sql = "INSERT INTO t_parametrosamostra (fn_id, listatrabalho_id, ft_descricao, fn_id_metodo, fn_id_tecnica, fn_id_amostra, fn_id_areaensaio, fd_limiterealizacao, ft_cumpreespecificacao, ft_conclusao, fn_id_modeloparametro, ft_observacao, fd_criacao, fd_conclusao, fd_autorizacao, fn_id_laboratorio, fn_precocompra, fn_precovenda, fn_factorcorreccao, fb_acreditado, fn_limitelegal, fn_id_familiaparametro, ft_formulaquimica, fn_id_frasco, fn_volumeminimo, fb_confirmacao, ft_id_estado, fb_contraanalise, fd_Realizacao ,fb_amostrainterno ,fb_amostraexterno ,fb_determinacaoexterno ,fb_determinacaointerno) SELECT aa.fn_id, aa.listatrabalho_id, aa.ft_descricao, aa.fn_id_metodo, aa.fn_id_tecnica, aa.fn_id_amostra, aa.fn_id_areaensaio, aa.fd_limiterealizacao, aa.ft_cumpreespecificacao, aa.ft_conclusao, aa.fn_id_modeloparametro, aa.ft_observacao, aa.fd_criacao, aa.fd_conclusao, aa.fd_autorizacao, aa.fn_id_laboratorio, aa.fn_precocompra, aa.fn_precovenda, aa.fn_factorcorreccao, aa.fb_acreditado, aa.fn_limitelegal, aa.fn_id_familiaparametro, aa.ft_formulaquimica, aa.fn_id_frasco, aa.fn_volumeminimo, aa.fb_confirmacao, 'V' , aa.fb_contraanalise, aa.fd_Realizacao ,aa.fb_amostrainterno ,aa.fb_amostraexterno ,aa.fb_determinacaoexterno ,aa.fb_determinacaointerno FROM t_parametros AS aa WHERE aa.fn_id = " . $value->getTparametro();
            $activeDate = $this->getDoctrine()->getManager()->getConnection();
            $activeDate->prepare($sql)->execute();
            $last = $activeDate->lastInsertId();

            //log parametros
            $sql = "INSERT INTO t_parametrosamostra_log (fn_id, listatrabalho_id, ft_descricao, fn_id_metodo, fn_id_tecnica, fn_id_amostra, fn_id_areaensaio, fd_limiterealizacao, ft_cumpreespecificacao, ft_conclusao, fn_id_modeloparametro, ft_observacao, fd_criacao, fd_conclusao, fd_autorizacao, fn_id_laboratorio, fn_precocompra, fn_precovenda, fn_factorcorreccao, fb_acreditado, fn_limitelegal, fn_id_familiaparametro, ft_formulaquimica, fn_id_frasco, fn_volumeminimo, fb_confirmacao, ft_id_estado, fb_contraanalise, fd_Realizacao,id) SELECT aa.fn_id, aa.listatrabalho_id, aa.ft_descricao, aa.fn_id_metodo, aa.fn_id_tecnica, aa.fn_id_amostra, aa.fn_id_areaensaio, aa.fd_limiterealizacao, aa.ft_cumpreespecificacao, aa.ft_conclusao, aa.fn_id_modeloparametro, aa.ft_observacao, aa.fd_criacao, aa.fd_conclusao, aa.fd_autorizacao, aa.fn_id_laboratorio, aa.fn_precocompra, aa.fn_precovenda, aa.fn_factorcorreccao, aa.fb_acreditado, aa.fn_limitelegal, aa.fn_id_familiaparametro, aa.ft_formulaquimica, aa.fn_id_frasco, aa.fn_volumeminimo, aa.fb_confirmacao, 'V' , aa.fb_contraanalise, aa.fd_Realizacao , aa.id FROM t_parametrosamostra AS aa WHERE aa.id = " . $last ;
            $activeDate = $this->getDoctrine()->getManager()->getConnection();
            $activeDate->prepare($sql)->execute();

            $sql = "UPDATE t_parametrosamostra SET fn_id_amostra = " . $sample . " where id=" .$last;
            $activeDate = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
            $activeDate->execute();

            //log parametros
            $sql = "UPDATE t_parametrosamostra_log SET  date = NOW() ,  user = '". $this->get('security.token_storage')->getToken()->getUser() ."' , fn_id_amostra = " . $sample . " where id=" . $last;


            $activeDate = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
            $activeDate->execute();
        }
            $arr = $em->getRepository('AppBundle:TParametrosamostra')->findByFnIdAmostra($sample);
            foreach ($arr as $value) {
            $value2= $em->getRepository('AppBundle:TParametrosamostra')->findOneBy(array('id' => $value->getId()));
            $info = $value2->getFtDescricao();
            if(!$em->getRepository('AppBundle:TResultados')->findOneBy(array('fnParametro' => $value2->getFnId(),'fnAmostra' => $amostra->getFnId()))){

                    $result = new TResultados();
                    $estado_resultados = $em->getRepository('AppBundle:TEstados')->findOneByFtCodigo('D');
                    $result->setFnAmostra($amostra);
                    $result->setFnParametro($value2);
                    $mod_para_id = $value2->getFnIdModeloparametro();
                    $mod_para = $em->getRepository('AppBundle:TModelosparametro')->findOneByFnId($mod_para_id);
                    $result->setFnModeloresultado($mod_para->getFnModeloresultado());
                    $result->setFnUnidade($mod_para->getFnModeloresultado()->getFnUnidade());
                    $result->setFtDescricao($value2->getFtDescricao());
                    $result->setFtEstado($estado_resultados);

                    $em->persist($result);
                    $em->flush();
                    $sql = "UPDATE t_resultados SET fn_id_parametro = " . $result->getFnParametro()->getId() . " where fn_id=" . $result->getFnId();
                    $activeDate = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
                    $activeDate->execute();
                }
            }

        }


    /**
     * Creates a new TAmostra entity.
     *
     * @Route("/NovoPlaneamento/new", name="tamostras_create")
     * @Method("GET")
     * @Template("AppBundle:TAmostrasAdminCustom:new.html.twig")
     */
    public function createAction(Request $request)
    {

        $entity = new TAmostras();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $estado = $em->getRepository('AppBundle:TEstados')->findOneByftId("P");
            $entity->setFtEstado($estado);
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
            'method' => 'GET',
        ));
        $form->add('submit','submit');


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

        $form->add('submit', 'submit', array('label' => 'Atualizar','attr'=> array('class'=>'celso')));

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





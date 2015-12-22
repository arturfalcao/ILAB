<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AppBundle\Entity\Agenda;
use AppBundle\Form\AgendaType;
use AppBundle\Entity\ModelosListas;
use AppBundle\Entity\TResultados;
use AppBundle\Entity\TEstados;
use Symfony\Component\HttpFoundation\Response;


/**
 * Agenda controller.
 *
 * @Route("/generateworklist")
 */
class WorkListCTRLController extends Controller
{

    public function GenerateworklistAction($slug)
    {
        $par_container= [];
        $em = $this->getDoctrine()->getManager();
        $amostra = $em->getRepository('AppBundle:TAmostras')->findOneByFnId($slug);
        $amostra2 = $em->getRepository('AppBundle:TAmostras')->findOneByFnId($slug);
        $estado = $em->getRepository('AppBundle:TEstados')->findOneByftId("D");
        $amostra->setFtEstado($estado);

        $em->persist($amostra);
        $arr = $amostra->getFnProduto()->getfnEspecificacoes();

        foreach ($arr as $value) {
            foreach ($value->getfnParametros() as $value2) {




                if(!$em->getRepository('AppBundle:TResultados')->findOneBy(array('fnParametro' => $value2->getFnId(),'fnAmostra' => $amostra2->getFnId()))){
                    $result = new TResultados();
                    $estado_resultados = $em->getRepository('AppBundle:TEstados')->findOneByFtCodigo('D');
                    $result->setFnAmostra($amostra2);
                    $result->setFnParametro($value2);
                    $mod_para_id = $value2->getFnIdModeloparametro();
                    $mod_para = $em->getRepository('AppBundle:TModelosparametro')->findOneByFnId($mod_para_id);
                    $result->setFnModeloresultado($mod_para->getFnModeloresultado());
                    $result->setFnUnidade($mod_para->getFnModeloresultado()->getFnUnidade());
                    $result->setFtDescricao($value2->getFtDescricao());
                    $result->setFtEstado($estado_resultados);
                    try{
                        $em->persist($result);
                        $em->flush();
                    }catch(\Exception $e){
                        var_dump($e->getMessage());
                    }
                }
                $amostra = $em->getRepository('AppBundle:ModelosListas')->findOneByidParametro($value2->getFnId());
                if($amostra != null){
                    $par_container[] = $amostra;
                }else{
                    $object = new ModelosListas();
                    $object->setTablejson("Por favor crie um modelo de Lista de Trabalho para o parametro " . $value2->getFtDescricao());

                    $par_container[] =$object;
                }
            }
        }
        return $this->render('AppBundle:ModelosListas:modelo.html.twig', array(
            'par_container' => $par_container
        ));
    }

}

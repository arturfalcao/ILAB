<?php

namespace AppBundle\Controller;

use AppBundle\Entity\TAmostrasParametros;
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

        $samples = explode(",", $slug);
        $par_container= [];
        $info = "";
        $nome_produto = "";
        $tipo_modelo = '';
        $info2 = "";
        $flag = 0;
        foreach ($samples as &$slug) {
            $em = $this->getDoctrine()->getManager();
            $amostra = $em->getRepository('AppBundle:TAmostras')->findOneByFnId($slug);

            if($amostra->getFtEstado()->getFtCodigo() != 'D' && $amostra->getFtEstado()->getFtCodigo() != 'C' && $amostra->getFtEstado()->getFtCodigo() != 'A' && $amostra->getFtEstado()->getFtCodigo() != 'X'){
                $arr = $em->getRepository('AppBundle:TParametrosgrupo')->findBytgrupo($amostra->getFnModelo()->getFnGrupoparametros()->getFnId());
            }else{
                $arr = $em->getRepository('AppBundle:TAmostrasParametros')->findByIdamostra($slug);
                $flag = 1;
            }



            $nome_produto = $amostra->getFnProduto()->getFtCodigo();

            foreach ($arr as $value) {

                if($flag == 0){
                    $value2= $em->getRepository('AppBundle:TParametros')->findOneByFnId($value->getTparametro());
                }else{
                    $value2= $em->getRepository('AppBundle:TParametros')->findOneByFnId($value->getIdparametro());
                }

                    $info = $value2->getFnIdAreaensaio();
                    $info2 = $em->getRepository('AppBundle:TAreasensaio')->findOneByFnId($info);


                    if (strpos($info2->getFtDescricao(),'Alimentos') !== false) {

                        if($tipo_modelo != '' && $tipo_modelo != 'Alimentos'){

                            $tipo_modelo = 'ERROR';

                        }else{
                            $tipo_modelo = 'Alimentos';
                        }
                    }else{
                        if($tipo_modelo != '' && $tipo_modelo != 'Agua'){
                            $tipo_modelo = 'ERROR';
                        }else{
                            $tipo_modelo = 'Agua';
                        }
                    }

            }
        }



        foreach ($samples as &$slug) {
            $data_inicio ="";
            $em = $this->getDoctrine()->getManager();
            $amostra = $em->getRepository('AppBundle:TAmostras')->findOneByFnId($slug);
            $amostra2 = $em->getRepository('AppBundle:TAmostras')->findOneByFnId($slug);
            $estado = $em->getRepository('AppBundle:TEstados')->findOneByftId("D");
            $data_inicio = $amostra2->getFdCriacao();
            $flag = 0;
            if($amostra->getFtEstado()->getFtCodigo() != 'D' && $amostra->getFtEstado()->getFtCodigo() != 'C' && $amostra->getFtEstado()->getFtCodigo() != 'A' && $amostra->getFtEstado()->getFtCodigo() != 'X'){

                $arr = $em->getRepository('AppBundle:TParametrosgrupo')->findBytgrupo($amostra2->getFnModelo()->getFnGrupoparametros()->getFnId());
                foreach ($arr as $value) {
                    $NewAmostraParametro = new TAmostrasParametros();
                    $NewAmostraParametro->setIdamostra($slug);

                    $NewAmostraParametro->setIdparametro($value->getTparametro());

                    $em->persist($NewAmostraParametro);
                    $em->flush();
                }

            }else{
                $arr = $em->getRepository('AppBundle:TAmostrasParametros')->findByIdamostra($slug);
                $flag = 1;
            }
            $amostra->setFtEstado($estado);
            $em->persist($amostra);
            $em->flush();
            $nome_produto = $amostra->getFnProduto()->getFtCodigo();

            foreach ($arr as $value) {
                if($flag == 0){
                    $value2= $em->getRepository('AppBundle:TParametros')->findOneByFnId($value->getTparametro());
                }else{
                    $value2= $em->getRepository('AppBundle:TParametros')->findOneByFnId($value->getIdparametro());
                }

                    $info = $value2->getFtDescricao();
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
                        $par_container[] = ['tipo_modelo' => $tipo_modelo ,'data_inicio' => $data_inicio   , "tablejson" => $amostra->getTablejson(),"id_amostra" => $amostra2->getFnId(),"nome_parametro" => $info,"tipo" => $nome_produto ];
                    }else{
                        $par_container[] = ['tipo_modelo' => $tipo_modelo  , "tablejson" => "Por favor crie um modelo de Lista de Trabalho para o parametro " . $value2->getFtDescricao(),"id_amostra" => $amostra2->getFnId(),"nome_parametro" => $info,"tipo" => $nome_produto ];

                    }

            }

        }



        return $this->render('AppBundle:ModelosListas:modelo.html.twig', array(
            'par_container' => $par_container,'tipo_de_amostra' => $tipo_modelo
        ));
    }

}

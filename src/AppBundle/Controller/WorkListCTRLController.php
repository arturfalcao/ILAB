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
use WhiteOctober\TCPDFBundle\WhiteOctoberTCPDFBundle;


/**
 * Agenda controller.
 *
 * @Route("/generateworklist")
 */
class WorkListCTRLController extends Controller
{



    //parametres actions
    public function CompleteparaAction(){
        error_reporting(0);
        $em = $this->getDoctrine()->getManager();
        $arr = $this->get("request")->getContent();
        $arr = json_decode($arr);
        $envia = "";
        foreach ($arr as &$value) {
            $resultados = $em->getRepository('AppBundle:TResultados')->findOneBy(array('fnId' => $value));
            $amostra = $em->getRepository('AppBundle:TParametrosamostra')->findOneBy(array('id' => $resultados->getFnParametro()));
            $estado = $em->getRepository('AppBundle:TEstados')->findOneBy(array('ftCodigo' => 'C'));
            $resultados->setFtEstado($estado);
            $amostra->setFtEstado($estado);
            $em->persist($amostra);
            $em->persist($resultados);
            $em->flush();

            $sql = "SELECT MAX(id_table) FROM t_parametrosamostra_log ";
            $activeDate = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
            $activeDate->execute();
            $last =  $activeDate->fetchAll();
            $envia = $envia ."," .$last[0]["MAX(id_table)"] ;

            $sql = "INSERT INTO t_parametrosamostra_log (fn_id, listatrabalho_id, ft_descricao, fn_id_metodo, fn_id_tecnica, fn_id_amostra, fn_id_areaensaio, fd_limiterealizacao, ft_cumpreespecificacao, ft_conclusao, fn_id_modeloparametro, ft_observacao, fd_criacao, fd_conclusao, fd_autorizacao, fn_id_laboratorio, fn_precocompra, fn_precovenda, fn_factorcorreccao, fb_acreditado, fn_limitelegal, fn_id_familiaparametro, ft_formulaquimica, fn_id_frasco, fn_volumeminimo, fb_confirmacao, ft_id_estado, fb_contraanalise, fd_Realizacao,id) SELECT aa.fn_id, aa.listatrabalho_id, aa.ft_descricao, aa.fn_id_metodo, aa.fn_id_tecnica, aa.fn_id_amostra, aa.fn_id_areaensaio, aa.fd_limiterealizacao, aa.ft_cumpreespecificacao, aa.ft_conclusao, aa.fn_id_modeloparametro, aa.ft_observacao, aa.fd_criacao, aa.fd_conclusao, aa.fd_autorizacao, aa.fn_id_laboratorio, aa.fn_precocompra, aa.fn_precovenda, aa.fn_factorcorreccao, aa.fb_acreditado, aa.fn_limitelegal, aa.fn_id_familiaparametro, aa.ft_formulaquimica, aa.fn_id_frasco, aa.fn_volumeminimo, aa.fb_confirmacao, aa.ft_id_estado, aa.fb_contraanalise, aa.fd_Realizacao , aa.id FROM t_parametrosamostra_log AS aa WHERE aa.ft_id_estado = 'D' and aa.fn_id_amostra = ".  $amostra->getFnIdAmostra() . " and aa.id =" . $amostra->getId();
            $activeDate = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
            $activeDate->execute();

            $sql = "UPDATE t_parametrosamostra_log SET  date = NOW() ,  user = '". $this->get('security.token_storage')->getToken()->getUser() ."' , ft_id_estado = 'C' where id_table > " . $last[0]["MAX(id_table)"] ;
            $activeDate = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
            $activeDate->execute();

        }

        return new Response($envia);
    }
    public function ReopenparaAction(){
        error_reporting(0);
        $em = $this->getDoctrine()->getManager();
        $arr = $this->get("request")->getContent();
        $arr = json_decode($arr);

        foreach ($arr as &$value) {

            $resultados = $em->getRepository('AppBundle:TResultados')->findOneBy(array('fnId' => $value));
            $amostra = $em->getRepository('AppBundle:TParametrosamostra')->findOneBy(array('id' => $resultados->getFnParametro()));
            $estado = $em->getRepository('AppBundle:TEstados')->findOneBy(array('ftCodigo' => 'D'));
            $resultados->setFtEstado($estado);
            $amostra->setFtEstado($estado);
            $em->persist($amostra);
            $em->persist($resultados);
            $em->flush();

            $sql = "SELECT MAX(id_table) FROM t_parametrosamostra_log ";
            $activeDate = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
            $activeDate->execute();
            $last =  $activeDate->fetchAll();

            $sql = "INSERT INTO t_parametrosamostra_log (fn_id, listatrabalho_id, ft_descricao, fn_id_metodo, fn_id_tecnica, fn_id_amostra, fn_id_areaensaio, fd_limiterealizacao, ft_cumpreespecificacao, ft_conclusao, fn_id_modeloparametro, ft_observacao, fd_criacao, fd_conclusao, fd_autorizacao, fn_id_laboratorio, fn_precocompra, fn_precovenda, fn_factorcorreccao, fb_acreditado, fn_limitelegal, fn_id_familiaparametro, ft_formulaquimica, fn_id_frasco, fn_volumeminimo, fb_confirmacao, ft_id_estado, fb_contraanalise, fd_Realizacao,id) SELECT aa.fn_id, aa.listatrabalho_id, aa.ft_descricao, aa.fn_id_metodo, aa.fn_id_tecnica, aa.fn_id_amostra, aa.fn_id_areaensaio, aa.fd_limiterealizacao, aa.ft_cumpreespecificacao, aa.ft_conclusao, aa.fn_id_modeloparametro, aa.ft_observacao, aa.fd_criacao, aa.fd_conclusao, aa.fd_autorizacao, aa.fn_id_laboratorio, aa.fn_precocompra, aa.fn_precovenda, aa.fn_factorcorreccao, aa.fb_acreditado, aa.fn_limitelegal, aa.fn_id_familiaparametro, aa.ft_formulaquimica, aa.fn_id_frasco, aa.fn_volumeminimo, aa.fb_confirmacao, aa.ft_id_estado, aa.fb_contraanalise, aa.fd_Realizacao , aa.id FROM t_parametrosamostra_log AS aa WHERE aa.ft_id_estado = 'D' and aa.fn_id_amostra = ".  $amostra->getFnIdAmostra() . " and aa.id =" . $amostra->getId();
            $activeDate = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
            $activeDate->execute();

            $sql = "UPDATE t_parametrosamostra_log SET  date = NOW() ,  user = '". $this->get('security.token_storage')->getToken()->getUser() ."' , ft_id_estado = 'D' where id_table > " . $last[0]["MAX(id_table)"] ;
            $activeDate = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
            $activeDate->execute();
        }

        return new Response($sql);
    }
    public function AddparaAction(){
        error_reporting(0);
        $em = $this->getDoctrine()->getManager();
        $arr = $this->get("request")->getContent();
        $arr2 = explode("&", $arr);
        $amostra = explode("=", $arr2[1]);
        $para = explode("=", $arr2[0]);
        $this->AddNewparaAction($amostra[1],$para[1]);
        return new Response("ok");
    }

    public function CancelparaAction(){
        error_reporting(0);
        $em = $this->getDoctrine()->getManager();
        $arr = $this->get("request")->getContent();
        $arr = json_decode($arr);

        foreach ($arr as &$value) {
            $resultados = $em->getRepository('AppBundle:TResultados')->findOneBy(array('fnId' => $value));
            $amostra = $em->getRepository('AppBundle:TParametrosamostra')->findOneBy(array('id' => $resultados->getFnParametro()));
            $estado = $em->getRepository('AppBundle:TEstados')->findOneBy(array('ftCodigo' => 'X'));
            $resultados->setFtEstado($estado);
            $amostra->setFtEstado($estado);
            $em->persist($amostra);
            $em->persist($resultados);
            $em->flush();

            $sql = "SELECT MAX(id_table) FROM t_parametrosamostra_log ";
            $activeDate = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
            $activeDate->execute();
            $last =  $activeDate->fetchAll();

            $sql = "INSERT INTO t_parametrosamostra_log (fn_id, listatrabalho_id, ft_descricao, fn_id_metodo, fn_id_tecnica, fn_id_amostra, fn_id_areaensaio, fd_limiterealizacao, ft_cumpreespecificacao, ft_conclusao, fn_id_modeloparametro, ft_observacao, fd_criacao, fd_conclusao, fd_autorizacao, fn_id_laboratorio, fn_precocompra, fn_precovenda, fn_factorcorreccao, fb_acreditado, fn_limitelegal, fn_id_familiaparametro, ft_formulaquimica, fn_id_frasco, fn_volumeminimo, fb_confirmacao, ft_id_estado, fb_contraanalise, fd_Realizacao,id) SELECT aa.fn_id, aa.listatrabalho_id, aa.ft_descricao, aa.fn_id_metodo, aa.fn_id_tecnica, aa.fn_id_amostra, aa.fn_id_areaensaio, aa.fd_limiterealizacao, aa.ft_cumpreespecificacao, aa.ft_conclusao, aa.fn_id_modeloparametro, aa.ft_observacao, aa.fd_criacao, aa.fd_conclusao, aa.fd_autorizacao, aa.fn_id_laboratorio, aa.fn_precocompra, aa.fn_precovenda, aa.fn_factorcorreccao, aa.fb_acreditado, aa.fn_limitelegal, aa.fn_id_familiaparametro, aa.ft_formulaquimica, aa.fn_id_frasco, aa.fn_volumeminimo, aa.fb_confirmacao, aa.ft_id_estado, aa.fb_contraanalise, aa.fd_Realizacao , aa.id FROM t_parametrosamostra_log AS aa WHERE aa.ft_id_estado = 'D' and aa.fn_id_amostra = ".  $amostra->getFnIdAmostra() . " and aa.id =" . $amostra->getId();
            $activeDate = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
            $activeDate->execute();

            $sql = "UPDATE t_parametrosamostra_log SET  date = NOW() ,  user = '". $this->get('security.token_storage')->getToken()->getUser() ."' , ft_id_estado = 'X' where id_table > " . $last[0]["MAX(id_table)"] ;
            $activeDate = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
            $activeDate->execute();
        }
        return new Response("ok");
    }

    public function EmitRelatorioAction(){

        $pdf = $this->container->get("white_october.tcpdf")->create(
            'P',
            PDF_UNIT,
            PDF_PAGE_FORMAT,
            true,
            'UTF-8',
            false
        );
        $pdf->SetAuthor('Pimenta do Vale');
        $pdf->SetTitle('Relatorio de Ensaio');
        $pdf->SetSubject('client');
        $pdf->SetKeywords('TCPDF, PDF, example, test, guide');
        $pdf->setFontSubsetting(true);

        $pdf->SetFont('helvetica', '', 11, '', true);
        $pdf->AddPage();

        $html = '<h1>Working on Symfony</h1>';

        $pdf->writeHTMLCell(
            $w = 0,
            $h = 0,
            $x = '',
            $y = '',
            $html,
            $border = 0,
            $ln = 1,
            $fill = 0,
            $reseth = true,
            $align = '',
            $autopadding = true
        );

        $pdf->Output("example.pdf", 'I');
        $pdf->Output("example.pdf", 'F');



    }

    //Sample actions
    public function CompletesampleAction($slug){
        error_reporting(0);
        $em = $this->getDoctrine()->getManager();
        $amostra = $em->getRepository('AppBundle:TAmostras')->findOneBy(array('fnId' => $slug));
        if($amostra->getFtEstado()->getFtCodigo() == 'P'){
            return new Response("Amostra Não Disponivel");
        }
        $estado = $em->getRepository('AppBundle:TEstados')->findOneBy(array('ftCodigo' => 'C'));
        $amostra->setFtEstado($estado);
        $em->persist($amostra);
        $em->flush();
        return new Response("ok");
    }

    public function ReopensampleAction($slug){
        error_reporting(0);
        $em = $this->getDoctrine()->getManager();
        $amostra = $em->getRepository('AppBundle:TAmostras')->findOneBy(array('fnId' => $slug));
        if($amostra->getFtEstado()->getFtCodigo() == 'P'){
            return new Response("Amostra Não Disponivel");
        }
        $estado = $em->getRepository('AppBundle:TEstados')->findOneBy(array('ftCodigo' => 'D'));
        $amostra->setFtEstado($estado);
        $em->persist($amostra);
        $em->flush();
        return new Response("ok");
    }
    public function CancelsampleAction($slug){
        error_reporting(0);
        $em = $this->getDoctrine()->getManager();
        $amostra = $em->getRepository('AppBundle:TAmostras')->findOneBy(array('fnId' => $slug));
        $estado = $em->getRepository('AppBundle:TEstados')->findOneBy(array('ftCodigo' => 'X'));
        $amostra->setFtEstado($estado);
        $em->persist($amostra);
        $em->flush();
        return new Response("ok");
    }

    //TODO : notificar cliente de amostra completa
    public function NotifysampleAction($slug){

    }

    public function AddNewparaAction($idsample,$idpara)
    {
        error_reporting(0);
        $samples = explode(",", $idsample);
        $par_container= [];
        $info = "";
        $nome_produto = "";
        $tipo_modelo = '';
        $info2 = "";
        $flag = 0;
        $resultflag = 0;

        $em = $this->getDoctrine()->getManager();


        //add new tparametrosamostra

        $value2= $em->getRepository('AppBundle:TParametros')->findOneByFnId($idpara);
        $amostra = $em->getRepository('AppBundle:TAmostras')->findOneByFnId($idsample);

        $conn = $this->getDoctrine()->getConnection();
        $sql = "INSERT INTO t_parametrosamostra (fn_id, listatrabalho_id, ft_descricao, fn_id_metodo, fn_id_tecnica, fn_id_amostra, fn_id_areaensaio, fd_limiterealizacao, ft_cumpreespecificacao, ft_conclusao, fn_id_modeloparametro, ft_observacao, fd_criacao, fd_conclusao, fd_autorizacao, fn_id_laboratorio, fn_precocompra, fn_precovenda, fn_factorcorreccao, fb_acreditado, fn_limitelegal, fn_id_familiaparametro, ft_formulaquimica, fn_id_frasco, fn_volumeminimo, fb_confirmacao, ft_id_estado, fb_contraanalise, fd_Realizacao,fb_amostrainterno ,fb_amostraexterno ,fb_determinacaoexterno ,fb_determinacaointerno) SELECT aa.fn_id, aa.listatrabalho_id, aa.ft_descricao, aa.fn_id_metodo, aa.fn_id_tecnica, aa.fn_id_amostra, aa.fn_id_areaensaio, aa.fd_limiterealizacao, aa.ft_cumpreespecificacao, aa.ft_conclusao, aa.fn_id_modeloparametro, aa.ft_observacao, aa.fd_criacao, aa.fd_conclusao, aa.fd_autorizacao, aa.fn_id_laboratorio, aa.fn_precocompra, aa.fn_precovenda, aa.fn_factorcorreccao, aa.fb_acreditado, aa.fn_limitelegal, aa.fn_id_familiaparametro, aa.ft_formulaquimica, aa.fn_id_frasco, aa.fn_volumeminimo, aa.fb_confirmacao, aa.ft_id_estado, aa.fb_contraanalise, aa.fd_Realizacao ,aa.fb_amostrainterno ,aa.fb_amostraexterno ,aa.fb_determinacaoexterno ,aa.fb_determinacaointerno FROM t_parametros AS aa WHERE aa.fn_id = " .$idpara;
        $activeDate = $this->getDoctrine()->getManager()->getConnection();
        $activeDate->prepare($sql)->execute();
        $celso = $conn->lastInsertId('id');

        //log parametros
        $sql = "INSERT INTO t_parametrosamostra_log (fn_id, listatrabalho_id, ft_descricao, fn_id_metodo, fn_id_tecnica, fn_id_amostra, fn_id_areaensaio, fd_limiterealizacao, ft_cumpreespecificacao, ft_conclusao, fn_id_modeloparametro, ft_observacao, fd_criacao, fd_conclusao, fd_autorizacao, fn_id_laboratorio, fn_precocompra, fn_precovenda, fn_factorcorreccao, fb_acreditado, fn_limitelegal, fn_id_familiaparametro, ft_formulaquimica, fn_id_frasco, fn_volumeminimo, fb_confirmacao, ft_id_estado, fb_contraanalise, fd_Realizacao,id) SELECT aa.fn_id, aa.listatrabalho_id, aa.ft_descricao, aa.fn_id_metodo, aa.fn_id_tecnica, aa.fn_id_amostra, aa.fn_id_areaensaio, aa.fd_limiterealizacao, aa.ft_cumpreespecificacao, aa.ft_conclusao, aa.fn_id_modeloparametro, aa.ft_observacao, aa.fd_criacao, aa.fd_conclusao, aa.fd_autorizacao, aa.fn_id_laboratorio, aa.fn_precocompra, aa.fn_precovenda, aa.fn_factorcorreccao, aa.fb_acreditado, aa.fn_limitelegal, aa.fn_id_familiaparametro, aa.ft_formulaquimica, aa.fn_id_frasco, aa.fn_volumeminimo, aa.fb_confirmacao, 'P' , aa.fb_contraanalise, aa.fd_Realizacao , aa.id FROM t_parametrosamostra AS aa WHERE aa.id = " . $celso;
        $activeDate = $this->getDoctrine()->getManager()->getConnection();
        $activeDate->prepare($sql)->execute();


        $sql = "UPDATE t_parametrosamostra SET fn_id_amostra = " . $idsample . " where id=" . $activeDate->lastInsertId();
        $activeDate = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
        $activeDate->execute();

        //log parametros
        $sql = "UPDATE t_parametrosamostra_log SET  ft_id_estado = 'D' , date = NOW() ,  user = '". $this->get('security.token_storage')->getToken()->getUser() ."' , fn_id_amostra = " . $idsample . " where id=" . $celso;


        $activeDate = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
        $activeDate->execute();

        $NewAmostraParametro = new TAmostrasParametros();
        $NewAmostraParametro->setIdamostra($idsample);

        $NewAmostraParametro->setIdparametro($idpara);

        $em->persist($NewAmostraParametro);
        $em->flush();

        //cria resultado
        if(!$em->getRepository('AppBundle:TResultados')->findOneBy(array('fnParametro' => $idpara,'fnAmostra' =>$idsample))){
            if($resultflag != 1){
                $result = new TResultados();
                $estado_resultados = $em->getRepository('AppBundle:TEstados')->findOneByFtCodigo('D');
                $result->setFnAmostra($amostra);

                $value2= $em->getRepository('AppBundle:TParametrosamostra')->findOneBy(array('id' => $celso));

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


       return "ok";
    }



    public function GenerateworklistAction($slug)
    {
        error_reporting(0);
        $samples = explode(",", $slug);
        $par_container= [];
        $info = "";
        $nome_produto = "";
        $tipo_modelo = '';
        $info2 = "";
        $flag = 0;
        $resultflag = 0;
        foreach ($samples as &$slug) {
            $em = $this->getDoctrine()->getManager();
            $amostra = $em->getRepository('AppBundle:TAmostras')->findOneByFnId($slug);

            if($amostra->getFtEstado()->getFtCodigo() != 'D'){
                $sql = "SELECT MAX(id_table) FROM t_parametrosamostra_log ";
                $activeDate = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
                $activeDate->execute();
                $last =  $activeDate->fetchAll();

                $sql = "INSERT INTO t_parametrosamostra_log (fn_id, listatrabalho_id, ft_descricao, fn_id_metodo, fn_id_tecnica, fn_id_amostra, fn_id_areaensaio, fd_limiterealizacao, ft_cumpreespecificacao, ft_conclusao, fn_id_modeloparametro, ft_observacao, fd_criacao, fd_conclusao, fd_autorizacao, fn_id_laboratorio, fn_precocompra, fn_precovenda, fn_factorcorreccao, fb_acreditado, fn_limitelegal, fn_id_familiaparametro, ft_formulaquimica, fn_id_frasco, fn_volumeminimo, fb_confirmacao, ft_id_estado, fb_contraanalise, fd_Realizacao,id) SELECT aa.fn_id, aa.listatrabalho_id, aa.ft_descricao, aa.fn_id_metodo, aa.fn_id_tecnica, aa.fn_id_amostra, aa.fn_id_areaensaio, aa.fd_limiterealizacao, aa.ft_cumpreespecificacao, aa.ft_conclusao, aa.fn_id_modeloparametro, aa.ft_observacao, aa.fd_criacao, aa.fd_conclusao, aa.fd_autorizacao, aa.fn_id_laboratorio, aa.fn_precocompra, aa.fn_precovenda, aa.fn_factorcorreccao, aa.fb_acreditado, aa.fn_limitelegal, aa.fn_id_familiaparametro, aa.ft_formulaquimica, aa.fn_id_frasco, aa.fn_volumeminimo, aa.fb_confirmacao, aa.ft_id_estado, aa.fb_contraanalise, aa.fd_Realizacao , aa.id FROM t_parametrosamostra_log AS aa WHERE aa.ft_id_estado = 'V' and aa.fn_id_amostra =" . $slug;

                $activeDate = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
                $activeDate->execute();

                $sql = "UPDATE t_parametrosamostra_log SET  date = NOW() ,  user = '". $this->get('security.token_storage')->getToken()->getUser() ."' , ft_id_estado = 'D' , fn_id_amostra = " .$slug . " where id_table > " . $last[0]["MAX(id_table)"] ;
                $activeDate = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
                $activeDate->execute();

            }


            if($amostra->getFtEstado()->getFtCodigo() == 'P'){
                return $this->render('AppBundle:ModelosListas:Indisponivel.html.twig');
            }

            if($amostra->getFtEstado()->getFtCodigo() != 'D' && $amostra->getFtEstado()->getFtCodigo() != 'C' && $amostra->getFtEstado()->getFtCodigo() != 'A' && $amostra->getFtEstado()->getFtCodigo() != 'X' && $amostra->getFtEstado()->getFtCodigo() != 'P' ){
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
/*
                if($flag == 0){


                    $value2= $em->getRepository('AppBundle:TParametros')->findOneByFnId($value->getTparametro());
                    $conn = $this->getDoctrine()->getConnection();
                    $sql = "INSERT INTO t_parametrosamostra (fn_id, listatrabalho_id, ft_descricao, fn_id_metodo, fn_id_tecnica, fn_id_amostra, fn_id_areaensaio, fd_limiterealizacao, ft_cumpreespecificacao, ft_conclusao, fn_id_modeloparametro, ft_observacao, fd_criacao, fd_conclusao, fd_autorizacao, fn_id_laboratorio, fn_precocompra, fn_precovenda, fn_factorcorreccao, fb_acreditado, fn_limitelegal, fn_id_familiaparametro, ft_formulaquimica, fn_id_frasco, fn_volumeminimo, fb_confirmacao, ft_id_estado, fb_contraanalise, fd_Realizacao) SELECT aa.fn_id, aa.listatrabalho_id, aa.ft_descricao, aa.fn_id_metodo, aa.fn_id_tecnica, aa.fn_id_amostra, aa.fn_id_areaensaio, aa.fd_limiterealizacao, aa.ft_cumpreespecificacao, aa.ft_conclusao, aa.fn_id_modeloparametro, aa.ft_observacao, aa.fd_criacao, aa.fd_conclusao, aa.fd_autorizacao, aa.fn_id_laboratorio, aa.fn_precocompra, aa.fn_precovenda, aa.fn_factorcorreccao, aa.fb_acreditado, aa.fn_limitelegal, aa.fn_id_familiaparametro, aa.ft_formulaquimica, aa.fn_id_frasco, aa.fn_volumeminimo, aa.fb_confirmacao, aa.ft_id_estado, aa.fb_contraanalise, aa.fd_Realizacao FROM t_parametros AS aa WHERE aa.fn_id = " . $value->getTparametro();
                    $activeDate = $this->getDoctrine()->getManager()->getConnection();
                    $activeDate->prepare($sql)->execute();
                    $last = $activeDate->lastInsertId();

                    //log parametros
                    $sql = "INSERT INTO t_parametrosamostra_log (fn_id, listatrabalho_id, ft_descricao, fn_id_metodo, fn_id_tecnica, fn_id_amostra, fn_id_areaensaio, fd_limiterealizacao, ft_cumpreespecificacao, ft_conclusao, fn_id_modeloparametro, ft_observacao, fd_criacao, fd_conclusao, fd_autorizacao, fn_id_laboratorio, fn_precocompra, fn_precovenda, fn_factorcorreccao, fb_acreditado, fn_limitelegal, fn_id_familiaparametro, ft_formulaquimica, fn_id_frasco, fn_volumeminimo, fb_confirmacao, ft_id_estado, fb_contraanalise, fd_Realizacao,id) SELECT aa.fn_id, aa.listatrabalho_id, aa.ft_descricao, aa.fn_id_metodo, aa.fn_id_tecnica, aa.fn_id_amostra, aa.fn_id_areaensaio, aa.fd_limiterealizacao, aa.ft_cumpreespecificacao, aa.ft_conclusao, aa.fn_id_modeloparametro, aa.ft_observacao, aa.fd_criacao, aa.fd_conclusao, aa.fd_autorizacao, aa.fn_id_laboratorio, aa.fn_precocompra, aa.fn_precovenda, aa.fn_factorcorreccao, aa.fb_acreditado, aa.fn_limitelegal, aa.fn_id_familiaparametro, aa.ft_formulaquimica, aa.fn_id_frasco, aa.fn_volumeminimo, aa.fb_confirmacao, aa.ft_id_estado, aa.fb_contraanalise, aa.fd_Realizacao , aa.id FROM t_parametrosamostra AS aa WHERE aa.fn_id = " . $value->getTparametro();
                    $activeDate = $this->getDoctrine()->getManager()->getConnection();
                    $activeDate->prepare($sql)->execute();

                    $sql = "UPDATE t_parametrosamostra SET fn_id_amostra = " . $slug . " where id=" .$last;
                    $activeDate = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
                    $activeDate->execute();

                    //log parametros
                    $sql = "UPDATE t_parametrosamostra_log SET  date = CURDATE() ,  user = '". $this->get('security.token_storage')->getToken()->getUser() ."' , fn_id_amostra = " . $slug . " where id=" . $last ;
                    $activeDate = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
                    $activeDate->execute();


                }else{
                    $value2= $em->getRepository('AppBundle:TParametros')->findOneByFnId($value->getIdparametro());
                    $resultflag = 1;
                }
                */

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


            //crio novo parametro associado a amostra em questão
            $arr = $em->getRepository('AppBundle:TParametrosamostra')->findByFnIdAmostra($slug);
            foreach ($arr as $value) {

                if($flag == 0){
                    $value2= $em->getRepository('AppBundle:TParametrosamostra')->findOneBy(array('id' => $value->getId()));
                }else{
                    $value2= $em->getRepository('AppBundle:TParametrosamostra')->findOneBy(array('id' => $value->getId()));

                }

                    $info = $value2->getFtDescricao();


                $logger = new \Doctrine\DBAL\Logging\DebugStack();


                if(!$em->getRepository('AppBundle:TResultados')->findOneBy(array('fnParametro' => $value2->getId(),'fnAmostra' => $amostra2->getFnId()))){
                    if($resultflag != 1){
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
                        $em->persist($result);
                        $em->flush();
                        $sql = "UPDATE t_resultados SET fn_id_parametro = " . $result->getFnParametro()->getId() . " where fn_id=" . $result->getFnId();
                        $activeDate = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
                        $activeDate->execute();
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

<?php

namespace AppBundle\Controller;

use AppBundle\Entity\TAmostrasParametros;
use AppBundle\Entity\TParametrosgrupo;

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
use Symfony\Component\HttpFoundation\BinaryFileResponse;

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

            $sql = "INSERT INTO t_parametrosamostra_log (fn_id, listatrabalho_id, ft_descricao, fn_id_metodo, fn_id_tecnica, fn_id_amostra, fn_id_areaensaio, fd_limiterealizacao, ft_cumpreespecificacao, ft_conclusao, fn_id_modeloparametro, ft_observacao, fd_criacao, fd_conclusao, fd_autorizacao, fn_id_laboratorio, fn_precocompra, fn_precovenda, fn_factorcorreccao, fb_acreditado, fn_limitelegal, fn_id_familiaparametro, ft_formulaquimica, fn_id_frasco, fn_volumeminimo, fb_confirmacao, ft_id_estado, fb_contraanalise, fd_Realizacao,id) SELECT aa.fn_id, aa.listatrabalho_id, aa.ft_descricao, aa.fn_id_metodo, aa.fn_id_tecnica, aa.fn_id_amostra, aa.fn_id_areaensaio, aa.fd_limiterealizacao, aa.ft_cumpreespecificacao, aa.ft_conclusao, aa.fn_id_modeloparametro, aa.ft_observacao, aa.fd_criacao, aa.fd_conclusao, aa.fd_autorizacao, aa.fn_id_laboratorio, aa.fn_precocompra, aa.fn_precovenda, aa.fn_factorcorreccao, aa.fb_acreditado, aa.fn_limitelegal, aa.fn_id_familiaparametro, aa.ft_formulaquimica, aa.fn_id_frasco, aa.fn_volumeminimo, aa.fb_confirmacao, aa.ft_id_estado, aa.fb_contraanalise, aa.fd_Realizacao , aa.id FROM t_parametrosamostra_log AS aa WHERE aa.ft_id_estado = 6 and aa.fn_id_amostra = ".  $amostra->getFnIdAmostra() . " and aa.id =" . $amostra->getId();
            $activeDate = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
            $activeDate->execute();

            $sql = "UPDATE t_parametrosamostra_log SET  date = NOW() ,  user = '". $this->get('security.token_storage')->getToken()->getUser() ."' , ft_id_estado = 3 where id_table > " . $last[0]["MAX(id_table)"] ;
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

            $sql = "INSERT INTO t_parametrosamostra_log (fn_id, listatrabalho_id, ft_descricao, fn_id_metodo, fn_id_tecnica, fn_id_amostra, fn_id_areaensaio, fd_limiterealizacao, ft_cumpreespecificacao, ft_conclusao, fn_id_modeloparametro, ft_observacao, fd_criacao, fd_conclusao, fd_autorizacao, fn_id_laboratorio, fn_precocompra, fn_precovenda, fn_factorcorreccao, fb_acreditado, fn_limitelegal, fn_id_familiaparametro, ft_formulaquimica, fn_id_frasco, fn_volumeminimo, fb_confirmacao, ft_id_estado, fb_contraanalise, fd_Realizacao,id) SELECT aa.fn_id, aa.listatrabalho_id, aa.ft_descricao, aa.fn_id_metodo, aa.fn_id_tecnica, aa.fn_id_amostra, aa.fn_id_areaensaio, aa.fd_limiterealizacao, aa.ft_cumpreespecificacao, aa.ft_conclusao, aa.fn_id_modeloparametro, aa.ft_observacao, aa.fd_criacao, aa.fd_conclusao, aa.fd_autorizacao, aa.fn_id_laboratorio, aa.fn_precocompra, aa.fn_precovenda, aa.fn_factorcorreccao, aa.fb_acreditado, aa.fn_limitelegal, aa.fn_id_familiaparametro, aa.ft_formulaquimica, aa.fn_id_frasco, aa.fn_volumeminimo, aa.fb_confirmacao, aa.ft_id_estado, aa.fb_contraanalise, aa.fd_Realizacao , aa.id FROM t_parametrosamostra_log AS aa WHERE aa.ft_id_estado = 6 and aa.fn_id_amostra = ".  $amostra->getFnIdAmostra() . " and aa.id =" . $amostra->getId();
            $activeDate = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
            $activeDate->execute();

            $sql = "UPDATE t_parametrosamostra_log SET  date = NOW() ,  user = '". $this->get('security.token_storage')->getToken()->getUser() ."' , ft_id_estado = 6 where id_table > " . $last[0]["MAX(id_table)"] ;
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

            $sql = "INSERT INTO t_parametrosamostra_log (fn_id, listatrabalho_id, ft_descricao, fn_id_metodo, fn_id_tecnica, fn_id_amostra, fn_id_areaensaio, fd_limiterealizacao, ft_cumpreespecificacao, ft_conclusao, fn_id_modeloparametro, ft_observacao, fd_criacao, fd_conclusao, fd_autorizacao, fn_id_laboratorio, fn_precocompra, fn_precovenda, fn_factorcorreccao, fb_acreditado, fn_limitelegal, fn_id_familiaparametro, ft_formulaquimica, fn_id_frasco, fn_volumeminimo, fb_confirmacao, ft_id_estado, fb_contraanalise, fd_Realizacao,id) SELECT aa.fn_id, aa.listatrabalho_id, aa.ft_descricao, aa.fn_id_metodo, aa.fn_id_tecnica, aa.fn_id_amostra, aa.fn_id_areaensaio, aa.fd_limiterealizacao, aa.ft_cumpreespecificacao, aa.ft_conclusao, aa.fn_id_modeloparametro, aa.ft_observacao, aa.fd_criacao, aa.fd_conclusao, aa.fd_autorizacao, aa.fn_id_laboratorio, aa.fn_precocompra, aa.fn_precovenda, aa.fn_factorcorreccao, aa.fb_acreditado, aa.fn_limitelegal, aa.fn_id_familiaparametro, aa.ft_formulaquimica, aa.fn_id_frasco, aa.fn_volumeminimo, aa.fb_confirmacao, aa.ft_id_estado, aa.fb_contraanalise, aa.fd_Realizacao , aa.id FROM t_parametrosamostra_log AS aa WHERE aa.ft_id_estado = 6 and aa.fn_id_amostra = ".  $amostra->getFnIdAmostra() . " and aa.id =" . $amostra->getId();
            $activeDate = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
            $activeDate->execute();

            $sql = "UPDATE t_parametrosamostra_log SET  date = NOW() ,  user = '". $this->get('security.token_storage')->getToken()->getUser() ."' , ft_id_estado = 2 where id_table > " . $last[0]["MAX(id_table)"] ;
            $activeDate = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
            $activeDate->execute();
        }
        return new Response("ok");
    }



    public function EmitRelatorioAction($slug){

        $em = $this->getDoctrine()->getManager();
        $arr = $this->get("request")->getContent();
        $amostra = $em->getRepository('AppBundle:TAmostras')->findOneBy(array('fnId' => $slug));
        $especificacao = $em->getRepository('AppBundle:TEspecificacoes')->findOneBy(array('fnId' => $amostra->getFnEspecificacao()));

        $conclusao = '<div></div><table class="margin"><tr><td class="apreciacao">'. utf8_decode("(*)Apreciação") .'</td></tr><tr><td class="font8">'.$amostra->getFtConclusao() .'</td></tr></table>';
        
        //TODO: ir buscar o tipo de parametros e colocar diretamente na tabela parametrosamostras

        $parametros = $em->getRepository('AppBundle:TParametrosamostra')->findByFnIdAmostra($slug);

        foreach ($parametros as &$value) {
            $parametro = $em->getRepository('AppBundle:TParametros')->findOneBy(array('fnId' => $value->getFnId()));
            $value->setFnTipoparametro($parametro->getFnTipoparametro());
        }

        $header_micro = '<table class="table_parametros" ><tr style="margin-top 5px;"><td style="width:15px;"></td><td colspan="4"><span>'. utf8_decode("Parâmetros Microbiologicos") .'</span><br/><span class="table_parametros_tecnica">'. utf8_decode("Método de ensaio / Técnica analítica") .'</span></td><td class="table_parametros_data"></td><td>Unidades</td><td class="table_parametros_data">'. $especificacao->getFtSiglavl().'</td><td></td><td class="table_parametros_data"></td></tr></table>';
        $header_fisico=  '<table class="table_parametros" ><tr style="margin-top 5px;"><td style="width:15px;"></td><td colspan="4"><span>'. utf8_decode("Físico-químicos") .'</span><br/><span class="table_parametros_tecnica">'. utf8_decode("Método de ensaio / Técnica analítica") .'</span></td><td class="table_parametros_data"></td><td>Unidades</td><td class="table_parametros_data">'. $especificacao->getFtSiglavl().'</td><td></td><td class="table_parametros_data"></td></tr></table>';
        $body_fisico="";
        $body_micro ="";
        $microeven = 0;
        $fisieven = 0;
        $microevenclass = 0;
        $fisievenclass = 0;
        //TODO: melhorar a logica dos parametros
        foreach ($parametros as &$value) {
            if($value->getFnTipoparametro() != null && $value->getFnTipoparametro()->getFtCodigo() == "Microbiologicos"){
                $resultado = $em->getRepository('AppBundle:TResultados')->findOneBy(array('fnParametro' => $value->getId()));
                $espe_texto = "";

                foreach ($especificacao->getfnParametros() as &$para_espe) {
                    if($para_espe->getFnId() == $value->getFnId()){
                        $espe_texto
                    }
                }


                if($body_micro == ""){
                    $body_micro = $header_micro . '<table class="table_resultados" ><tr style=""><td style="width:15px;">dsa1</td><td colspan="4" class="resultados_one" style="">'. utf8_decode($value->getFnFamiliaparametro()->getFtDescricao()) .' <br /><span class="table_parametros_tecnica">'. utf8_decode($value->getFnMetodo()->getFtDescricao()).'/ ' . $value->getFnMetodo()->getFnTecnica()->getFtDescricao() .'</span></td><td class="">'.$resultado->getFtFormatado() .'</td><td>'. $resultado->getFnUnidade()->getFtDescricao() .'</td><td class="table_parametros_data">sdaasd</td><td></td><td class="table_parametros_data"></td></tr>';
                    $microeven++;
                }else{
                    $microeven++;
                    if($microeven % 2 == 0){
                        $microevenclass = "#d3d3d3";
                    }else{
                        $microevenclass = "#ffffff";
                    }
                    $body_micro = $body_micro .  '<tr bgcolor="'.$microevenclass.'" style=""><td style="width:15px;">1sad</td><td bgcolor="'.$microevenclass.'" colspan="4" class="resultados_one" style="">'. utf8_decode($value->getFnFamiliaparametro()->getFtDescricao()) .' <br /><span class="table_parametros_tecnica">'. utf8_decode($value->getFnMetodo()->getFtDescricao()).'/ ' . $value->getFnMetodo()->getFnTecnica()->getFtDescricao() .'</span></td><td class="" bgcolor="'.$microevenclass.'">'.$resultado->getFtFormatado() .'</td><td bgcolor="'.$microevenclass.'">'. $resultado->getFnUnidade()->getFtDescricao() .'</td><td class="table_parametros_data"></td><td></td><td class="table_parametros_data"></td></tr>';

                }
            }
            if($value->getFnTipoparametro() != null && $value->getFnTipoparametro()->getFtCodigo() == "FisicoQuimicos"){
                $resultado = $em->getRepository('AppBundle:TResultados')->findOneBy(array('fnParametro' => $value->getId()));
                if($body_fisico == ""){
                    $body_fisico = $header_fisico . '<table class="table_resultados" ><tr style="margin-top 0px;"><td style="width:15px;">dsa1</td><td colspan="4" class="resultados_one" style="">'. utf8_decode($value->getFnFamiliaparametro()->getFtDescricao()) .' <br /><span class="table_parametros_tecnica">'. utf8_decode($value->getFnMetodo()->getFtDescricao()).'/ ' . $value->getFnMetodo()->getFnTecnica()->getFtDescricao() .'</span></td><td class="">'.$resultado->getFtFormatado() .'</td><td>'. $resultado->getFnUnidade()->getFtDescricao() .'</td><td class="table_parametros_data"></td><td></td><td class="table_parametros_data"></td></tr>';
                    $fisieven++;
                }else{
                    $fisieven++;
                    if($fisieven % 2 == 0){
                        $fisievenclass = "#d3d3d3";
                    }else{
                        $fisievenclass = "#ffffff";
                    }
                    $body_fisico = $body_fisico .  '<tr bgcolor="'.$fisievenclass.'" style="margin-top 0px;"><td style="width:15px;">dsa1</td><td colspan="4" class="resultados_one" style="">'. utf8_decode($value->getFnFamiliaparametro()->getFtDescricao()) .' <br /><span class="table_parametros_tecnica">'. utf8_decode($value->getFnMetodo()->getFtDescricao()).'/ ' . $value->getFnMetodo()->getFnTecnica()->getFtDescricao() .'</span></td><td class="">'.$resultado->getFtFormatado() .'</td><td>'. $resultado->getFnUnidade()->getFtDescricao() .'</td><td class="table_parametros_data"></td><td></td><td class="table_parametros_data"></td></tr>';
                }
            }
        }

        $body_fisico = $body_fisico . '</table></br>';
        $body_micro = $body_micro  . '</table></br>';
        $modeloamostra = $em->getRepository('AppBundle:TModelosamostra')->findOneBy(array('fnId' => $amostra->getFnModelo()->getFnId()));

        $amostraalimentos = $em->getRepository('AppBundle:TAmostrasalimentos')->findOneBy(array('fnId' => $amostra->getFnAmostrasalimentos()->getFnId()));
        $cliente = $em->getRepository('AppBundle:TClientes')->findOneBy(array('fnId' => $amostra->getFnCliente()->getFnId()));
        if($amostraalimentos->getFtLote() != null || $amostraalimentos->getFtAcondicionamento() != null ||  $amostraalimentos->getFtTemperatura() != null || $amostraalimentos->getFtFaseprocesso() != null  ){
            $origem = '<tr><td  style="font-size: 10px;text-aling:left;padding: 0;font-weight: bold;border-bottom: 1px solid black;width: 100%;margin: 0;" class="tit_info_amostra">Origem da Amostra:</td></tr><tr><td width="100" style="font-size: 10px;text-aling:left;padding-left: 10px;width: 100%;margin: 0;" class="tit_info_amostra">  <table border="0" align="left"><tr><td class="bold_one" style="font-size:8px;width: 140px;" >Lote: '.$amostraalimentos->getFtLote().'</td><td class="bold_one" style="font-size:8px;width:  140px;" >Acondicionamento:'.$amostraalimentos->getFtAcondicionamento().'</td></tr><tr><td class="bold_one" style="font-size:8px;width: 140px;" >Validade: '.$amostraalimentos->getFtValidade().' </td><td class="bold_one" style="font-size:8px;width: 140px;" >Fase do processo:'.$amostraalimentos->getFtFaseprocesso().'</td></tr><tr><td class="bold_one" style="font-size:8px;width: 140px;" >Temperatura: '.$amostraalimentos->getFtTemperatura().' </td></tr></table>  </td></tr>';
        }else{
            $origem = '<tr><td  style="font-size: 10px;text-aling:left;padding: 0;font-weight: bold;border-bottom: 1px solid black;width: 100%;margin: 0;" class="tit_info_amostra">Origem da Amostra:</td></tr><tr><td width="100" style="font-size: 10px;text-aling:left;padding-left: 10px;width: 100%;margin: 0;" class="tit_info_amostra">'.$amostra->getFtOrigem().'</td></tr>';
        }
        $pdf = $this->container->get("white_october.tcpdf")->create(
            'P',
            'mm',
            'A4',
            false,
            'ISO-8859-1',
            false
        );
        // set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Pimenta do Vale');
        $pdf->SetTitle('50267');


// set default header data
        $pdf->SetMargins(7, 35, 7);
        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));

        $pdf->SetHeaderData('logopimenta.png', 50, utf8_decode('RELATÓRIO DE ENSAIO Nº, 50267') , PDF_HEADER_STRING);
        $pdf->setFooterData(array(date("d-m-Y"), 0, 0), array(1, 0, 0));

        //texto das vars
        $ref = utf8_decode('Referência');
        $recepcao = utf8_decode('Recepção');
        $datacolheita = $amostra->getFdColheita()->format('d-m-Y');

        //date de recepção da amostra
        $sql = "select * from t_amostras_logs where fn_id_amostra = ".$slug." group by ft_id_estado order by fn_id desc";
        $activeDate = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
        $activeDate->execute();
        $datarecepcao =  $activeDate->fetchAll();
        if(count($datarecepcao) != 0){
            $datarecepcao = strtotime($datarecepcao[0]['updated_by_time']);
            $datarecepcao = date('d-m-Y',$datarecepcao);
        }else{
            $datarecepcao  ="";
        }

        //date de inicio dos trabalhos
        $sql = "select * from t_amostras_logs where fn_id_amostra = ".$slug." and ft_id_estado = 3 group by ft_id_estado order by fn_id desc";
        $activeDate = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
        $activeDate->execute();
        $datainicio =  $activeDate->fetchAll();

        if(count($datainicio) != 0){
            $datainicio = strtotime($datainicio[0]['updated_by_time']);
            $datainicio = date('d-m-Y',$datainicio);
        }else{
            $datainicio  ="";
        }

        //date de fim dos trabalhos
        $sql = "select * from t_amostras_logs where fn_id_amostra = ".$slug." and ft_id_estado = 2 group by ft_id_estado order by fn_id desc";
        $activeDate = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
        $activeDate->execute();
        $datafim =  $activeDate->fetchAll();
        if(count($datafim) != 0){
            $datafim  = strtotime($datafim[0]['updated_by_time']);
            $datafim  = date('d-m-Y',$datafim );
        }else{
            $datafim  ="";
        }



// set header and footer fonts


        $pdf->SetLineStyle(array('width' => 0.25 / 1, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(255, 255, 255)));

        $pdf->AddPage();

        $html = <<<EOF
        <style type="text/css">
    .info_amostra{
        font-size: 11px;
    }
    .odd{
        background-color: #FFFFAA;
    }
    h3{
        text-aling:left;padding: 0;font-weight: bold;border-bottom: 1px solid black;width: 100%;margin: 0;
    }
    .table_resultados *{
    font-size:8px !important;
    }
    .font8{
    font-size:8px !important;
    }
    .info_amostra div{
        float: left;
    }
    .table_colheita_info td{
        border:none;
        font-size:8px;
        padding: 2px;
    }
    .table_colheita_info {
        border-top :1px solid #000;
        border-bottom :1px solid #000;
    }
    .table_colheita_info .table_colheita_info_data{
        background-color: gray;
        padding-left: 10px;
    }

    .table_parametros_tecnica{
        font-size:7px;
        font-weight: normal;
    }
    .table_resultados .resultados_one{

        font-size:9px;
        font-weight: normal;
    }
     .table_resultados{
        
        border-bottom :2px solid #000;
    }
    .table_resultados span{
        width:100%;
    }
    .table_resultados{
    }
    .table_parametros td{
        border:none;
        font-size:9px;
        font-weight: bold;
        padding-top: 8px;
    }
    .table_parametros td span{
        display:block;
    }
    .table_parametros {
        border-top :1px solid #000;
        border-bottom :1px solid #000;
    }
    .apreciacao{
        font-size:10px;
        font-weight: bold;
        margin-top : 10px;
        border-bottom :2px solid #000;
    }
    .margin{
        margin-top : 10px;
    }
    .info_amostra div div{
        width: 100%;
        float: left;
        padding-left: 5px;
    }
</style>
        <table class="first"  cellspacing="1" cellpadding="1">
            <tr>
                <td  align="left" width="280">
                    <table cellspacing="1" cellpadding="2">
                        <tr>
                            <td  style="font-size: 10px;text-aling:left;padding: 0;font-weight: bold;border-bottom: 1px solid black;width: 100%;margin: 0;" class="tit_info_amostra">Tipo de Amostra:</td>
                        </tr>
                        <tr>
                            <td width="100" style="font-size: 10px;text-aling:left;padding-left: 10;width: 100%;margin: 0;" class="tit_info_amostra">{$modeloamostra->getFnTipoamostra()->getFtDescricao()}</td>
                        </tr>
                         {$origem}
                         <tr>
                            <td  style="font-size: 10px;text-aling:left;padding: 0;font-weight: bold;border-bottom: 1px solid black;width: 100%;margin: 0;" class="tit_info_amostra">Colheita Realizada por:</td>
                        </tr>
                        <tr>
                            <td width="100" style="font-size: 10px;text-aling:left;padding-left: 10;width: 100%;margin: 0;" class="tit_info_amostra">{$amostra->getFtResponsavelcolheita()}</td>
                        </tr>
                         <tr>
                            <td  style="font-size: 10px;text-aling:left;padding: 0;font-weight: bold;border-bottom: 1px solid black;width: 100%;margin: 0;" class="tit_info_amostra">{$ref}</td>
                        </tr>
                        <tr>
                            <td width="100" style="font-size: 10px;text-aling:left;padding-left: 10;width: 100%;margin: 0;" class="tit_info_amostra">{$amostra->getFtRefexterna()}</td>
                        </tr>
                    </table>
                </td>
                <td  align="left" width="10"></td>
                <td  align="left" width="220">
                    <table cellspacing="1" cellpadding="2">
                        <tr>
                            <td  style="font-size: 10px;text-aling:left;padding: 0;font-weight: bold;width: 100%;margin: 0;" class="tit_info_amostra"></td>
                        </tr>
                        <tr>
                            <td  style="font-size: 10px;text-aling:left;padding: 0;margin: 0;"  bgcolor="#d3d3d3" class="tit_info_amostra">{$cliente->getFtNome()}</td>
                        </tr>
                        <tr>
                            <td  style="font-size: 10px;text-aling:left;padding: 0;margin: 0;"  bgcolor="#d3d3d3" class="tit_info_amostra">{$cliente->getFtMorada()}</td>
                        </tr>
                        <tr>
                            <td  style="font-size: 10px;text-aling:left;padding: 0;margin: 0;" bgcolor="#d3d3d3" class="tit_info_amostra">{$cliente->getFtCodpostal()}- {$cliente->getFtLocalidade()}</td>
                        </tr>
                        <tr>
                            <td  style="font-size: 10px;text-aling:left;padding: 0;margin: 0;" bgcolor="#d3d3d3" class="tit_info_amostra"></td>
                        </tr>
                        <tr>
                            <td  style="font-size: 10px;text-aling:left;padding: 0;margin: 0;" class="tit_info_amostra"></td>
                        </tr>
                        <tr>
                            <td  style="font-size: 10px;text-aling:left;padding: 0;margin: 0;" class="tit_info_amostra"></td>
                        </tr>
                        <tr>
                            <td  style="font-size: 10px;text-aling:left;padding: 0;font-weight: bold;width: 100%;margin: 0;" class="tit_info_amostra"></td>
                        </tr>
                    </table>
                </td>
         </tr>
        </table>
        <table class="table_colheita_info" cellspacing="0" cellpadding="1">
            <tr>
                <td>Colheita:</td>
                <td class="table_colheita_info_data">{$datacolheita}</td>
                <td>{$recepcao}:</td>
                <td class="table_colheita_info_data">{$datarecepcao}</td>
                <td>Inicio ensaios:</td>
                <td class="table_colheita_info_data">{$datainicio}</td>
                <td>Fim dos ensaios:</td>
                <td class="table_colheita_info_data">{$datafim}</td>
            </tr>
        </table>
      {$body_micro}
      {$body_fisico}
      {$conclusao}
EOF;

        $tagvs = array('p' => array(1 => array('h' => 0.0001, 'n' => 1)), 'ul' => array(0 => array('h' => 0.0001, 'n' => 1)));
        $pdf->setHtmlVSpace($tagvs);

// output the HTML content
        $pdf->writeHTML($html, true, true, true, true, '');
        $pdf->setAutoPageBreak(true, 30);

        $pdf->lastPage();

// set default monospaced font


// set margins


// set auto page breaks


// set image scale factor
        $filelocation = "/var/www/html/lab/app/amostras";
        $fileNL = $filelocation."/".$slug.".pdf"; //Linux

        $pdf->Output($fileNL , 'FI');



    }

    //Get relatorio
    public function GetRelatorioAction($slug){

        $file = '/var/www/html/lab/app/amostras/87.pdf';
        $filename = 'filename.pdf';
        header('Content-type: application/pdf');
        header('Content-Disposition: inline; filename="' . $filename . '"');
        header('Content-Transfer-Encoding: binary');
        header('Accept-Ranges: bytes');
        @readfile($file);
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

    //get all sample with the selected parameter
    public function  GetparameterbysampleAction(){
        $id_parameter = $this->get("request")->getContent();
        $sql = "select t_parametrosamostra.fn_id_amostra , t_parametrosamostra.ft_descricao , t_parametrosamostra.ft_id_estado , t_metodos.ft_descricao as metodo, t_tecnicas.ft_descricao as tecnica from t_parametrosamostra inner join t_amostras on t_amostras.fn_id = t_parametrosamostra.fn_id_amostra left join t_metodos  on t_parametrosamostra.fn_id_metodo = t_metodos.fn_id left join t_tecnicas on t_metodos.fn_id_tecnica = t_tecnicas.fn_id where (t_amostras.ft_id_estado = 4 or t_amostras.ft_id_estado = 6 or t_amostras.ft_id_estado = 3 or t_amostras.ft_id_estado = 1) and t_parametrosamostra.fn_id = ". $id_parameter ;

        $activeDate = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
        $activeDate->execute();
        $result = $activeDate->fetchAll();
        if(count($result) != 0){
            $response = array("data" => $result);
        }else{
            $response = "NoData";
        }


        return new Response(json_encode($response));
        
    }
   // get parameters by sample for worklist groped by parameter
    public function  GetparameterbysampleForParameterAction(){
        $id_parameter = $this->get("request")->getContent();
        $arr2 = explode(",", $id_parameter );
        $id_parameter  = $arr2[0];
        $id_metodo = $arr2[1];



        $sql = "select t_parametrosamostra.fn_id_amostra , t_parametrosamostra.ft_descricao , t_parametrosamostra.ft_id_estado , t_metodos.ft_descricao as metodo, t_tecnicas.ft_descricao as tecnica from t_parametrosamostra inner join t_amostras on t_amostras.fn_id = t_parametrosamostra.fn_id_amostra left join t_metodos  on t_parametrosamostra.fn_id_metodo = t_metodos.fn_id left join t_tecnicas on t_metodos.fn_id_tecnica = t_tecnicas.fn_id where (t_amostras.ft_id_estado = 6 or t_amostras.ft_id_estado = 4) and t_parametrosamostra.fn_id_metodo = ". $id_metodo ." and t_parametrosamostra.fn_id = ". $id_parameter ;


        $activeDate = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
        $activeDate->execute();
        $result = $activeDate->fetchAll();
        if(count($result) != 0){
            $response = array("data" => $result);
        }else{
            $response = "NoData";
        }


        return new Response(json_encode($result));

    }
    //Selecção de parametro por lista de amostra
    public function EmiteListaporParametroAction(){

        $em = $this->getDoctrine()->getManager();
        $parameters = $em->getRepository('AppBundle:TParametros')->findAll();
        $metodos= $em->getRepository('AppBundle:TMetodos')->findAll();

        return $this->render('AppBundle:ModelosListas:listaporparametro.html.twig',array('data' => $parameters,'data_metodos' => $metodos));
    }

    //TODO : notificar cliente de amostra completa
    public function NotifysampleAction($slug){

        $em = $this->getDoctrine()->getManager();


        //add new tparametrosamostra
        $to      = 'celso.s.falcao@gmail.com';
        $subject = 'the subject';
        $message = 'hello';
        $headers = 'From: celso.silva@iwish.solutions' . "\r\n" .
            'Reply-To: celso.silva@iwish.solutions' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        mail($to, $subject, $message, $headers);
        return new Response("ok");
    }

    public function RelatoriosampleAction(){
        return new Response("ok");
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
        $sql = "INSERT INTO t_parametrosamostra_log (fn_id, listatrabalho_id, ft_descricao, fn_id_metodo, fn_id_tecnica, fn_id_amostra, fn_id_areaensaio, fd_limiterealizacao, ft_cumpreespecificacao, ft_conclusao, fn_id_modeloparametro, ft_observacao, fd_criacao, fd_conclusao, fd_autorizacao, fn_id_laboratorio, fn_precocompra, fn_precovenda, fn_factorcorreccao, fb_acreditado, fn_limitelegal, fn_id_familiaparametro, ft_formulaquimica, fn_id_frasco, fn_volumeminimo, fb_confirmacao, ft_id_estado, fb_contraanalise, fd_Realizacao,id) SELECT aa.fn_id, aa.listatrabalho_id, aa.ft_descricao, aa.fn_id_metodo, aa.fn_id_tecnica, aa.fn_id_amostra, aa.fn_id_areaensaio, aa.fd_limiterealizacao, aa.ft_cumpreespecificacao, aa.ft_conclusao, aa.fn_id_modeloparametro, aa.ft_observacao, aa.fd_criacao, aa.fd_conclusao, aa.fd_autorizacao, aa.fn_id_laboratorio, aa.fn_precocompra, aa.fn_precovenda, aa.fn_factorcorreccao, aa.fb_acreditado, aa.fn_limitelegal, aa.fn_id_familiaparametro, aa.ft_formulaquimica, aa.fn_id_frasco, aa.fn_volumeminimo, aa.fb_confirmacao, 8 , aa.fb_contraanalise, aa.fd_Realizacao , aa.id FROM t_parametrosamostra AS aa WHERE aa.id = " . $celso;
        $activeDate = $this->getDoctrine()->getManager()->getConnection();
        $activeDate->prepare($sql)->execute();


        $sql = "UPDATE t_parametrosamostra SET fn_id_amostra = " . $idsample . " where id=" . $activeDate->lastInsertId();
        $activeDate = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
        $activeDate->execute();

        //log parametros
        $sql = "UPDATE t_parametrosamostra_log SET  ft_id_estado = 6 , date = NOW() ,  user = '". $this->get('security.token_storage')->getToken()->getUser() ."' , fn_id_amostra = " . $idsample . " where id=" . $celso;


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

                $sql = "INSERT INTO t_parametrosamostra_log (fn_id, listatrabalho_id, ft_descricao, fn_id_metodo, fn_id_tecnica, fn_id_amostra, fn_id_areaensaio, fd_limiterealizacao, ft_cumpreespecificacao, ft_conclusao, fn_id_modeloparametro, ft_observacao, fd_criacao, fd_conclusao, fd_autorizacao, fn_id_laboratorio, fn_precocompra, fn_precovenda, fn_factorcorreccao, fb_acreditado, fn_limitelegal, fn_id_familiaparametro, ft_formulaquimica, fn_id_frasco, fn_volumeminimo, fb_confirmacao, ft_id_estado, fb_contraanalise, fd_Realizacao,id) SELECT aa.fn_id, aa.listatrabalho_id, aa.ft_descricao, aa.fn_id_metodo, aa.fn_id_tecnica, aa.fn_id_amostra, aa.fn_id_areaensaio, aa.fd_limiterealizacao, aa.ft_cumpreespecificacao, aa.ft_conclusao, aa.fn_id_modeloparametro, aa.ft_observacao, aa.fd_criacao, aa.fd_conclusao, aa.fd_autorizacao, aa.fn_id_laboratorio, aa.fn_precocompra, aa.fn_precovenda, aa.fn_factorcorreccao, aa.fb_acreditado, aa.fn_limitelegal, aa.fn_id_familiaparametro, aa.ft_formulaquimica, aa.fn_id_frasco, aa.fn_volumeminimo, aa.fb_confirmacao, aa.ft_id_estado, aa.fb_contraanalise, aa.fd_Realizacao , aa.id FROM t_parametrosamostra_log AS aa WHERE aa.ft_id_estado = 4 and aa.fn_id_amostra =" . $slug;

                $activeDate = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
                $activeDate->execute();

                $sql = "UPDATE t_parametrosamostra_log SET  date = NOW() ,  user = '". $this->get('security.token_storage')->getToken()->getUser() ."' , ft_id_estado = 6 , fn_id_amostra = " .$slug . " where id_table > " . $last[0]["MAX(id_table)"] ;
                $activeDate = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
                $activeDate->execute();

            }


            if($amostra->getFtEstado()->getFtCodigo() == 'P'){
                return $this->render('AppBundle:ModelosListas:Indisponivel.html.twig');
            }

            if($amostra->getFtEstado()->getFtCodigo() != 'D' && $amostra->getFtEstado()->getFtCodigo() != 'C' && $amostra->getFtEstado()->getFtCodigo() != 'A' && $amostra->getFtEstado()->getFtCodigo() != 'X' && $amostra->getFtEstado()->getFtCodigo() != 'P' ){
                $arr = $em->getRepository('AppBundle\Entity\TParametrosgrupo')->findBytgrupo($amostra->getFtGrupoparametros());
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

                if(!empty($amostra2->getFnModelo())){
                    $arr = $em->getRepository('AppBundle:TParametrosgrupo')->findBytgrupo($amostra2->getFnModelo()->getFnGrupoparametros()->getFnId());
                }else{
                    $arr = $em->getRepository('AppBundle:TParametrosgrupo')->findBytgrupo($amostra2->getFtGrupoparametros());
                }




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

    public function GetPDFFileAction($slug)
    {
        $slug = str_replace('"', "", $slug);
        return new BinaryFileResponse('../app/listas/' . $slug);
    }

//generate worklist by parameter
    public function GenerateworklistbyParameterAction(){


        //get os id de parametros
        $response = $this->get("request")->getContent();

        $arr2 = explode("&", $response);
        $amostra = explode("=", $arr2[0]);
        $amostra = explode("%2C", $amostra[1]);
        $para =explode("=", $arr2[1]);
        $para =$para[1];
        $metodo ="";
        $fileNL="";

        //get all html from modelos lista
        $em = $this->getDoctrine()->getManager();


        $repo = $this->getDoctrine()->getRepository('AppBundle:ModelosListas');

        $users = $repo->createQueryBuilder('q')
            ->Where('q.idParametro = '. $para)
            ->getQuery()
            ->getArrayResult();

        try {




            //generate pdf with html

            $pdf = $this->container->get("white_october.tcpdf")->create(
                'P',
                'mm',
                'A4',
                false,
                'ISO-8859-1',
                false
            );
            // set document information
            $pdf->SetCreator(PDF_CREATOR);
            $pdf->SetAuthor('Pimenta do Vale');
            $pdf->SetTitle('Lista de Trabalho');



            // set default header data

            $pdf->SetMargins(7, 35, 7);
            $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
            $enc = mb_detect_encoding("Emissão:", "UTF-8,ISO-8859-1");


            $pdf->setAutoPageBreak(true, 30);


            $html = '<table border="1" aling="center">';
            $body="";
            $header_aux = 0 ;
            $sql = "SELECT max(fn_id_lista) as max_id_lista from t_parametrosamostra";
            $activeDate = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
            $activeDate->execute();
            $result1 = $activeDate->fetchAll();



            $result1[0]['max_id_lista'] =$result1[0]['max_id_lista'] != null ?$result1[0]['max_id_lista'] : 0;
            $result1[0]['max_id_lista']++;

            for ($i = 0; $i < 30; $i++) {
                foreach ($amostra as &$value) {

                    if ($value != "") {
                        $sql = "SELECT t_parametrosamostra.fn_id_amostra as amostra, t_parametrosamostra.ft_descricao as parametro , t_gruposparametros.ft_codigo as grupo  , t_metodos.ft_descricao as metodo , t_unidadesmedida.ft_descricao as unidade FROM t_parametrosamostra inner join t_amostras on t_parametrosamostra.fn_id_amostra = t_amostras.fn_id inner join t_gruposparametros on t_amostras.ft_grupoparametros = t_gruposparametros.fn_id inner join t_metodos on t_parametrosamostra.fn_id_metodo = t_metodos.fn_id inner join t_resultados on t_parametrosamostra.id = t_resultados.fn_id_parametro inner join t_unidadesmedida on t_resultados.fn_id_unidade = t_unidadesmedida.fn_id where t_parametrosamostra.fn_id_amostra = " . $value . " and t_parametrosamostra.fn_id = " . $para . ";";
                        $activeDate = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
                        $activeDate->execute();
                        $result = $activeDate->fetchAll();

                        $sql = "UPDATE t_parametrosamostra SET fn_id_lista = ".$result1[0]['max_id_lista'] ." where t_parametrosamostra.fn_id_amostra = " . $value . " and t_parametrosamostra.fn_id = " . $para;
                        $activeDate = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
                        $activeDate->execute();

                        if ($header_aux == 0) {
                            $header_aux = 1;
                            $pdf->SetHeaderData('logopimenta.png', 50, '<table border="0" align="center"><tr><th>Lista de Trabalho</th></tr><tr><th>' . utf8_decode($result[0]["parametro"]) . ' (' . utf8_decode($result[0]["metodo"]) . ')</th></tr><tr><th>' . utf8_decode($result[0]["unidade"]) . '</th></tr><tr><th>Codigo: '.$result1[0]["max_id_lista"].'</th></tr><tr><th>' . utf8_decode("Emissão:") . date("d-m-Y") . '</th></tr></table>', PDF_HEADER_STRING);
                            $pdf->setFooterData(array(0, 0, 0), array(0, 0, 0));

                            // set header and footer fonts

                            //$pdf->SetLineStyle(array('width' => 0.25 / 1, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(255, 255, 255)));

                            $pdf->AddPage();
                            $pdf->SetFont('helvetica', '', 10, '', 'default', true);
                        }

                        $pdf->SetFont('helvetica', '', 10, '', 'default', true);

                        $body = $body . '<tr style="line-height: 4px;"><th></th></tr><tr><th style="width: 40px;"  >' . $result[0]["grupo"] . '</th><th style="width: 50px;">' . $result[0]["amostra"] . '</th><th style="width: 470px;">' . $users[0]["tablejson"] . '</th></tr>';
                    }

                }
            }

            $head=$users[0]['cabecalhojson'];

            $html = <<<EOD
            <style>
  th {
    font-size: 8px;
  }
  .bold_one{
    font-weight: bold;
  }
  tr {
    font-size: 8px;
  }
</style>
<table border="0" align="center">
<tr style="line-height: 4px;"><th></th></tr>
<tr>
<th class="bold_one" style="width: 40px;" >Tipo</th>
<th class="bold_one" style="width: 50px;">Amostra</th>
<th class="bold_one" style="width: 470px;">{$head}</th>
</tr>
{$body}
</table>
EOD;

        $pdf->writeHTML($html, true, false, false, false, 'center');

        // output the HTML content
        //$pdf->writeHTML($html, true, false, true,false, '');

            $pdf->lastPage();

        // set default monospaced font
        // set margins
        // set auto page breaks
        // set image scale factor

        $filelocation = "/var/www/html/lab/app/listas";
        $fileNL = $filelocation."/".$result1[0]['max_id_lista'].".pdf"; //Linux
        $pdf->Output($fileNL , 'F');

        //change all sample to state on progress

        //change all parameter to state on progress
        } catch (Exception $e) {
            return new Response(json_encode($e->getMessage()));

        }
            return new Response(json_encode("" . $result1[0]['max_id_lista'].".pdf"));


    }

}

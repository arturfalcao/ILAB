<?php

namespace AppBundle\Controller;


use AppBundle\Form\TMetodosType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\TParametros;
use AppBundle\Entity\TMetodos;
use AppBundle\Form\TParametrosType;


class EntResultadosController extends Controller
{
    /**
     * @Route("/entresultados", name="Entrada de Resultados")
     */
    public function EntradaResultadosAction()
    {
        $em = $this->getDoctrine()->getManager();
        $parameters = $em->getRepository('AppBundle:TParametros')->findAll();
        return $this->render('AppBundle:EntradaResultados:EntradaResultados.html.twig',array('data' => $parameters));
    }
    public function getByParameterAction()
    {
        $id_parameter = $this->get("request")->getContent();
        //$sql = "SELECT t_parametrosporespecificacao.fn_id_familiaparametro FROM t_amostras inner join t_produtos on t_amostras.fn_id_produto = t_produtos.fn_id inner join t_produtosespecificacoes on t_produtos.fn_id = t_produtosespecificacoes.fn_id_produto inner join t_parametrosporespecificacao on t_produtosespecificacoes.fn_id_especificacao = t_parametrosporespecificacao.fn_id_especificacao where ft_id_estado = 'D' and t_parametrosporespecificacao.fn_id_familiaparametro = ". $id_parameter ."  ";
        $sql = "SELECT t_resultados.ft_observacao ,t_resultados.fd_criacao ,t_resultados.fd_conclusao , t_unidadesmedida.ft_descricao AS medida, t_parametros.ft_descricao , t_resultados.ft_id_estado, t_resultados.fn_id_amostra, t_resultados.fn_calculado,t_resultados.ft_original,t_resultados.ft_prefixo, t_resultados.ft_formatado FROM t_resultados INNER JOIN t_parametros ON t_resultados.fn_id_parametro = t_parametros.fn_id INNER JOIN t_unidadesmedida ON t_unidadesmedida.fn_id = t_resultados.fn_id_unidade  WHERE fn_id_parametro =". $id_parameter ." AND t_resultados.ft_id_estado = 'D'";
        $activeDate = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
        $activeDate->execute();
        $result = $activeDate->fetchAll();



        $response = array("data" => $result);

        return new Response(json_encode($response));
    }

}

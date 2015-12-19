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
        $sql = "SELECT t_parametrosporespecificacao.fn_id_familiaparametro FROM t_amostras inner join t_produtos on t_amostras.fn_id_produto = t_produtos.fn_id inner join t_produtosespecificacoes on t_produtos.fn_id = t_produtosespecificacoes.fn_id_produto inner join t_parametrosporespecificacao on t_produtosespecificacoes.fn_id_especificacao = t_parametrosporespecificacao.fn_id_especificacao where ft_id_estado = 'D' and t_parametrosporespecificacao.fn_id_familiaparametro = ". $id_parameter ."  ";
        $activeDate = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
        $activeDate->execute();

        $result = $activeDate->fetchAll();

        $response = array("data" => $result, "success" => true);

        return new Response(json_encode($response));
    }

}

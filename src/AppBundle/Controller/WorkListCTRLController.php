<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AppBundle\Entity\Agenda;
use AppBundle\Form\AgendaType;
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
        $em = $this->getDoctrine()->getManager();
        $amostra = $em->getRepository('AppBundle:TAmostras')->findOneByFnId($slug);
        $arr = $amostra->getFnProduto()->getfnEspecificacoes();


        foreach ($arr as $value) {
            foreach ($value->getfnParametros() as $value2) {

                $amostra = $em->getRepository('AppBundle:ModelosListas')->findOneByidParametro($value2->getFnId());
                var_dump($amostra->getTablejson());
            }

        }

        die();
    }

}

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

/**
 * Agenda controller.
 *
 * @Route("/Planeamento")
 */
class TAmostrasAdminCustomController extends Controller
{


    /**
     * Creates a new TAmostra entity.
     *
     * @Route("/NovoPlaneamento", name="planeamento_create")
     * @Method("POST")
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
            'action' => $this->generateUrl('planeamento_create'),
            'method' => 'POST',
        ));
        return $form;
    }

}

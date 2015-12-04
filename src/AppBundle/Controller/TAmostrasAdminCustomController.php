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
     * Lists all TAmostras entities.
     *
     * @Route("/NovoPlaneamento", name="tamostras")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:TAmostras')->findAll();


        return array(
            'entities' => $entities,
        );
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





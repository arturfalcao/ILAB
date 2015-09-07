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
 * @Route("/agenda")
 */
class AgendaController extends Controller
{

    /**
     * Lists all Agenda entities.
     *
     * @Route("/calendar", name="agenda")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Agenda')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Agenda entity.
     *
     * @Route("/calendar", name="agenda_create")
     * @Method("POST")
     * @Template("AppBundle:Agenda:new.html.twig")
     */
    public function createAction(Request $request)
    {

        $entity = new Agenda();
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
    private function createCreateForm(Agenda $entity)
    {

        $form = $this->createForm(new AgendaType(), $entity, array(
            'action' => $this->generateUrl('agenda_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Agenda entity.
     *
     * @Route("calendar/new", name="agenda_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Agenda();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Agenda entity.
     *
     * @Route("calendar/{id}", name="agenda_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Agenda')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Agenda entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Agenda entity.
     *
     * @Route("calendar/{id}/edit", name="agenda_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Agenda')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Agenda entity.');
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
    * Creates a form to edit a Agenda entity.
    *
    * @param Agenda $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Agenda $entity)
    {
        $form = $this->createForm(new AgendaType(), $entity, array(
            'action' => $this->generateUrl('agenda_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Agenda entity.
     *
     * @Route("calendar/{id}", name="agenda_update")
     * @Method("PUT")
     * @Template("AppBundle:Agenda:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Agenda')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Agenda entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('agenda_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Agenda entity.
     *
     * @Route("calendar/{id}", name="agenda_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:Agenda')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Agenda entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('agenda'));
    }

    /**
     * Creates a form to delete a Agenda entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('agenda_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }



    /**
     * Creates a new Agenda entity.
     *
     * @Route("/calendar/newshort", name="agenda_create_short")
     * @Method("POST")
     */
    public function newshortAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = new Agenda();

        $form = $this->createFormBuilder($entity)
            ->add('title',null,array('label' => 'O que'))
            ->add('startdatetime',null,array( 'attr'=>array('style'=>'display:none;','id'=>'start_date_short'),'label' => false))
            ->add('enddatetime',null,array( 'attr'=>array('style'=>'display:none;','id'=>'end_date_short'),'label' => false))
            ->add('submit','submit')
            ->getForm();
        $form->handleRequest($request);

        if ($request->getMethod() == "POST") {
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($entity);
                $em->flush();
                $data1 = $entity->getStartdatetime()->format('Y-m-d H:i:s');
                $data2 = $entity->getEnddatetime()->format('Y-m-d H:i:s');

                return new Response('{"events" : {"event" : {"id": '. $entity->getId() .',"title": "'. $entity->getTitle() .'","startdate": "'. $data1 .'","enddate": "'. $data2.'"}}}');
            }

        }else{
            return $this->render('AppBundle:Agenda:newshort.html.twig', array('form'=>$form->createView()));
        }

    }

    /**
     * Creates a new Agenda entity.
     *
     * @Route("/calendar/newshort/{slug}", name="agenda_update_short")
     * @Method({"PUT", "DELETE"})
     */
    public function updatenewshortAction($slug)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $request = $this->getRequest();
        $AJAXresponse = array();

        if(isset($slug)){
            $myEntity = $em->getRepository('AppBundle:Agenda')->find($slug);
        }


        $defaultData = array('message' => 'Type your message here');


        if ($request->getMethod() == 'PUT') {
            if($request->request->get('start') != ""){
                $dateStarted = \DateTime::createFromFormat('D M d Y H:i:s e+', $request->request->get('start')); // Thu Nov 15 2012 00:00:00 GMT-0700 (Mountain Standard Time)
                $myEntity->setStartdatetime($dateStarted);
            }
            if($request->request->get('end') != ""){
                $endStarted = \DateTime::createFromFormat('D M d Y H:i:s e+', $request->request->get('end')); // Thu Nov 15 2012 00:00:00 GMT-0700 (Mountain Standard Time)
                $myEntity->setEnddatetime($endStarted );
            }

            $em->flush();

            return new Response("ok");
        }else{
            if ($request->getMethod() == "DELETE") {
                $em->remove($myEntity);
                $em->flush();

                return new Response('' + $myEntity->getId());

            }else{
                return new Response('Alguma coisa correu mal');
            }

        }





    }

}

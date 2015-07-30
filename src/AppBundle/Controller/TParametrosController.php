<?php

namespace AppBundle\Controller;

use AppBundle\Entity\TMetodos;
use AppBundle\Form\TMetodosType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\TParametros;
use AppBundle\Form\TParametrosType;

/**
 * TParametros controller.
 *
 * @Route("/tparametros")
 */
class TParametrosController extends Controller
{

    /**
     * Lists all TParametros entities.
     *
     * @Route("/", name="tparametros")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:TParametros')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new TParametros entity.
     *
     * @Route("/", name="tparametros_create")
     * @Method("POST")
     * @Template("AppBundle:TParametros:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new TParametros();
        $form = $this->createCreateForm($entity);

        if ($request->getRequestFormat() == 'json')
          $form->submit($request->request->all());
        else
          $form->handleRequest($request);

        if ($form->isValid()) {

            //exit(\Doctrine\Common\Util\Debug::dump($entity));

            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect(
              $this->generateUrl(
                'tparametros_show',
                array('id' => $entity->getFnId()))
            );
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a TParametros entity.
     *
     * @param TParametros $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(TParametros $entity)
    {

        $form = $this->createForm(new TParametrosType(), $entity, array(
            'action' => $this->generateUrl('tparametros_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new TParametros entity.
     *
     * @Route("/new", name="tparametros_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new TParametros();
        $form   = $this->createCreateForm($entity);

        return $this->render('default/newaction.html.twig', array(
          'entity' => $entity,
          'form'   => $form->createView()
        ));

    }

    /**
     * Finds and displays a TParametros entity.
     *
     * @Route("/{id}", name="tparametros_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:TParametros')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TParametros entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing TParametros entity.
     *
     * @Route("/{id}/edit", name="tparametros_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:TParametros')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TParametros entity.');
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
    * Creates a form to edit a TParametros entity.
    *
    * @param TParametros $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(TParametros $entity)
    {
        $form = $this->createForm(new TParametrosType(), $entity, array(
            'action' => $this->generateUrl('tparametros_update', array('id' => $entity->getFnId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * @Route("/newrole", name="new_contact_role")
     */
    public function newContactRoleAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        $newMethod = new TMetodos();

        $MethodForm = $this->createForm(
            new TMetodosType(),
            $newMethod,
            array('action' => $this->generateUrl('new_contact_role'),
                'method' => 'POST')
        );

        if ($request->isMethod('POST')) {
            $MethodForm->handleRequest($request);

            if ($MethodForm->isValid()) {
                $methodData = $MethodForm->getData();

                $em->persist($methodData);
                $em->flush();

                $response = new Response(json_encode([
                    'success' => true,
                    'id' => $methodData->getFnId(),
                    'name'  => $methodData->getFtDescricao()
                ]));
                $response->headers->set('Content-Type', 'application/json');

                return $response;
            }
        }

        return $this->render("default/newmethod.html.twig", array(
            'form_role'  =>  $MethodForm->createView()
        ));
    }

    /**
     * Edits an existing TParametros entity.
     *
     * @Route("/{id}", name="tparametros_update")
     * @Method("PUT")
     * @Template("AppBundle:TParametros:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:TParametros')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TParametros entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('tparametros_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a TParametros entity.
     *
     * @Route("/{id}", name="tparametros_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:TParametros')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find TParametros entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tparametros'));
    }

    /**
     * Creates a form to delete a TParametros entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tparametros_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }

    public function getParametrosAction()
    {
      $em = $this->getDoctrine()->getManager();
      $entities = $em->getRepository('AppBundle:TParametros')->findAll();
      return array(
          'entities' => $entities,
      );
    }

    public function getParametroAction($slug)
    {
      $em = $this->getDoctrine()->getManager();
      $entity = $em->getRepository('AppBundle:TParametros')->find($slug);
      return $entity;
    }
}

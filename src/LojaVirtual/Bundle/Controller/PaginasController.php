<?php

namespace LojaVirtual\Bundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use LojaVirtual\Bundle\Entity\Paginas;
use LojaVirtual\Bundle\Form\PaginasType;

/**
 * Paginas controller.
 *
 * @Route("/teste")
 */
class PaginasController extends Controller
{
    /**
     * Lists all Paginas entities.
     *
     * @Route("/", name="teste")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('LojaBundle:Paginas')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a Paginas entity.
     *
     * @Route("/{id}/show", name="teste_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LojaBundle:Paginas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Paginas entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new Paginas entity.
     *
     * @Route("/new", name="teste_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Paginas();
        $form   = $this->createForm(new PaginasType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new Paginas entity.
     *
     * @Route("/create", name="teste_create")
     * @Method("POST")
     * @Template("LojaBundle:Paginas:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Paginas();
        $form = $this->createForm(new PaginasType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('teste_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Paginas entity.
     *
     * @Route("/{id}/edit", name="teste_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LojaBundle:Paginas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Paginas entity.');
        }

        $editForm = $this->createForm(new PaginasType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Paginas entity.
     *
     * @Route("/{id}/update", name="teste_update")
     * @Method("POST")
     * @Template("LojaBundle:Paginas:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LojaBundle:Paginas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Paginas entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new PaginasType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('teste_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Paginas entity.
     *
     * @Route("/{id}/delete", name="teste_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('LojaBundle:Paginas')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Paginas entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('teste'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}

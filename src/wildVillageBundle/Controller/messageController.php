<?php

namespace wildVillageBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use wildVillageBundle\Entity\message;
use wildVillageBundle\Form\messageType;

/**
 * message controller.
 *
 */
class messageController extends Controller
{
    /**
     * Lists all message entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $messages = $em->getRepository('wildVillageBundle:message')->findAll();

        return $this->render('message/index.html.twig', array(
            'messages' => $messages,
        ));
    }

    /**
     * Creates a new message entity.
     *
     */
    public function newAction(Request $request)
    {
        $message = new message();
        $form = $this->createForm('wildVillageBundle\Form\messageType', $message);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($message);
            $em->flush();

            return $this->redirectToRoute('mess_show', array('id' => $message->getId()));
        }

        return $this->render('message/new.html.twig', array(
            'message' => $message,
            'form' => $form->createView(),
        ));
    }

    /**
     * Creates a new message entity.
     *
     */
        public function messageAction(Request $request)
    {

        $message = new message();
        $user = $this->container->get('security.context')->getToken()->getUser();
        $message->setUsersent($user);

        $form = $this->createForm('wildVillageBundle\Form\messageType', $message);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($message);
            $em->flush();

            return $this->redirectToRoute('mess_mess', array('id' => $message->getId()));
        }

        $em = $this->getDoctrine()->getManager();
        $messagesenvoyes = $em->getRepository('wildVillageBundle:message')->findByusersent("$user");
        $messagesrecus = $em->getRepository('wildVillageBundle:message')->findByuserdest("$user");

        return $this->render('message/message.html.twig', array(
            'messagesrecus' => $messagesrecus,
            'messagesenvoyes' => $messagesenvoyes,
            'message' => $message,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a message entity.
     *
     */
    public function showAction(message $message)
    {
        $deleteForm = $this->createDeleteForm($message);

        return $this->render('message/show.html.twig', array(
            'message' => $message,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing message entity.
     *
     */
    public function editAction(Request $request, message $message)
    {
        $deleteForm = $this->createDeleteForm($message);
        $editForm = $this->createForm('wildVillageBundle\Form\messageType', $message);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($message);
            $em->flush();

            return $this->redirectToRoute('mess_edit', array('id' => $message->getId()));
        }

        return $this->render('message/edit.html.twig', array(
            'message' => $message,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

        public function suppressionAction(Request $request, message $message)
    {
        $deleteForm = $this->createDeleteForm($message);
        $editForm = $this->createForm('wildVillageBundle\Form\messageType', $message);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($message);
            $em->flush();

            return $this->redirectToRoute('mess_edit', array('id' => $message->getId()));
        }

        return $this->render('message/suppression.html.twig', array(
            'message' => $message,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a message entity.
     *
     */
    public function deleteAction(Request $request, message $message)
    {
        $form = $this->createDeleteForm($message);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($message);
            $em->flush();
        }

        return $this->redirectToRoute('mess_mess');
    }

    /**
     * Creates a form to delete a message entity.
     *
     * @param message $message The message entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(message $message)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('mess_delete', array('id' => $message->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

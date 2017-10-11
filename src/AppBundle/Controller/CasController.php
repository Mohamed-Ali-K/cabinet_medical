<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Cas;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Ca controller.
 *
 * @Route("Cas")
 */
class CasController extends Controller
{


    /**
     * Creates a new ca entity.
     *
     * @Route("/new", name="Cas_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $user = $this->getUser()->getId();
        $cabinets = $this->getDoctrine()
            ->getRepository('AppBundle:Cabinet')
            ->findOneBy(array('user_id' => $user));
        $cas = new Cas();
        $nomCas = $request->get('nomCas');
        $examenType = $request->get('examenType');
        $cas->setNomCas($nomCas);
        $cas->setExamenType($examenType);
        $cas->setCabinet($cabinets);

        $em= $this->getDoctrine()->getManager();
        $em->persist($cas);
        $em->flush();
        $this->addFlash( 'notice', 'Cas Added');


        return $this->redirectToRoute('Cas_index');
    }

    /**
     * Finds and displays a ca entity.
     *
     * @Route("/{id}", name="Cas_show")
     * @Method("GET")
     */
    public function showAction(Cas $ca)
    {
        $deleteForm = $this->createDeleteForm($ca);

        return $this->render('cas/show.html.twig', array(
            'ca' => $ca,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ca entity.
     *
     * @Route("/{id}/edit", name="Cas_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Cas $ca)
    {
        $deleteForm = $this->createDeleteForm($ca);
        $editForm = $this->createForm('AppBundle\Form\CasType', $ca);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('Cas_edit', array('id' => $ca->getId()));
        }

        return $this->render('cas/edit.html.twig', array(
            'ca' => $ca,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ca entity.
     *
     * @Route("/{id}", name="Cas_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Cas $ca)
    {
        $form = $this->createDeleteForm($ca);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ca);
            $em->flush();
        }

        return $this->redirectToRoute('Cas_index');
    }

    /**
     * Creates a form to delete a ca entity.
     *
     * @param Cas $ca The ca entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Cas $ca)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('Cas_delete', array('id' => $ca->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

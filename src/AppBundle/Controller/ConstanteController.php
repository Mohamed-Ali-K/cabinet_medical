<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Constante;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Constante controller.
 *
 * @Route("constante")
 */
class ConstanteController extends Controller
{
    /**
     * Lists all constante entities.
     *
     * @Route("/", name="constante_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $constantes = $em->getRepository('AppBundle:Constante')->findAll();

        return $this->render('constante/index.html.twig', array(
            'constantes' => $constantes,
        ));
    }

    /**
     * Creates a new constante entity.
     *
     * @Route("/new", name="constante_new")
     * @Method({"GET", "POST"})
     */
    public function newAction( Request $request)
    {
        $Cabinets = $this->getDoctrine()
            ->getRepository('AppBundle:Cabinet')
            ->find(2);

        $constante = new Constante();

        $takenDate = $request->get('takenDate');
        $poid = $request->get('poid');
        $taille = $request->get('taille');
        $pas = $request->get('pas');
        $pad = $request->get('pad');
        $pouls = $request->get('pouls');
        $temp = $request->get('temp');
        $glycemie = $request->get('glycemie');
        $cholest = $request->get('cholest');
        $id = $request->get('idp');
        $Patient = $this->getDoctrine()
            ->getRepository('AppBundle:Patient')
            ->find($id);
        $constante->setTakenDate(\DateTime::createFromFormat('Y-m-d H:m:s',$takenDate));
        $constante->setPoid($poid);
        $constante->setTaille($taille);
        $constante->setPas($pas);
        $constante->setPad($pad);
        $constante->setPouls($pouls);
        $constante->setTemp($temp);
        $constante->setGlycemie($glycemie);
        $constante->setCholest($cholest);
        $constante->setPatient($Patient);
        $constante->setCabinet($Cabinets);


            $em= $this->getDoctrine()->getManager();
            $em->persist($constante);
            $em->flush();
            $this->addFlash( 'notice', 'Constant Added');


            return $this->redirectToRoute('Patient_list');

    }

    /**
     * Finds and displays a constante entity.
     *
     * @Route("/{id}", name="constante_show")
     * @Method("GET")
     */
    public function showAction(Constante $constante)
    {
        $deleteForm = $this->createDeleteForm($constante);

        return $this->render('constante/show.html.twig', array(
            'constante' => $constante,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing constante entity.
     *
     * @Route("/{id}/edit", name="constante_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Constante $constante)
    {
        $deleteForm = $this->createDeleteForm($constante);
        $editForm = $this->createForm('AppBundle\Form\ConstanteType', $constante);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('constante_edit', array('id' => $constante->getId()));
        }

        return $this->render('constante/edit.html.twig', array(
            'constante' => $constante,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a constante entity.
     *
     * @Route("/{id}", name="constante_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Constante $constante)
    {
        $form = $this->createDeleteForm($constante);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($constante);
            $em->flush();
        }

        return $this->redirectToRoute('constante_index');
    }

    /**
     * Creates a form to delete a constante entity.
     *
     * @param Constante $constante The constante entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Constante $constante)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('constante_delete', array('id' => $constante->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

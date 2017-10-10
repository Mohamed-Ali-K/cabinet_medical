<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Contact;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Contact controller.
 *
 * @Route("Contact")
 */
class ContactController extends Controller
{

    /**
     * @Route("/create", name="RenderContact")
     */
    public function RendercontactAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('contact/new.html.twig');
    }

    /**
     * Lists all contact entities.
     *
     * @Route("/", name="Contact_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $user = $this->getUser()->getId();
        $Cabinets = $this->getDoctrine()
            ->getRepository('AppBundle:Cabinet')
            ->findOneBy(array('user_id' => $user));
        $contacts = $this->getDoctrine()
            ->getRepository('AppBundle:Contact')
            ->findBy(array ('cabinet' => $Cabinets),array('id' => 'ASC'));;

        return $this->render('contact/index.html.twig', array(
            'contacts' => $contacts,'Cabinets' => $Cabinets
        ));
    }

    /**
     * Creates a new contact entity.
     *
     * @Route("/new", name="Contact_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $user = $this->getUser()->getId();

        $Cabinets = $this->getDoctrine()
            ->getRepository('AppBundle:Cabinet')
            ->findOneBy(array('user_id' => $user));

        $contact = new Contact();

        $type = $request->get('type');
        $nom = $request->get('nom');
        $prenom = $request->get('prenom');
        $specialite = $request->get('specialite');
        $tel = $request->get('tel');
        $tel2 = $request->get('tel2');
        $fax = $request->get('fax');
        $adress = $request->get('adress');
        $ville = $request->get('ville');
        $pays = $request->get('country');
        $localisation = $request->get('localisation');
        $email = $request->get('email');
        $web = $request->get('web');

        $contact->setType($type);
        $contact->setNom($nom);
        $contact->setPrenom($prenom);
        $contact->setSpecialite($specialite);
        $contact->setTel($tel);
        $contact->setTel2($tel2);
        $contact->setFax($fax);
        $contact->setAdress($adress);
        $contact->setVille($ville);
        $contact->setPays($pays);
        $contact->setCabinet($Cabinets);
        $contact->setLocalisation($localisation);
        $contact->setEmail($email);
        $contact->setWeb($web);

        $em= $this->getDoctrine()->getManager();
        $em->persist($contact);
        $em->flush();
        $this->addFlash( 'notice', 'Contact Added');


        return $this->redirectToRoute('Patient_list');

    }

    /**
     * Finds and displays a contact entity.
     *
     * @Route("/{id}", name="Contact_show")
     * @Method("GET")
     */
    public function showAction(Contact $contact)
    {
        $deleteForm = $this->createDeleteForm($contact);

        return $this->render('contact/show.html.twig', array(
            'contact' => $contact,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing contact entity.
     *
     * @Route("/{id}/edit", name="Contact_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Contact $contact)
    {
        $deleteForm = $this->createDeleteForm($contact);
        $editForm = $this->createForm('AppBundle\Form\ContactType', $contact);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('Contact_edit', array('id' => $contact->getId()));
        }

        return $this->render('contact/edit.html.twig', array(
            'contact' => $contact,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a contact entity.
     *
     * @Route("/{id}", name="Contact_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Contact $contact)
    {
        $form = $this->createDeleteForm($contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($contact);
            $em->flush();
        }

        return $this->redirectToRoute('Contact_index');
    }

    /**
     * Creates a form to delete a contact entity.
     *
     * @param Contact $contact The contact entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Contact $contact)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('Contact_delete', array('id' => $contact->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

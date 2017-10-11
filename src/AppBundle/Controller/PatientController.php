<?php
/**
 * Created by PhpStorm.
 * User: Broton PC
 * Date: 24/09/2017
 * Time: 00:17
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Patient;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;



/**
 * Patient controller.
 *
 * @Route("Patient")
 */
class PatientController extends Controller
{
    /**
     * Lists all Patient entities.
     *
     * @Route("/", name="Patient_list")
     */
    public function listAction(Request $request){

        $user = $this->getUser()->getId();
        $cabinets = $this->getDoctrine()
            ->getRepository('AppBundle:Cabinet')
            ->findOneBy(array('user_id' => $user));
        $Patients = $this->getDoctrine()
            ->getRepository('AppBundle:Patient')
            ->findBy(array ('cabinet' => $cabinets),array('id' => 'ASC'));

        return $this->render(':cabinet/Patient:index.html.twig', array(
            'Patients' => $Patients,'cabinets' => $cabinets

        ));
    }


    /**
     * @Route("/create", name="addPatient")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render(':cabinet/Patient:create.html.twig');
    }


    /**
     * @Route("/subPatient", name="subPatient")
     *
     */
    public function addAction(Request $request)
    {
        $user = $this->getUser()->getId();
        $cabinets = $this->getDoctrine()
            ->getRepository('AppBundle:Cabinet')
            ->findOneBy(array('user_id' => $user));
        $Patient = new Patient();

        $name = $request->get('name');
        $lastName = $request->get('lastName');
        $birthdate = $request->get('birthdate');
        $sexe = $request->get('sexe');
        $matricule = $request->get('matricule');
        $assurance = $request->get('assurance');
        $addressMail = $request->get('addressMail');
        $etatCiv = $request->get('etatCiv');
        $fonction = $request->get('fonction');
        $telPortable = $request->get('telPortable');
        $telFix = $request->get('telFix');
        $adresse = $request->get('adresse');
        $remarques = $request->get('remarques');


        $Patient->setName($name);
        $Patient->setLastName($lastName);
        $Patient->setBirthdate(\DateTime::createFromFormat('Y-m-d',$birthdate));
        $Patient->setSexe($sexe);
        $Patient->setMatricule($matricule);
        $Patient->setAssurance($assurance);
        $Patient->setAddressMail($addressMail);
        $Patient->setEtatCiv($etatCiv);
        $Patient->setFonction($fonction);
        $Patient->setTelPortable($telPortable);
        $Patient->setTelFix($telFix);
        $Patient->setAdresse($adresse);
        $Patient->setRemarques($remarques);
        $Patient->setCabinet($cabinets);

        $em= $this->getDoctrine()->getManager();
        $em->persist($Patient);
        $em->flush();
        $this->addFlash( 'notice', 'Patient Added');


        return $this->redirectToRoute('Patient_list');
    }

    /**
     * @Route("/details/{id}", name="Patient_details")
     */
    public function detailsAction($id ){
        $Patient = $this->getDoctrine()
            ->getRepository('AppBundle:Patient')
            ->find($id);
        return $this->render(':cabinet/Patient:detail.html.twig', array(
            'patient' => $Patient

        ));
    }

    /**
     *
     * @Route("/delete/{id}", name="patient_delete")
     *
     */
    public function deleteAction($id ){
        $em= $this->getDoctrine()->getManager();
        $patient =$em->getRepository('AppBundle:Patient')->find($id);
        $em->remove($patient);
        $em->flush();
        $this->addFlash( 'notice', 'Patient Deleted');

        return $this->redirectToRoute('Patient_list');
    }
    /**
     * @Route("/edit/{id}", name="EditPatient")
     */
    public function EditeAction($id,Request $request)
    {
        $Patient = $this->getDoctrine()
            ->getRepository('AppBundle:Patient')
            ->find($id);
        return $this->render('cabinet/Patient/edit.html.twig', array(
            'patient' => $Patient

        ));
    }

    /**
     * Displays a form to edit an existing constante entity.
     *
     * @Route("/edit/Patient/{id}", name="Patient_edit")
     *
     */
    public function editAction($id, Request $request)
    {
        $Patient = $this->getDoctrine()
            ->getRepository('AppBundle:Patient')
            ->find($id);

        $name = $request->get('name');
        $lastName = $request->get('lastName');
        $birthdate = $request->get('birthdate');
        $sexe = $request->get('sexe');
        $matricule = $request->get('matricule');
        $assurance = $request->get('assurance');
        $addressMail = $request->get('addressMail');
        $etatCiv = $request->get('etatCiv');
        $fonction = $request->get('fonction');
        $telPortable = $request->get('telPortable');
        $telFix = $request->get('telFix');
        $adresse = $request->get('adresse');
        $remarques = $request->get('remarques');




        $Patient->setName($name);
        $Patient->setLastName($lastName);
        $Patient->setBirthdate(\DateTime::createFromFormat('Y-m-d',$birthdate));
        $Patient->setSexe($sexe);
        $Patient->setMatricule($matricule);
        $Patient->setAssurance($assurance);
        $Patient->setAddressMail($addressMail);
        $Patient->setEtatCiv($etatCiv);
        $Patient->setFonction($fonction);
        $Patient->setTelPortable($telPortable);
        $Patient->setTelFix($telFix);
        $Patient->setAdresse($adresse);
        $Patient->setRemarques($remarques);

        $em= $this->getDoctrine()->getManager();
        $em->persist($Patient);
        $em->flush();
        $this->addFlash( 'notice', 'Patient Edited');


        return $this->redirectToRoute('Patient_list');
    }

}
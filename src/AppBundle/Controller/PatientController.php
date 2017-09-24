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

class PatientController extends Controller
{
    /**
     * @Route("/Patient", name="Patient_list")
     */
    public function listAction(Request $request){

        $Patients = $this->getDoctrine()
            ->getRepository('AppBundle:Patient')
            ->findBy(array ('cabinet' => 2),array('id' => 'ASC'));

        $Cabinets = $this->getDoctrine()
            ->getRepository('AppBundle:Cabinet')
            ->find(2);
        return $this->render(':cabinet/Patient:index.html.twig', array(
            'Patients' => $Patients,'Cabinets' => $Cabinets

        ));
    }


    /**
     * @Route("/patient/create", name="addPatient")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render(':cabinet/Patient:create.html.twig');
    }


    /**
     * @Route("/patient/subPatient", name="subPatient")
     *
     */
    public function addAction(Request $request)
    {
        $Cabinets = $this->getDoctrine()
            ->getRepository('AppBundle:Cabinet')
            ->find(2);
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
        $Patient->setCabinet($Cabinets);

        $em= $this->getDoctrine()->getManager();
        $em->persist($Patient);
        $em->flush();
        $this->addFlash( 'notice', 'Patient Added');


        return $this->redirectToRoute('Patient_list');
    }



}
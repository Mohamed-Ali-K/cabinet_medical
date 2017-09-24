<?php
/**
 * Created by PhpStorm.
 * User: Broton PC
 * Date: 20/09/2017
 * Time: 18:03
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Cabinet;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class CabinetController extends Controller
{

    /**
     * @Route("/cabinet/create", name="addcabinet")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('cabinet/create.html.twig');
    }


    /**
     * @Route("/cabinet/subcabinet", name="subcabinet")
     *
     */
    public function addAction(Request $request)
    {
        $cabinet = new Cabinet;

        $nomDocteur = $request->get('nomDocteur');
        $specialite = $request->get('specialite');
        $debutExercice = $request->get('debutExercice');
        $debutPeriode = $request->get('debutPeriode');
        $registreDeCommerce = $request->get('registreDeCommerce');
        $codeCnam = $request->get('codeCnam');
        $finExercice = $request->get('finExercice');
        $finPeriode = $request->get('finPeriode');
        $codeTVA = $request->get('codeTVA');
        $devise = $request->get('devise');
        $unite = $request->get('unite');
        $nmbDecimal = $request->get('nmbDecimal');
        $nmbJourAvnEchChequeEntrant = $request->get('nmbJourAvnEchChequeEntrant');
        $nmbJourAvnEchChequeSortnat = $request->get('nmbJourAvnEchChequeSortnat');
        $adresse = $request->get('adresse');
        $pays = $request->get('country');
        $fax = $request->get('fax');
        $tel = $request->get('tel');
        $email = $request->get('email');
        $web = $request->get('web');
        $indTel = $request->get('indTel');
        $banque = $request->get('banque');
        $rIP = $request->get('rIP');
        $nomDePortaire = $request->get('nomDePortaire');

        $cabinet->setNomDocteur($nomDocteur);
        $cabinet->setSpecialite($specialite);
        $cabinet->setDebutExercice(\DateTime::createFromFormat('Y-m-d',$debutExercice));
        $cabinet->setFinExercice(\DateTime::createFromFormat('Y-m-d',$finExercice));
        $cabinet->setDebutPeriode(\DateTime::createFromFormat('Y-m-d',$debutPeriode));
        $cabinet->setFinPeriode(\DateTime::createFromFormat('Y-m-d',$finPeriode));
        $cabinet->setCodeTVA($codeTVA);
        $cabinet->setDevise($devise);
        $cabinet->setUnite($unite);
        $cabinet->setNmbDecimal($nmbDecimal);
        $cabinet->setNmbJourAvnEchChequeEntrant($nmbJourAvnEchChequeEntrant);
        $cabinet->setNmbJourAvnEchChequeSortnat($nmbJourAvnEchChequeSortnat);
        $cabinet->setAdresse($adresse);
        $cabinet->setPays($pays);
        $cabinet->setFax($fax);
        $cabinet->setTel($tel);
        $cabinet->setEmail($email);
        $cabinet->setWeb($web);
        $cabinet->setIndTel($indTel);
        $cabinet->setBanque($banque);
        $cabinet->setRIP($rIP);
        $cabinet->setNomDePortaire($nomDePortaire);
        $cabinet->setRegistreDeCommerce($registreDeCommerce);
        $cabinet->setCodeCnam($codeCnam);

        $em= $this->getDoctrine()->getManager();
        $em->persist($cabinet);
        $em->flush();
        $this->addFlash( 'notice', 'Cabinet Added');


        return $this->render('cabinet/create.html.twig');
    }


}
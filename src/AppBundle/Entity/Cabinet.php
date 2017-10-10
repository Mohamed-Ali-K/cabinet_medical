<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cabinet
 *
 * @ORM\Table(name="cabinet")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CabinetRepository")
 */
class Cabinet
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user_id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_docteur", type="string", length=255)
     */
    private $nomDocteur;

    /**
     * @var string
     *
     * @ORM\Column(name="specialite", type="string", length=255)
     */
    private $specialite;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="debut_exercice", type="date")
     */
    private $debutExercice;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="debut_periode", type="date")
     */
    private $debutPeriode;

    /**
     * @var int
     *
     * @ORM\Column(name="registre_de_commerce", type="integer")
     */
    private $registreDeCommerce;

    /**
     * @var int
     *
     * @ORM\Column(name="code_cnam", type="integer")
     */
    private $codeCnam;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fin_exercice", type="date")
     */
    private $finExercice;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fin_periode", type="date")
     */
    private $finPeriode;

    /**
     * @var string
     *
     * @ORM\Column(name="code_TVA", type="string", length=255)
     */
    private $codeTVA;

    /**
     * @var string
     *
     * @ORM\Column(name="devise", type="string", length=255)
     */
    private $devise;

    /**
     * @var string
     *
     * @ORM\Column(name="unite", type="string", length=255)
     */
    private $unite;

    /**
     * @var int
     *
     * @ORM\Column(name="nmb_decimal", type="integer")
     */
    private $nmbDecimal;

    /**
     * @var int
     *
     * @ORM\Column(name="nmb_jour_avn_ech_cheque_entrant", type="integer")
     */
    private $nmbJourAvnEchChequeEntrant;

    /**
     * @var int
     *
     * @ORM\Column(name="nmb_jour_avn_ech_cheque_sortnat", type="integer")
     */
    private $nmbJourAvnEchChequeSortnat;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=255)
     */
    private $pays;

    /**
     * @var int
     *
     * @ORM\Column(name="fax", type="integer")
     */
    private $fax;

    /**
     * @var int
     *
     * @ORM\Column(name="tel", type="integer")
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="web", type="string", length=255)
     */
    private $web;

    /**
     * @var string
     *
     * @ORM\Column(name="ind_tel", type="string", length=255)
     */
    private $indTel;

    /**
     * @var string
     *
     * @ORM\Column(name="banque", type="string", length=255)
     */
    private $banque;

    /**
     * @var int
     *
     * @ORM\Column(name="RIP", type="integer")
     */
    private $rIP;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_de_portaire", type="string", length=255)
     */
    private $nomDePortaire;

    public function __construct()
    {
        $this->debutExercice = new \DateTime();
        $this->finExercice = new \DateTime();
        $this->debutPeriode = new \DateTime();
        $this->finPeriode = new \DateTime();
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomDocteur
     *
     * @param string $nomDocteur
     *
     * @return Cabinet
     */
    public function setNomDocteur($nomDocteur)
    {
        $this->nomDocteur = $nomDocteur;

        return $this;
    }

    /**
     * Get nomDocteur
     *
     * @return string
     */
    public function getNomDocteur()
    {
        return $this->nomDocteur;
    }

    /**
     * Set specialite
     *
     * @param string $specialite
     *
     * @return Cabinet
     */
    public function setSpecialite($specialite)
    {
        $this->specialite = $specialite;

        return $this;
    }

    /**
     * Get specialite
     *
     * @return string
     */
    public function getSpecialite()
    {
        return $this->specialite;
    }

    /**
     * Set debutExercice
     *
     * @param \DateTime $debutExercice
     *
     * @return Cabinet
     */
    public function setDebutExercice($debutExercice)
    {
        $this->debutExercice = $debutExercice;

        return $this;
    }

    /**
     * Get debutExercice
     *
     * @return \DateTime
     */
    public function getDebutExercice()
    {
        return $this->debutExercice;
    }

    /**
     * Set debutPeriode
     *
     * @param \DateTime $debutPeriode
     *
     * @return Cabinet
     */
    public function setDebutPeriode($debutPeriode)
    {
        $this->debutPeriode = $debutPeriode;

        return $this;
    }

    /**
     * Get debutPeriode
     *
     * @return \DateTime
     */
    public function getDebutPeriode()
    {
        return $this->debutPeriode;
    }

    /**
     * Set registreDeCommerce
     *
     * @param integer $registreDeCommerce
     *
     * @return Cabinet
     */
    public function setRegistreDeCommerce($registreDeCommerce)
    {
        $this->registreDeCommerce = $registreDeCommerce;

        return $this;
    }

    /**
     * Get registreDeCommerce
     *
     * @return int
     */
    public function getRegistreDeCommerce()
    {
        return $this->registreDeCommerce;
    }

    /**
     * Set codeCnam
     *
     * @param integer $codeCnam
     *
     * @return Cabinet
     */
    public function setCodeCnam($codeCnam)
    {
        $this->codeCnam = $codeCnam;

        return $this;
    }

    /**
     * Get codeCnam
     *
     * @return int
     */
    public function getCodeCnam()
    {
        return $this->codeCnam;
    }

    /**
     * Set finExercice
     *
     * @param \DateTime $finExercice
     *
     * @return Cabinet
     */
    public function setFinExercice($finExercice)
    {
        $this->finExercice = $finExercice;

        return $this;
    }

    /**
     * Get finExercice
     *
     * @return \DateTime
     */
    public function getFinExercice()
    {
        return $this->finExercice;
    }

    /**
     * Set finPeriode
     *
     * @param \DateTime $finPeriode
     *
     * @return Cabinet
     */
    public function setFinPeriode($finPeriode)
    {
        $this->finPeriode = $finPeriode;

        return $this;
    }

    /**
     * Get finPeriode
     *
     * @return \DateTime
     */
    public function getFinPeriode()
    {
        return $this->finPeriode;
    }

    /**
     * Set codeTVA
     *
     * @param string $codeTVA
     *
     * @return Cabinet
     */
    public function setCodeTVA($codeTVA)
    {
        $this->codeTVA = $codeTVA;

        return $this;
    }

    /**
     * Get codeTVA
     *
     * @return string
     */
    public function getCodeTVA()
    {
        return $this->codeTVA;
    }

    /**
     * Set devise
     *
     * @param string $devise
     *
     * @return Cabinet
     */
    public function setDevise($devise)
    {
        $this->devise = $devise;

        return $this;
    }

    /**
     * Get devise
     *
     * @return string
     */
    public function getDevise()
    {
        return $this->devise;
    }

    /**
     * Set unite
     *
     * @param string $unite
     *
     * @return Cabinet
     */
    public function setUnite($unite)
    {
        $this->unite = $unite;

        return $this;
    }

    /**
     * Get unite
     *
     * @return string
     */
    public function getUnite()
    {
        return $this->unite;
    }

    /**
     * Set nmbDecimal
     *
     * @param integer $nmbDecimal
     *
     * @return Cabinet
     */
    public function setNmbDecimal($nmbDecimal)
    {
        $this->nmbDecimal = $nmbDecimal;

        return $this;
    }

    /**
     * Get nmbDecimal
     *
     * @return int
     */
    public function getNmbDecimal()
    {
        return $this->nmbDecimal;
    }

    /**
     * Set nmbJourAvnEchChequeEntrant
     *
     * @param integer $nmbJourAvnEchChequeEntrant
     *
     * @return Cabinet
     */
    public function setNmbJourAvnEchChequeEntrant($nmbJourAvnEchChequeEntrant)
    {
        $this->nmbJourAvnEchChequeEntrant = $nmbJourAvnEchChequeEntrant;

        return $this;
    }

    /**
     * Get nmbJourAvnEchChequeEntrant
     *
     * @return int
     */
    public function getNmbJourAvnEchChequeEntrant()
    {
        return $this->nmbJourAvnEchChequeEntrant;
    }

    /**
     * Set nmbJourAvnEchChequeSortnat
     *
     * @param integer $nmbJourAvnEchChequeSortnat
     *
     * @return Cabinet
     */
    public function setNmbJourAvnEchChequeSortnat($nmbJourAvnEchChequeSortnat)
    {
        $this->nmbJourAvnEchChequeSortnat = $nmbJourAvnEchChequeSortnat;

        return $this;
    }

    /**
     * Get nmbJourAvnEchChequeSortnat
     *
     * @return int
     */
    public function getNmbJourAvnEchChequeSortnat()
    {
        return $this->nmbJourAvnEchChequeSortnat;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Cabinet
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set pays
     *
     * @param string $pays
     *
     * @return Cabinet
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set fax
     *
     * @param integer $fax
     *
     * @return Cabinet
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return int
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set tel
     *
     * @param integer $tel
     *
     * @return Cabinet
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return int
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Cabinet
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set web
     *
     * @param string $web
     *
     * @return Cabinet
     */
    public function setWeb($web)
    {
        $this->web = $web;

        return $this;
    }

    /**
     * Get web
     *
     * @return string
     */
    public function getWeb()
    {
        return $this->web;
    }

    /**
     * Set indTel
     *
     * @param string $indTel
     *
     * @return Cabinet
     */
    public function setIndTel($indTel)
    {
        $this->indTel = $indTel;

        return $this;
    }

    /**
     * Get indTel
     *
     * @return string
     */
    public function getIndTel()
    {
        return $this->indTel;
    }

    /**
     * Set banque
     *
     * @param string $banque
     *
     * @return Cabinet
     */
    public function setBanque($banque)
    {
        $this->banque = $banque;

        return $this;
    }

    /**
     * Get banque
     *
     * @return string
     */
    public function getBanque()
    {
        return $this->banque;
    }

    /**
     * Set rIP
     *
     * @param integer $rIP
     *
     * @return Cabinet
     */
    public function setRIP($rIP)
    {
        $this->rIP = $rIP;

        return $this;
    }

    /**
     * Get rIP
     *
     * @return int
     */
    public function getRIP()
    {
        return $this->rIP;
    }

    /**
     * Set nomDePortaire
     *
     * @param string $nomDePortaire
     *
     * @return Cabinet
     */
    public function setNomDePortaire($nomDePortaire)
    {
        $this->nomDePortaire = $nomDePortaire;

        return $this;
    }

    /**
     * Get nomDePortaire
     *
     * @return string
     */
    public function getNomDePortaire()
    {
        return $this->nomDePortaire;
    }

    /**
     * Set userId
     *
     * @param \AppBundle\Entity\User $userId
     *
     * @return Cabinet
     */
    public function setUserId(\AppBundle\Entity\User $userId = null)
    {
        $this->user_id = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return \AppBundle\Entity\User
     */
    public function getUserId()
    {
        return $this->user_id;
    }
}

<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PEC
 *
 * @ORM\Table(name="p_e_c")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PECRepository")
 */
class PEC
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
     * @ORM\ManyToOne(targetEntity="Cabinet")
     * @ORM\JoinColumn(name="cabinet_id", referencedColumnName="id")
     */
    private $cabinet;

    /**
     * @var int
     *
     * @ORM\Column(name="code_PEC", type="integer")
     */
    private $codePEC;

    /**
     * @var int
     *
     * @ORM\Column(name="code_bureau", type="integer")
     */
    private $codeBureau;

    /**
     * @var int
     *
     * @ORM\Column(name="code_prestation", type="integer")
     */
    private $codePrestation;

    /**
     * @var int
     *
     * @ORM\Column(name="annee_PEC", type="integer")
     */
    private $anneePEC;

    /**
     * @var int
     *
     * @ORM\Column(name="num_ordre", type="integer")
     */
    private $numOrdre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut_PEC", type="date")
     */
    private $dateDebutPEC;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_facture", type="date")
     */
    private $dateFacture;

    /**
     * @var int
     *
     * @ORM\Column(name="num_assure", type="integer")
     */
    private $numAssure;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_seances", type="integer")
     */
    private $nbSeances;

    /**
     * @var string
     *
     * @ORM\Column(name="qualite", type="string", length=255)
     */
    private $qualite;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * @ORM\ManyToOne(targetEntity="Patient")
     * @ORM\JoinColumn(name="patient_id", referencedColumnName="id")
     */
    private $patient;
    /**
     * @ORM\ManyToOne(targetEntity="Bordereau")
     * @ORM\JoinColumn(name="Bordereau_id", referencedColumnName="id")
     */
    private $bordereau;

    /**
     * @var bool
     *
     * @ORM\Column(name="add_to_bordureau", type="boolean")
     */
    private $add_to_bordureau;


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
     * Set codePEC
     *
     * @param integer $codePEC
     *
     * @return PEC
     */
    public function setCodePEC($codePEC)
    {
        $this->codePEC = $codePEC;

        return $this;
    }

    /**
     * Get codePEC
     *
     * @return int
     */
    public function getCodePEC()
    {
        return $this->codePEC;
    }

    /**
     * Set codeBureau
     *
     * @param integer $codeBureau
     *
     * @return PEC
     */
    public function setCodeBureau($codeBureau)
    {
        $this->codeBureau = $codeBureau;

        return $this;
    }

    /**
     * Get codeBureau
     *
     * @return int
     */
    public function getCodeBureau()
    {
        return $this->codeBureau;
    }

    /**
     * Set codePrestation
     *
     * @param integer $codePrestation
     *
     * @return PEC
     */
    public function setCodePrestation($codePrestation)
    {
        $this->codePrestation = $codePrestation;

        return $this;
    }

    /**
     * Get codePrestation
     *
     * @return int
     */
    public function getCodePrestation()
    {
        return $this->codePrestation;
    }

    /**
     * Set anneePEC
     *
     * @param integer $anneePEC
     *
     * @return PEC
     */
    public function setAnneePEC($anneePEC)
    {
        $this->anneePEC = $anneePEC;

        return $this;
    }

    /**
     * Get anneePEC
     *
     * @return int
     */
    public function getAnneePEC()
    {
        return $this->anneePEC;
    }

    /**
     * Set numOrdre
     *
     * @param integer $numOrdre
     *
     * @return PEC
     */
    public function setNumOrdre($numOrdre)
    {
        $this->numOrdre = $numOrdre;

        return $this;
    }

    /**
     * Get numOrdre
     *
     * @return int
     */
    public function getNumOrdre()
    {
        return $this->numOrdre;
    }

    /**
     * Set dateDebutPEC
     *
     * @param \DateTime $dateDebutPEC
     *
     * @return PEC
     */
    public function setDateDebutPEC($dateDebutPEC)
    {
        $this->dateDebutPEC = $dateDebutPEC;

        return $this;
    }

    /**
     * Get dateDebutPEC
     *
     * @return \DateTime
     */
    public function getDateDebutPEC()
    {
        return $this->dateDebutPEC;
    }

    /**
     * Set dateFacture
     *
     * @param \DateTime $dateFacture
     *
     * @return PEC
     */
    public function setDateFacture($dateFacture)
    {
        $this->dateFacture = $dateFacture;

        return $this;
    }

    /**
     * Get dateFacture
     *
     * @return \DateTime
     */
    public function getDateFacture()
    {
        return $this->dateFacture;
    }

    /**
     * Set numAssure
     *
     * @param integer $numAssure
     *
     * @return PEC
     */
    public function setNumAssure($numAssure)
    {
        $this->numAssure = $numAssure;

        return $this;
    }

    /**
     * Get numAssure
     *
     * @return int
     */
    public function getNumAssure()
    {
        return $this->numAssure;
    }

    /**
     * Set qualite
     *
     * @param string $qualite
     *
     * @return PEC
     */
    public function setQualite($qualite)
    {
        $this->qualite = $qualite;

        return $this;
    }

    /**
     * Get qualite
     *
     * @return string
     */
    public function getQualite()
    {
        return $this->qualite;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return PEC
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set patient
     *
     * @param \AppBundle\Entity\Patient $patient
     *
     * @return PEC
     */
    public function setPatient(\AppBundle\Entity\Patient $patient = null)
    {
        $this->patient = $patient;

        return $this;
    }

    /**
     * Get patient
     *
     * @return \AppBundle\Entity\Patient
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * Set nbSeances
     *
     * @param integer $nbSeances
     *
     * @return PEC
     */
    public function setNbSeances($nbSeances)
    {
        $this->nbSeances = $nbSeances;

        return $this;
    }

    /**
     * Get nbSeances
     *
     * @return integer
     */
    public function getNbSeances()
    {
        return $this->nbSeances;
    }

    /**
     * Set addToBordureau
     *
     * @param boolean $addToBordureau
     *
     * @return PEC
     */
    public function setAddToBordureau($addToBordureau)
    {
        $this->add_to_bordureau = $addToBordureau;

        return $this;
    }

    /**
     * Get addToBordureau
     *
     * @return boolean
     */
    public function getAddToBordureau()
    {
        return $this->add_to_bordureau;
    }

    /**
     * Set bordereau
     *
     * @param \AppBundle\Entity\Bordereau $bordereau
     *
     * @return PEC
     */
    public function setBordereau(\AppBundle\Entity\Bordereau $bordereau = null)
    {
        $this->bordereau = $bordereau;

        return $this;
    }

    /**
     * Get bordereau
     *
     * @return \AppBundle\Entity\Bordereau
     */
    public function getBordereau()
    {
        return $this->bordereau;
    }

    /**
     * Set cabinet
     *
     * @param \AppBundle\Entity\Cabinet $cabinet
     *
     * @return PEC
     */
    public function setCabinet(\AppBundle\Entity\Cabinet $cabinet = null)
    {
        $this->cabinet = $cabinet;

        return $this;
    }

    /**
     * Get cabinet
     *
     * @return \AppBundle\Entity\Cabinet
     */
    public function getCabinet()
    {
        return $this->cabinet;
    }
}

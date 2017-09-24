<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cas_a_traite
 *
 * @ORM\Table(name="cas_a_traite")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Cas_a_traiteRepository")
 */
class Cas_a_traite
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_de_maladi", type="date")
     */
    private $dateDeMaladi;

    /**
     * @var string
     *
     * @ORM\Column(name="histoire_maladie", type="text")
     */
    private $histoireMaladie;

    /**
     * @var string
     *
     * @ORM\Column(name="remarques", type="text")
     */
    private $remarques;

    /**
     * @var string
     *
     * @ORM\Column(name="etat_actuel", type="string", length=255)
     */
    private $etatActuel;

    /**
     * @ORM\ManyToOne(targetEntity="Catalogue")
     * @ORM\JoinColumn(name="Catalogue_id", referencedColumnName="id")
     */
    private $modeFacturation;

    /**
     * @ORM\ManyToOne(targetEntity="Patient")
     * @ORM\JoinColumn(name="patient_id", referencedColumnName="id")
     */
    private $patient;

    /**
     * @ORM\ManyToOne(targetEntity="Cas")
     * @ORM\JoinColumn(name="cas_id", referencedColumnName="id")
     */
    private $cas;
    /**
     * @ORM\ManyToOne(targetEntity="Cabinet")
     * @ORM\JoinColumn(name="cabinet_id", referencedColumnName="id")
     */
    private $cabinet;

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
     * Set dateDeMaladi
     *
     * @param \DateTime $dateDeMaladi
     *
     * @return Cas_a_traite
     */
    public function setDateDeMaladi($dateDeMaladi)
    {
        $this->dateDeMaladi = $dateDeMaladi;

        return $this;
    }

    /**
     * Get dateDeMaladi
     *
     * @return \DateTime
     */
    public function getDateDeMaladi()
    {
        return $this->dateDeMaladi;
    }

    /**
     * Set histoireMaladie
     *
     * @param string $histoireMaladie
     *
     * @return Cas_a_traite
     */
    public function setHistoireMaladie($histoireMaladie)
    {
        $this->histoireMaladie = $histoireMaladie;

        return $this;
    }

    /**
     * Get histoireMaladie
     *
     * @return string
     */
    public function getHistoireMaladie()
    {
        return $this->histoireMaladie;
    }

    /**
     * Set remarques
     *
     * @param string $remarques
     *
     * @return Cas_a_traite
     */
    public function setRemarques($remarques)
    {
        $this->remarques = $remarques;

        return $this;
    }

    /**
     * Get remarques
     *
     * @return string
     */
    public function getRemarques()
    {
        return $this->remarques;
    }

    /**
     * Set etatActuel
     *
     * @param string $etatActuel
     *
     * @return Cas_a_traite
     */
    public function setEtatActuel($etatActuel)
    {
        $this->etatActuel = $etatActuel;

        return $this;
    }

    /**
     * Get etatActuel
     *
     * @return string
     */
    public function getEtatActuel()
    {
        return $this->etatActuel;
    }


    /**
     * Set patient
     *
     * @param \AppBundle\Entity\Patient $patient
     *
     * @return Cas_a_traite
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
     * Set cas
     *
     * @param \AppBundle\Entity\Cas $cas
     *
     * @return Cas_a_traite
     */
    public function setCas(\AppBundle\Entity\Cas $cas = null)
    {
        $this->cas = $cas;

        return $this;
    }

    /**
     * Get cas
     *
     * @return \AppBundle\Entity\Cas
     */
    public function getCas()
    {
        return $this->cas;
    }

    /**
     * Set modeFacturation
     *
     * @param \AppBundle\Entity\Catalogue $modeFacturation
     *
     * @return Cas_a_traite
     */
    public function setModeFacturation(\AppBundle\Entity\Catalogue $modeFacturation = null)
    {
        $this->modeFacturation = $modeFacturation;

        return $this;
    }

    /**
     * Get modeFacturation
     *
     * @return \AppBundle\Entity\Catalogue
     */
    public function getModeFacturation()
    {
        return $this->modeFacturation;
    }

    /**
     * Set cabinet
     *
     * @param \AppBundle\Entity\Cabinet $cabinet
     *
     * @return Cas_a_traite
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

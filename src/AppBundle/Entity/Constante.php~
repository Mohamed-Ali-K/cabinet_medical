<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Constante
 *
 * @ORM\Table(name="constante")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ConstanteRepository")
 */
class Constante
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
     * @ORM\Column(name="taken_date", type="datetime")
     */
    private $takenDate;

    /**
     * @var float
     *
     * @ORM\Column(name="poid", type="float")
     */
    private $poid;

    /**
     * @var float
     *
     * @ORM\Column(name="taille", type="float")
     */
    private $taille;

    /**
     * @var float
     *
     * @ORM\Column(name="pas", type="float")
     */
    private $pas;

    /**
     * @var float
     *
     * @ORM\Column(name="pad", type="float")
     */
    private $pad;

    /**
     * @var int
     *
     * @ORM\Column(name="pouls", type="integer")
     */
    private $pouls;

    /**
     * @var float
     *
     * @ORM\Column(name="temp", type="float")
     */
    private $temp;

    /**
     * @var float
     *
     * @ORM\Column(name="glycemie", type="float")
     */
    private $glycemie;

    /**
     * @var float
     *
     * @ORM\Column(name="cholest", type="float")
     */
    private $cholest;


    /**
     * @ORM\ManyToOne(targetEntity="Patient")
     * @ORM\JoinColumn(name="patient_id", referencedColumnName="id")
     */
    private $patient;

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
     * Set takenDate
     *
     * @param \DateTime $takenDate
     *
     * @return Constante
     */
    public function setTakenDate($takenDate)
    {
        $this->takenDate = $takenDate;

        return $this;
    }

    /**
     * Get takenDate
     *
     * @return \DateTime
     */
    public function getTakenDate()
    {
        return $this->takenDate;
    }

    /**
     * Set poid
     *
     * @param float $poid
     *
     * @return Constante
     */
    public function setPoid($poid)
    {
        $this->poid = $poid;

        return $this;
    }

    /**
     * Get poid
     *
     * @return float
     */
    public function getPoid()
    {
        return $this->poid;
    }

    /**
     * Set taille
     *
     * @param float $taille
     *
     * @return Constante
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;

        return $this;
    }

    /**
     * Get taille
     *
     * @return float
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * Set pas
     *
     * @param float $pas
     *
     * @return Constante
     */
    public function setPas($pas)
    {
        $this->pas = $pas;

        return $this;
    }

    /**
     * Get pas
     *
     * @return float
     */
    public function getPas()
    {
        return $this->pas;
    }

    /**
     * Set pad
     *
     * @param float $pad
     *
     * @return Constante
     */
    public function setPad($pad)
    {
        $this->pad = $pad;

        return $this;
    }

    /**
     * Get pad
     *
     * @return float
     */
    public function getPad()
    {
        return $this->pad;
    }

    /**
     * Set pouls
     *
     * @param integer $pouls
     *
     * @return Constante
     */
    public function setPouls($pouls)
    {
        $this->pouls = $pouls;

        return $this;
    }

    /**
     * Get pouls
     *
     * @return int
     */
    public function getPouls()
    {
        return $this->pouls;
    }

    /**
     * Set temp
     *
     * @param float $temp
     *
     * @return Constante
     */
    public function setTemp($temp)
    {
        $this->temp = $temp;

        return $this;
    }

    /**
     * Get temp
     *
     * @return float
     */
    public function getTemp()
    {
        return $this->temp;
    }

    /**
     * Set glycemie
     *
     * @param float $glycemie
     *
     * @return Constante
     */
    public function setGlycemie($glycemie)
    {
        $this->glycemie = $glycemie;

        return $this;
    }

    /**
     * Get glycemie
     *
     * @return float
     */
    public function getGlycemie()
    {
        return $this->glycemie;
    }

    /**
     * Set cholest
     *
     * @param float $cholest
     *
     * @return Constante
     */
    public function setCholest($cholest)
    {
        $this->cholest = $cholest;

        return $this;
    }

    /**
     * Get cholest
     *
     * @return float
     */
    public function getCholest()
    {
        return $this->cholest;
    }

    /**
     * Set patient
     *
     * @param \AppBundle\Entity\Patient $patient
     *
     * @return Constante
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
     * Set cabinet
     *
     * @param \AppBundle\Entity\Cabinet $cabinet
     *
     * @return Constante
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

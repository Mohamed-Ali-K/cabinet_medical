<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * rendez_vous
 *
 * @ORM\Table(name="rendez_vous")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\rendez_vousRepository")
 */
class rendez_vous
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure", type="time")
     */
    private $heure;

    /**
     * @var bool
     *
     * @ORM\Column(name="present", type="boolean")
     */
    private $present;

    /**
     * @ORM\ManyToOne(targetEntity="Patient")
     * @ORM\JoinColumn(name="patient_id", referencedColumnName="id")
     */
    private $patient;

    /**
     * @ORM\ManyToOne(targetEntity="Motif_consultation")
     * @ORM\JoinColumn(name="Motif_consultation_id", referencedColumnName="id")
     */
    private $motifConsultation;


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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return rendez_vous
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set heure
     *
     * @param \DateTime $heure
     *
     * @return rendez_vous
     */
    public function setHeure($heure)
    {
        $this->heure = $heure;

        return $this;
    }

    /**
     * Get heure
     *
     * @return \DateTime
     */
    public function getHeure()
    {
        return $this->heure;
    }

    /**
     * Set patient
     *
     * @param \AppBundle\Entity\Patient $patient
     *
     * @return rendez_vous
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
     * Set motifConsultation
     *
     * @param \AppBundle\Entity\Motif_consultation $motifConsultation
     *
     * @return rendez_vous
     */
    public function setMotifConsultation(\AppBundle\Entity\Motif_consultation $motifConsultation = null)
    {
        $this->motifConsultation = $motifConsultation;

        return $this;
    }

    /**
     * Get motifConsultation
     *
     * @return \AppBundle\Entity\Motif_consultation
     */
    public function getMotifConsultation()
    {
        return $this->motifConsultation;
    }

    /**
     * Set present
     *
     * @param boolean $present
     *
     * @return rendez_vous
     */
    public function setPresent($present)
    {
        $this->present = $present;

        return $this;
    }

    /**
     * Get present
     *
     * @return boolean
     */
    public function getPresent()
    {
        return $this->present;
    }

    /**
     * Set cabinet
     *
     * @param \AppBundle\Entity\Cabinet $cabinet
     *
     * @return rendez_vous
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

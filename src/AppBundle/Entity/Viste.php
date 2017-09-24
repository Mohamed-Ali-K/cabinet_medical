<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Viste
 *
 * @ORM\Table(name="viste")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VisteRepository")
 */
class Viste
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
     * @var string
     *
     * @ORM\Column(name="interogatoire", type="text")
     */
    private $interogatoire;

    /**
     * @var string
     *
     * @ORM\Column(name="examane", type="text")
     */
    private $examane;

    /**
     * @var string
     *
     * @ORM\Column(name="conclusions", type="text")
     */
    private $conclusions;

    /**
     * @var string
     *
     * @ORM\Column(name="honoraires", type="string", length=255)
     */
    private $honoraires;

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
     * @ORM\ManyToOne(targetEntity="Motif_consultation")
     * @ORM\JoinColumn(name="motif_consultation_id", referencedColumnName="id")
     */
    private $motif_consultation;


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
     * @return Viste
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
     * Set interogatoire
     *
     * @param string $interogatoire
     *
     * @return Viste
     */
    public function setInterogatoire($interogatoire)
    {
        $this->interogatoire = $interogatoire;

        return $this;
    }

    /**
     * Get interogatoire
     *
     * @return string
     */
    public function getInterogatoire()
    {
        return $this->interogatoire;
    }

    /**
     * Set examane
     *
     * @param string $examane
     *
     * @return Viste
     */
    public function setExamane($examane)
    {
        $this->examane = $examane;

        return $this;
    }

    /**
     * Get examane
     *
     * @return string
     */
    public function getExamane()
    {
        return $this->examane;
    }

    /**
     * Set conclusions
     *
     * @param string $conclusions
     *
     * @return Viste
     */
    public function setConclusions($conclusions)
    {
        $this->conclusions = $conclusions;

        return $this;
    }

    /**
     * Get conclusions
     *
     * @return string
     */
    public function getConclusions()
    {
        return $this->conclusions;
    }

    /**
     * Set honoraires
     *
     * @param string $honoraires
     *
     * @return Viste
     */
    public function setHonoraires($honoraires)
    {
        $this->honoraires = $honoraires;

        return $this;
    }

    /**
     * Get honoraires
     *
     * @return string
     */
    public function getHonoraires()
    {
        return $this->honoraires;
    }

    /**
     * Set patient
     *
     * @param \AppBundle\Entity\Patient $patient
     *
     * @return Viste
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
     * @return Viste
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
     * Set motifConsultation
     *
     * @param \AppBundle\Entity\Motif_consultation $motifConsultation
     *
     * @return Viste
     */
    public function setMotifConsultation(\AppBundle\Entity\Motif_consultation $motifConsultation = null)
    {
        $this->motif_consultation = $motifConsultation;

        return $this;
    }

    /**
     * Get motifConsultation
     *
     * @return \AppBundle\Entity\Motif_consultation
     */
    public function getMotifConsultation()
    {
        return $this->motif_consultation;
    }

    /**
     * Set cabinet
     *
     * @param \AppBundle\Entity\Cabinet $cabinet
     *
     * @return Viste
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

<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bordereau
 *
 * @ORM\Table(name="bordereau")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BordereauRepository")
 */
class Bordereau
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
     * @var int
     *
     * @ORM\Column(name="num_bordereau", type="integer")
     */
    private $numBordereau;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_bordereau", type="date")
     */
    private $dateBordereau;

    /**
     * @var int
     *
     * @ORM\Column(name="bureau_cnam", type="integer")
     */
    private $bureauCnam;

    /**
     * @var float
     *
     * @ORM\Column(name="total_prix", type="float")
     */
    private $totalPrix;

    /**
     * @var int
     *
     * @ORM\Column(name="total_facture", type="integer")
     */
    private $totalFacture;

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
     * Set numBordereau
     *
     * @param integer $numBordereau
     *
     * @return Bordereau
     */
    public function setNumBordereau($numBordereau)
    {
        $this->numBordereau = $numBordereau;

        return $this;
    }

    /**
     * Get numBordereau
     *
     * @return int
     */
    public function getNumBordereau()
    {
        return $this->numBordereau;
    }

    /**
     * Set dateBordereau
     *
     * @param \DateTime $dateBordereau
     *
     * @return Bordereau
     */
    public function setDateBordereau($dateBordereau)
    {
        $this->dateBordereau = $dateBordereau;

        return $this;
    }

    /**
     * Get dateBordereau
     *
     * @return \DateTime
     */
    public function getDateBordereau()
    {
        return $this->dateBordereau;
    }

    /**
     * Set bureauCnam
     *
     * @param integer $bureauCnam
     *
     * @return Bordereau
     */
    public function setBureauCnam($bureauCnam)
    {
        $this->bureauCnam = $bureauCnam;

        return $this;
    }

    /**
     * Get bureauCnam
     *
     * @return int
     */
    public function getBureauCnam()
    {
        return $this->bureauCnam;
    }

    /**
     * Set totalPrix
     *
     * @param float $totalPrix
     *
     * @return Bordereau
     */
    public function setTotalPrix($totalPrix)
    {
        $this->totalPrix = $totalPrix;

        return $this;
    }

    /**
     * Get totalPrix
     *
     * @return float
     */
    public function getTotalPrix()
    {
        return $this->totalPrix;
    }

    /**
     * Set totalFacture
     *
     * @param integer $totalFacture
     *
     * @return Bordereau
     */
    public function setTotalFacture($totalFacture)
    {
        $this->totalFacture = $totalFacture;

        return $this;
    }

    /**
     * Get totalFacture
     *
     * @return int
     */
    public function getTotalFacture()
    {
        return $this->totalFacture;
    }

    /**
     * Set cabinet
     *
     * @param \AppBundle\Entity\Cabinet $cabinet
     *
     * @return Bordereau
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

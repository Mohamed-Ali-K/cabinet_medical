<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Motif_consultation
 *
 * @ORM\Table(name="motif_consultation")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Motif_consultationRepository")
 */
class Motif_consultation
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
     * @var string
     *
     * @ORM\Column(name="nom_motif", type="string", length=255)
     */
    private $nomMotif;


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
     * Set nomMotif
     *
     * @param string $nomMotif
     *
     * @return Motif_consultation
     */
    public function setNomMotif($nomMotif)
    {
        $this->nomMotif = $nomMotif;

        return $this;
    }

    /**
     * Get nomMotif
     *
     * @return string
     */
    public function getNomMotif()
    {
        return $this->nomMotif;
    }

    /**
     * Set cabinet
     *
     * @param \AppBundle\Entity\Cabinet $cabinet
     *
     * @return Motif_consultation
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

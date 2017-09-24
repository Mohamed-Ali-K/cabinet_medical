<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cas
 *
 * @ORM\Table(name="cas")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CasRepository")
 */
class Cas
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
     * @var string
     *
     * @ORM\Column(name="nom_cas", type="string", length=255)
     */
    private $nomCas;

    /**
     * @var string
     *
     * @ORM\Column(name="examen_type", type="text")
     */
    private $examenType;
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
     * Set nomCas
     *
     * @param string $nomCas
     *
     * @return Cas
     */
    public function setNomCas($nomCas)
    {
        $this->nomCas = $nomCas;

        return $this;
    }

    /**
     * Get nomCas
     *
     * @return string
     */
    public function getNomCas()
    {
        return $this->nomCas;
    }

    /**
     * Set examenType
     *
     * @param string $examenType
     *
     * @return Cas
     */
    public function setExamenType($examenType)
    {
        $this->examenType = $examenType;

        return $this;
    }

    /**
     * Get examenType
     *
     * @return string
     */
    public function getExamenType()
    {
        return $this->examenType;
    }

    /**
     * Set cabinet
     *
     * @param \AppBundle\Entity\Cabinet $cabinet
     *
     * @return Cas
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

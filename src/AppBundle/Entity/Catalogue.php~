<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Catalogue
 *
 * @ORM\Table(name="catalogue")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CatalogueRepository")
 */
class Catalogue
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
     * @ORM\Column(name="nom_catalogue", type="string", length=255)
     */
    private $nomCatalogue;

    /**
     * @var string
     *
     * @ORM\Column(name="acte", type="string", length=255)
     */
    private $acte;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

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
     * Set nomCatalogue
     *
     * @param string $nomCatalogue
     *
     * @return Catalogue
     */
    public function setNomCatalogue($nomCatalogue)
    {
        $this->nomCatalogue = $nomCatalogue;

        return $this;
    }

    /**
     * Get nomCatalogue
     *
     * @return string
     */
    public function getNomCatalogue()
    {
        return $this->nomCatalogue;
    }

    /**
     * Set acte
     *
     * @param string $acte
     *
     * @return Catalogue
     */
    public function setActe($acte)
    {
        $this->acte = $acte;

        return $this;
    }

    /**
     * Get acte
     *
     * @return string
     */
    public function getActe()
    {
        return $this->acte;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return Catalogue
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
     * Set cabinet
     *
     * @param \AppBundle\Entity\Cabinet $cabinet
     *
     * @return Catalogue
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

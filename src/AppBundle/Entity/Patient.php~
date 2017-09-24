<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Patient
 *
 * @ORM\Table(name="patient")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PatientRepository")
 */
class Patient
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=255)
     */
    private $lastName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthdate", type="date")
     */
    private $birthdate;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=255)
     */
    private $sexe;

    /**
     * @var int
     *
     * @ORM\Column(name="matricule", type="integer")
     */
    private $matricule;

    /**
     * @var string
     *
     * @ORM\Column(name="assurance", type="string", length=255)
     */
    private $assurance;

    /**
     * @var string
     *
     * @ORM\Column(name="address_mail", type="string", length=255)
     */
    private $addressMail;

    /**
     * @var string
     *
     * @ORM\Column(name="etat_civ", type="string", length=255)
     */
    private $etatCiv;

    /**
     * @var string
     *
     * @ORM\Column(name="fonction", type="string", length=255)
     */
    private $fonction;

    /**
     * @var int
     *
     * @ORM\Column(name="tel_portable", type="integer")
     */
    private $telPortable;

    /**
     * @var string
     *
     * @ORM\Column(name="tel_fix", type="integer")
     */
    private $telFix;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="text")
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="remarques", type="text")
     */
    private $remarques;


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
     * Set name
     *
     * @param string $name
     *
     * @return Patient
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Patient
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set birthdate
     *
     * @param \DateTime $birthdate
     *
     * @return Patient
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get birthdate
     *
     * @return \DateTime
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     *
     * @return Patient
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set matricule
     *
     * @param integer $matricule
     *
     * @return Patient
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }

    /**
     * Get matricule
     *
     * @return int
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set assurance
     *
     * @param string $assurance
     *
     * @return Patient
     */
    public function setAssurance($assurance)
    {
        $this->assurance = $assurance;

        return $this;
    }

    /**
     * Get assurance
     *
     * @return string
     */
    public function getAssurance()
    {
        return $this->assurance;
    }

    /**
     * Set addressMail
     *
     * @param string $addressMail
     *
     * @return Patient
     */
    public function setAddressMail($addressMail)
    {
        $this->addressMail = $addressMail;

        return $this;
    }

    /**
     * Get addressMail
     *
     * @return string
     */
    public function getAddressMail()
    {
        return $this->addressMail;
    }

    /**
     * Set etatCiv
     *
     * @param string $etatCiv
     *
     * @return Patient
     */
    public function setEtatCiv($etatCiv)
    {
        $this->etatCiv = $etatCiv;

        return $this;
    }

    /**
     * Get etatCiv
     *
     * @return string
     */
    public function getEtatCiv()
    {
        return $this->etatCiv;
    }

    /**
     * Set fonction
     *
     * @param string $fonction
     *
     * @return Patient
     */
    public function setFonction($fonction)
    {
        $this->fonction = $fonction;

        return $this;
    }

    /**
     * Get fonction
     *
     * @return string
     */
    public function getFonction()
    {
        return $this->fonction;
    }

    /**
     * Set telPortable
     *
     * @param integer $telPortable
     *
     * @return Patient
     */
    public function setTelPortable($telPortable)
    {
        $this->telPortable = $telPortable;

        return $this;
    }

    /**
     * Get telPortable
     *
     * @return int
     */
    public function getTelPortable()
    {
        return $this->telPortable;
    }

    /**
     * Set telFix
     *
     * @param integer $telFix
     *
     * @return Patient
     */
    public function setTelFix($telFix)
    {
        $this->telFix = $telFix;

        return $this;
    }

    /**
     * Get telFix
     *
     * @return int
     */
    public function getTelFix()
    {
        return $this->telFix;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Patient
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
     * Set remarques
     *
     * @param string $remarques
     *
     * @return Patient
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
     * Set cabinet
     *
     * @param \AppBundle\Entity\Cabinet $cabinet
     *
     * @return Patient
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

<?php

namespace Nas\RequetesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Demande
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Nas\RequetesBundle\Entity\DemandeRepository")
 */
class Demande {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Nas\RequetesBundle\Entity\MediaType")
     * @ORM\JoinColumn(nullable=false)
     */
    private $mediaType;

    /**
     * @ORM\ManyToOne(targetEntity="Nas\RequetesBundle\Entity\Etat")
     * @ORM\JoinColumn(nullable=false)
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDemande", type="date")
     */
    private $dateDemande;

    function __construct() {
        $this->dateDemande = new \DateTime();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Demande
     */
    public function setTitre($titre) {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre() {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Demande
     */
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Set dateDemande
     *
     * @param \DateTime $dateDemande
     * @return Demande
     */
    public function setDateDemande($dateDemande) {
        $this->dateDemande = $dateDemande;

        return $this;
    }

    /**
     * Get dateDemande
     *
     * @return \DateTime 
     */
    public function getDateDemande() {
        return $this->dateDemande;
    }


    /**
     * Set mediaType
     *
     * @param \Nas\RequetesBundle\Entity\MediaType $mediaType
     * @return Demande
     */
    public function setMediaType(\Nas\RequetesBundle\Entity\MediaType $mediaType)
    {
        $this->mediaType = $mediaType;

        return $this;
    }

    /**
     * Get mediaType
     *
     * @return \Nas\RequetesBundle\Entity\MediaType 
     */
    public function getMediaType()
    {
        return $this->mediaType;
    }

    /**
     * Set etat
     *
     * @param \Nas\RequetesBundle\Entity\Etat $etat
     * @return Demande
     */
    public function setEtat(\Nas\RequetesBundle\Entity\Etat $etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return \Nas\RequetesBundle\Entity\Etat 
     */
    public function getEtat()
    {
        return $this->etat;
    }
}

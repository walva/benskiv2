<?php

namespace Benski\CatalogueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Benski\CatalogueBundle\Entity\Appartement;
use Benski\CatalogueBundle\Entity\SejourAppartement;

/**
 * Sejour
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Sejour {
   
   public function __toString() {
      return $this->getNom()." du ".$this->getDateDebut()->format('d/m/Y').
              " au ".$this->getDateFin()->format('d/m/Y');
   }

      function __construct() {
      $this->dateDebut = new \DateTime('NOW');
      $this->dateFin = new \DateTime('NOW');
   }

   /**
    * @var integer
    *
    * @ORM\Column(name="id", type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
   private $id;

   /**
    * @var string
    *
    * @ORM\Column(name="nom", type="string", length=255)
    */
   private $nom;

   /**
    * @var \stdClass
    *
    * @ORM\Column(name="dateDebut", type="datetime")
    */
   private $dateDebut;

   /**
    * @var \DateTime
    *
    * @ORM\Column(name="dateFin", type="datetime")
    */
   private $dateFin;

   /**
    * @ORM\OneToMany(targetEntity="Benski\CatalogueBundle\Entity\SejourAppartement", mappedBy="sejour")
    * 
    * @var type 
    */
   private $appartements;

   /**
    * Get id
    *
    * @return integer 
    */
   public function getId() {
      return $this->id;
   }

   /**
    * Set nom
    *
    * @param string $nom
    * @return Sejour
    */
   public function setNom($nom) {
      $this->nom = $nom;

      return $this;
   }

   /**
    * Get nom
    *
    * @return string 
    */
   public function getNom() {
      return $this->nom;
   }

   /**
    * Set dateDebut
    *
    * @param \DateTime $dateDebut
    * @return Sejour
    */
   public function setDateDebut($dateDebut) {
      $this->dateDebut = $dateDebut;

      return $this;
   }

   /**
    * Get dateDebut
    *
    * @return \DateTime 
    */
   public function getDateDebut() {
      return $this->dateDebut;
   }

   /**
    * Set dateFin
    *
    * @param \DateTime $dateFin
    * @return Sejour
    */
   public function setDateFin($dateFin) {
      $this->dateFin = $dateFin;

      return $this;
   }

   /**
    * Get dateFin
    *
    * @return \DateTime 
    */
   public function getDateFin() {
      return $this->dateFin;
   }


    /**
     * Add appartements
     *
     * @param \Benski\CatalogueBundle\Entity\SejourAppartement $appartements
     * @return Sejour
     */
    public function addAppartement(\Benski\CatalogueBundle\Entity\SejourAppartement $appartements)
    {
        $this->appartements[] = $appartements;
    
        return $this;
    }

    /**
     * Remove appartements
     *
     * @param \Benski\CatalogueBundle\Entity\SejourAppartement $appartements
     */
    public function removeAppartement(\Benski\CatalogueBundle\Entity\SejourAppartement $appartements)
    {
        $this->appartements->removeElement($appartements);
    }

    /**
     * Get appartements
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAppartements()
    {
        return $this->appartements;
    }
}
<?php

namespace Benski\CatalogueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OptionChoixMultiple
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Benski\CatalogueBundle\Entity\OptionChoixMultipleRepository")
 */
class OptionChoixMultiple
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="choixParDefaut", type="object")
     */
    private $choixParDefaut;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="choix", type="object")
     */
    private $choix;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set choixParDefaut
     *
     * @param \stdClass $choixParDefaut
     * @return OptionChoixMultiple
     */
    public function setChoixParDefaut($choixParDefaut)
    {
        $this->choixParDefaut = $choixParDefaut;
    
        return $this;
    }

    /**
     * Get choixParDefaut
     *
     * @return \stdClass 
     */
    public function getChoixParDefaut()
    {
        return $this->choixParDefaut;
    }

    /**
     * Set choix
     *
     * @param \stdClass $choix
     * @return OptionChoixMultiple
     */
    public function setChoix($choix)
    {
        $this->choix = $choix;
    
        return $this;
    }

    /**
     * Get choix
     *
     * @return \stdClass 
     */
    public function getChoix()
    {
        return $this->choix;
    }
}

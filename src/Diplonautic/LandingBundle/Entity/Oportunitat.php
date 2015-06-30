<?php
namespace Diplonautic\LandingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Diplonautic\LandingBundle\Util\Util;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Oportunitat
 *
 * @ORM\Table()
 * @ORM\Entity
 * @Gedmo\TranslationEntity(class="Diplonautic\LandingBundle\Entity\Translation\OportunitatTranslation")
 */
class Oportunitat
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
     * @var string
     *
     * @Gedmo\Translatable
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;
    
    /**
     * @var string
     *
     * @Gedmo\Translatable
     * @ORM\Column(name="description", type="text")
     */
    private $description;
    
    
    /**
     * @var string
     *
     * @Gedmo\Translatable
     * @ORM\Column(name="price", type="string", length=20)
     */
    private $price;
 
    
    /**
     * @ORM\OneToMany(
     *   targetEntity="Diplonautic\LandingBundle\Entity\Translation\OportunitatTranslation",
     *   mappedBy="object",
     *   cascade={"persist", "remove"}
     * )
     */
    protected $translations;
    

    /**
     * Required for Translatable behaviour
     * @Gedmo\Locale
     */
    protected $locale;


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
     * Set title
     *
     * @param string $title
     * @return Oportunitat
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
        
    }
    
     /**
     * Set description
     *
     * @param string $description
     * @return Oportunitat
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * Set price
     *
     * @param string price
     * @return Oportunitat
     */
    function setPrice($price) {
        $this->price = $price;
    }
    
    /**
     * Get price
     *
     * @return string 
     */
    function getPrice() {
        return $this->price;
    }

    public function getTranslations() {
        return $this->translations;
    }

    public function addTranslation(Translation\OportunitatTranslation $t) {
        $this->translations->add($t);
        $t->setObject($this);
    }

    public function removeTranslation(Translation\OportunitatTranslation $t) {
        $this->translations->removeElement($t);
    }

    public function setTranslations($translations) {
        $this->translations = $translations;
    }
    
    public function getTranslatableLocale() {
        return $this->locale;
    }

    public function setTranslatableLocale($locale) {
        $this->locale = $locale;
    }
    
    public function __toString() {
        return $this->title;
    }
}

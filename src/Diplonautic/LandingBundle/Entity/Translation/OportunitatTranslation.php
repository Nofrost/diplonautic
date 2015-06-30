<?php

namespace Diplonautic\LandingBundle\Entity\Translation;

use Gedmo\Translatable\Entity\MappedSuperclass\AbstractPersonalTranslation;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="oportunitat_translations",
 *     uniqueConstraints={@ORM\UniqueConstraint(name="oportunitat_translations_keys", columns={
 *         "locale", "object_id", "field"
 *     })}
 * )
 */
class OportunitatTranslation extends AbstractPersonalTranslation {

    /**
     * @ORM\ManyToOne(targetEntity="Diplonautic\LandingBundle\Entity\Oportunitat", inversedBy="translations")
     * @ORM\JoinColumn(name="object_id", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $object;

    /**
     * Convenient constructor
     *
     * @param string $locale
     * @param string $field
     * @param string $value
     */
    public function __construct($locale = "ca", $field = "field", $value = "") {
        $this->setLocale($locale);
        $this->setField($field);
        $this->setContent($value);
    }

    public function getObject() {
        return $this->object;
    }

    public function setObject($object) {
        $this->object = $object;
    }

}

<?php

namespace Previewtechs\SchemaOrg\JsonLd\Schemas\HiringOrganization;

use Previewtechs\SchemaOrg\JsonLd\Schemas\SchemaInterface;

/**
 * Class HiringOrganization
 * @package Previewtechs\SchemaOrg\JsonLd\Schemas\HiringOrganization
 */
class HiringOrganization implements SchemaInterface
{
    /**
     * @var string
     */
    protected $type = "Organization";

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $sameAs;

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param null|string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return null|string
     */
    public function getSameAs()
    {
        return $this->sameAs;
    }

    /**
     * @param null|string $sameAs
     */
    public function setSameAs($sameAs)
    {
        $this->sameAs = $sameAs;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return get_object_vars($this);
    }
}
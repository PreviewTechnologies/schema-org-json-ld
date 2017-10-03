<?php
/**
 * Write something about the purpose of this file
 *
 * @author Shaharia Azam <shaharia@previewtechs.com>
 * @url https://www.previewtechs.com
 */

namespace Previewtechs\SchemaOrg\JsonLd\Schemas\Address;


use Previewtechs\SchemaOrg\JsonLd\Schemas\SchemaInterface;

class Address implements SchemaInterface
{
    /**
     * @var string
     */
    protected $type = "PostalAddress";

    /**
     * @var string|null
     */
    protected $addressLocality = null;

    /**
     * @var null|string
     */
    protected $addressRegion = null;

    /**
     * @var null|string
     */
    protected $postalCode = null;

    /**
     * @var null|string
     */
    protected $streetAddress = null;

    /**
     * @var null|string
     */
    protected $addressCountry = null;

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getAddressLocality()
    {
        return $this->addressLocality;
    }

    /**
     * @param null|string $addressLocality
     *
     * @return $this
     */
    public function setAddressLocality($addressLocality)
    {
        $this->addressLocality = $addressLocality;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getAddressRegion()
    {
        return $this->addressRegion;
    }

    /**
     * @param null|string $addressRegion
     *
     * @return $this
     */
    public function setAddressRegion($addressRegion)
    {
        $this->addressRegion = $addressRegion;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @param null|string $postalCode
     *
     * @return $this
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getStreetAddress()
    {
        return $this->streetAddress;
    }

    /**
     * @param null|string $streetAddress
     *
     * @return $this
     */
    public function setStreetAddress($streetAddress)
    {
        $this->streetAddress = $streetAddress;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getAddressCountry()
    {
        return $this->addressCountry;
    }

    /**
     * @param null|string $addressCountry
     *
     * @return $this
     */
    public function setAddressCountry($addressCountry)
    {
        $this->addressCountry = $addressCountry;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return get_object_vars($this);
    }
}
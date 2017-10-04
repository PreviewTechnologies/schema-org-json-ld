<?php
/**
 * Write something about the purpose of this file
 *
 * @author Shaharia Azam <shaharia@previewtechs.com>
 * @url https://www.previewtechs.com
 */

namespace Previewtechs\SchemaOrg\JsonLd\Schemas\JobLocation;


use Previewtechs\SchemaOrg\JsonLd\Schemas\Address\Address;
use Previewtechs\SchemaOrg\JsonLd\Schemas\SchemaInterface;
use Previewtechs\SchemaOrg\JsonLd\Schemas\Schemas;

class JobLocation extends Schemas implements SchemaInterface
{
    /**
     * @var string|null
     */
    protected $type = "PostalAddress";

    /**
     * @var Address
     */
    protected $address;

    /**
     * JobLocation constructor.
     */
    public function __construct()
    {
        $this->address = new Address();
    }

    /**
     * @return Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }
}
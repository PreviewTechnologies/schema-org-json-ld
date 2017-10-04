<?php

namespace Previewtechs\SchemaOrg\JsonLd\Schemas\BaseSalary;

use Previewtechs\SchemaOrg\JsonLd\Schemas\SchemaInterface;
use Previewtechs\SchemaOrg\JsonLd\Schemas\Schemas;

/**
 * Class BaseSalary
 * @package Previewtechs\SchemaOrg\JsonLd\Schemas\BaseSalary
 */
class BaseSalary extends Schemas implements SchemaInterface
{
    /**
     * @var string|null
     */
    protected $type = "MonetaryAmount";

    /**
     * @var string
     */
    protected $currency = 'USD';

    /**
     * @var BaseSalaryValue
     */
    protected $value;

    /**
     * BaseSalary constructor.
     */
    public function __construct()
    {
        $this->value = new BaseSalaryValue();
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param $type
     *
     * @return BaseSalary
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param $currency
     *
     * @return BaseSalary
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return BaseSalaryValue
     */
    public function setValue()
    {
        return $this->value;
    }

    /**
     * @return BaseSalaryValue
     */
    public function getValue()
    {
        return $this->value;
    }
}
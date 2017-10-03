<?php

namespace Previewtechs\SchemaOrg\JsonLd\Schemas\BaseSalary;

/**
 * Class BaseSalaryValue
 * @package Previewtechs\SchemaOrg\JsonLd\Schemas\BaseSalary
 */

use Previewtechs\SchemaOrg\JsonLd\Schemas\SchemaInterface;

/**
 * Class BaseSalaryValue
 * @package Previewtechs\SchemaOrg\JsonLd\Schemas\BaseSalary
 */
class BaseSalaryValue implements SchemaInterface
{
    /**
     * @var string
     */
    protected $type = "QuantitativeValue";

    /**
     * @var int|null
     */
    protected $maxValue = null;

    /**
     * @var int|null
     */
    protected $minValue = null;

    /**
     * @var string|null
     */
    protected $unitText = null;

    /**
     * @var string|null
     */
    protected $value = null;

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param $type
     *
     * @return BaseSalaryValue
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getMaxValue()
    {
        return $this->maxValue;
    }

    /**
     * @param $maxValue
     *
     * @return BaseSalaryValue
     */
    public function setMaxValue($maxValue)
    {
        $this->maxValue = $maxValue;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getMinValue()
    {
        return $this->minValue;
    }

    /**
     * @param $minValue
     *
     * @return BaseSalaryValue
     */
    public function setMinValue($minValue)
    {
        $this->minValue = $minValue;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getUnitText()
    {
        return $this->unitText;
    }

    /**
     * @param $unitText
     *
     * @return BaseSalaryValue
     */
    public function setUnitText($unitText)
    {
        $this->unitText = $unitText;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param $value
     *
     * @return BaseSalaryValue
     */
    public function setValue($value)
    {
        $this->value = $value;
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
<?php

namespace Previewtechs\SchemaOrg\JsonLd\Schemas\JobPosting;

use Previewtechs\SchemaOrg\JsonLd\Schemas\BaseSalary\BaseSalary;

/**
 * Class JobPosting
 * @package Previewtechs\SchemaOrg\JsonLd\Schemas\JobPosting
 */
class JobPosting
{
    /**
     * @var string|null
     */
    protected $jobBenefits = null;

    /**
     * @var \DateTime
     */
    protected $datePosted;

    /**
     * @var BaseSalary
     */
    protected $baseSalary;

    /**
     * JobPosting constructor.
     */
    public function __construct()
    {
        $this->baseSalary = new BaseSalary();
    }

    /**
     * @return null|string
     */
    public function getJobBenefits()
    {
        return $this->jobBenefits;
    }

    /**
     * @param $jobBenefits
     * @return JobPosting
     */
    public function setJobBenefits($jobBenefits)
    {
        $this->jobBenefits = $jobBenefits;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDatePosted()
    {
        return $this->datePosted;
    }

    /**
     * @param $datePosted
     * @return JobPosting
     */
    public function setDatePosted($datePosted)
    {
        $this->datePosted = $datePosted;
        return $this;
    }

    /**
     * @return BaseSalary
     */
    public function getBaseSalary()
    {
        return $this->baseSalary;
    }

    /**
     * @return BaseSalary
     */
    public function setBaseSalary()
    {
        return $this->baseSalary;
    }
}
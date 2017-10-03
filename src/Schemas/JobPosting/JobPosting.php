<?php

namespace Previewtechs\SchemaOrg\JsonLd\Schemas\JobPosting;

use Previewtechs\SchemaOrg\JsonLd\Schemas\BaseSalary\BaseSalary;
use Previewtechs\SchemaOrg\JsonLd\Schemas\HiringOrganization\HiringOrganization;
use Previewtechs\SchemaOrg\JsonLd\Schemas\JobLocation\JobLocation;
use Previewtechs\SchemaOrg\JsonLd\Schemas\SchemaInterface;

/**
 * Class JobPosting
 * @package Previewtechs\SchemaOrg\JsonLd\Schemas\JobPosting
 */
class JobPosting implements SchemaInterface
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
     * @var string
     */
    protected $context = 'http://schema.org';

    /**
     * @var string
     */
    protected $type = "JobPosting";

    /**
     * @var null|string
     */
    protected $description = null;

    /**
     * @var null|string
     */
    protected $employmentType = null;

    /**
     * @var null|string
     */
    protected $experienceRequirements = null;

    /**
     * @var null|string
     */
    protected $incentiveCompensation = null;

    /**
     * @var null|string
     */
    protected $industry = null;

    /**
     * @var null|string
     */
    protected $occupationalCategory = null;

    /**
     * @var null|string
     */
    protected $qualifications = null;

    /**
     * @var null|string
     */
    protected $responsibilities = null;

    /**
     * @var string
     */
    protected $salaryCurrency = 'USD';

    /**
     * @var null|string
     */
    protected $skills = null;

    /**
     * @var null|string
     */
    protected $specialCommitments = null;

    /**
     * @var null|string
     */
    protected $title = null;

    /**
     * @var null|string
     */
    protected $workHours = null;

    /**
     * @var \DateTime
     */
    protected $validThrough = null;

    /**
     * @var JobLocation
     */
    protected $jobLocation;

    /**
     * @var HiringOrganization
     */
    protected $hiringOrganization;

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
     *
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
     *
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

    /**
     * @return array
     */
    public function toArray()
    {
        return get_object_vars($this);
    }

    public function getJsonLd()
    {
        $data = [];

        $arrays = get_object_vars($this);
        foreach ($arrays as $key => $value) {
            if (is_object($value)) {
                $data[$key] = $value->toArray();
            }
        }

        return $data;
    }
}
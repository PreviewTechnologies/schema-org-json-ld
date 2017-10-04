<?php

require dirname(__DIR__).DIRECTORY_SEPARATOR."/vendor/autoload.php";

$jobPosting = new \Previewtechs\SchemaOrg\JsonLd\Schemas\JobPosting\JobPosting();
$jobPosting->setBaseSalary()->setValue()
    ->setMinValue(2)
    ->setMaxValue(400)
    ->setUnitText('Month');
$jobPosting->setJobBenefits("Medical, Insurance");

var_dump($jobPosting->getJsonLd());
die();
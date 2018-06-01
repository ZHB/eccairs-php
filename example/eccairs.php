<?php

use Zhb\Eccairs\Eccairs;
use Zhb\Eccairs\FieldMapping;
use Zhb\Eccairs\Model\Attributes;
use Zhb\Eccairs\Model\Entities;
use Zhb\Eccairs\Model\Entity\AerodromeGeneral\AerodromeGeneral;
use Zhb\Eccairs\Model\Entity\AerodromeGeneral\Attribute\AerodromeLatitude;
use Zhb\Eccairs\Model\Entity\AerodromeGeneral\Attribute\AerodromeLongitude;
use Zhb\Eccairs\Model\Entity\Aircraft\Aircraft;
use Zhb\Eccairs\Model\Entity\Aircraft\Attribute\AircraftRegistration;
use Zhb\Eccairs\Model\Entity\Aircraft\Attribute\BirdsWildlifeStruck;
use Zhb\Eccairs\Model\Entity\Aircraft\Attribute\FlightNumber;
use Zhb\Eccairs\Model\Entity\Aircraft\Attribute\FlightPhase;
use Zhb\Eccairs\Model\Entity\Aircraft\Attribute\PartsDamaged;
use Zhb\Eccairs\Model\Entity\Aircraft\Attribute\SpeciesDescription;
use Zhb\Eccairs\Model\Entity\Occurrence\Attribute\LatitudeOfOccurrence;
use Zhb\Eccairs\Model\Entity\Occurrence\Attribute\LongitudeOfOccurrence;
use Zhb\Eccairs\Model\Entity\Occurrence\Attribute\UtcDate;
use Zhb\Eccairs\Model\Entity\Occurrence\Attribute\UtcTime;
use Zhb\Eccairs\Model\Entity\PrecipitationAndOtherWeatherPhenomena\Attribute\PhenomenonType;
use Zhb\Eccairs\Model\Entity\PrecipitationAndOtherWeatherPhenomena\PrecipitationAndOtherWeatherPhenomena;
use Zhb\Eccairs\Model\Entity\ReportingHistory\Attribute\Report;
use Zhb\Eccairs\Model\Entity\ReportingHistory\Attribute\ReportIdentification;
use Zhb\Eccairs\Model\Entity\ReportingHistory\ReportingHistory;
use Zhb\Eccairs\Model\Occurrence;


require_once __DIR__ . '/../vendor/autoload.php';

/**
 * AerodromeGeneral
 */
$aerodromeGeneralAttributes = new Attributes();
$aerodromeGeneralAttributes->addAttribute(new AerodromeLatitude('46.25252'));
$aerodromeGeneralAttributes->addAttribute(new AerodromeLongitude('7.2564'));

$aerodromeGeneral = new AerodromeGeneral();
$aerodromeGeneral->setValue([$aerodromeGeneralAttributes]);

/**
 * Aircraft
 */
$aircraftAttributes = new Attributes();
$aircraftAttributes->addAttribute(new FlightNumber('585452'));
$aircraftAttributes->addAttribute(new FlightPhase('6'));
$aircraftAttributes->addAttribute(new AircraftRegistration('HB-KKJ'));
$aircraftAttributes->addAttribute(new PartsDamaged('6'));
$aircraftAttributes->addAttribute(new SpeciesDescription('1131'));
$aircraftAttributes->addAttribute(new BirdsWildlifeStruck('2'));

$aircraft = new Aircraft();
$aircraft->setValue([$aircraftAttributes]);

/**
 * PrecipitationAndOtherWeatherPhenomena
 */
$precipitationAndOtherWeatherPhenomenaAttributes = new Attributes();
$precipitationAndOtherWeatherPhenomenaAttributes->addAttribute(new PhenomenonType(FieldMapping::map('sunny', FieldMapping::$phenomenonTypes)));

$precipitationAndOtherWeatherPhenomena = new PrecipitationAndOtherWeatherPhenomena();
$precipitationAndOtherWeatherPhenomena->setValue([$precipitationAndOtherWeatherPhenomenaAttributes]);

/**
 * ReportingHistory
 */
$reportingHistoryAttributes = new Attributes();
$reportingHistoryAttributes->addAttribute(new ReportIdentification('025-2016'));
$reportingHistoryAttributes->addAttribute(new Report('./Attachment_1.jpg', 'Desc'));
$reportingHistoryAttributes->addAttribute(new Report('./Attachment_2.jpg'));
//$reportingHistoryAttributes->addAttribute(new FlightPhase('67));

$reportingHistory = new ReportingHistory();
$reportingHistory->setValue([$reportingHistoryAttributes]);

/**
 * Occurrence
 */
$occurrenceAttributes = new Attributes();
$occurrenceAttributes->addAttribute(new LatitudeOfOccurrence('46.3333'));
$occurrenceAttributes->addAttribute(new LongitudeOfOccurrence('46.3333'));
$occurrenceAttributes->addAttribute(new UtcDate('2016-10-19'));
$occurrenceAttributes->addAttribute(new UtcTime('09:00:00'));

$occurrenceEntities = new Entities();
$occurrenceEntities->setValue([
    $aerodromeGeneral,
    $aircraft,
    $precipitationAndOtherWeatherPhenomena,
    $reportingHistory,
]);

$occurrence = new Occurrence();
$occurrence->setValue([$occurrenceAttributes, $occurrenceEntities]);

$eccairs = new Eccairs($occurrence, true);
$eccairs->addFile('./Attachment_1.jpg');
$eccairs->addFile('./Attachment_2.jpg');

//echo $eccairs->getXml();
$eccairs->e5xAsAttachment();

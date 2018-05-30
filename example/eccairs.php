<?php

use \Zhb\Eccairs\Model\Attribute;
use \Zhb\Eccairs\Model\Entity\AerodromeGeneral;
use \Zhb\Eccairs\Model\Entity\Aircraft;
use \Zhb\Eccairs\Model\Occurrence;
use \Zhb\Eccairs\Eccairs;
use \Zhb\Eccairs\Model\Set;
use \Zhb\Eccairs\FieldMapping;
use \Zhb\Eccairs\Model\Entity\PrecipitationAndOtherWeatherPhenomena;

require_once __DIR__ . '/../vendor/autoload.php';

$aerodromeGeneral = new AerodromeGeneral(129, '2');
$aerodromeGeneral->setAttributes([
    'Aerodrome_Latitude' => new Attribute(1, 46.2348694),
    'Aerodrome_Longitude' => new Attribute(2, 6.114175),
]);

$aircraft = new Aircraft();
$aircraft->setAttributes([
    'Flight_Number' => new Attribute(120, '585452'),
    'Flight_Phase' => new Attribute(121, FieldMapping::map('approach', FieldMapping::$flightPhases)),
    'Aircraft_Registration' => new Attribute(244, 'HB-KKJ'),
    'Parts_Damaged' => new Attribute(643, FieldMapping::map('propellers-rotor', FieldMapping::$PartsDamaged)),
    'Species_Description' => new Attribute(645, 1131), // OTHER: see xsd schema VL1041_12_0_1_2.xsd
    'Birds_Wildlife_Struck' => new Attribute(647, 2), // Number of birds/wildlife struck
]);

$precipitationAndOtherWeatherPhenomena = new PrecipitationAndOtherWeatherPhenomena();
$precipitationAndOtherWeatherPhenomena->setAttributes([
   'Phenomenon_Type'  => new Attribute(299, FieldMapping::map('sunny', FieldMapping::$phenomenonTypes)),
]);

$ReportingHistory = new \Zhb\Eccairs\Model\Entity\ReportingHistory();
$ReportingHistory->setAttributes([
   'Report_Identification' => new Attribute(438, '025-2016'),
   'Report' => new \Zhb\Eccairs\Model\FileAttribute('Attachment_4803_Cool-Pictures1.jpg'),
]);

$occurrence = new Occurrence();
$occurrence->setAttributes([
    //'Dang_Goods_Involved' => new Attribute(129, 2),
    'Latitude_Of_Occ' => new Attribute(439, 46.25252),
    'Longitude_Of_Occ' => new Attribute(444, 7.23255),
    'UTC_Date' => new Attribute(477, '2016-10-19'),
    'UTC_Time' => new Attribute(478, '09:00:00'),
]);

$occurrence->setEntities([
    'Aerodrome_General' => $aerodromeGeneral,
    'Aircraft' => $aircraft,
    'Precipitation_And_Other_Weather_Phenomena' => $precipitationAndOtherWeatherPhenomena,
    'Reporting_History' => $ReportingHistory,
]);

$set = new Set();
$set->setOccurrence($occurrence);

$eccairs = new Eccairs($set, true);
$eccairs->addFile('./Attachment_1.jpg');
$eccairs->addFile('./Attachment_2.jpg');

echo $eccairs->getXml();
//$eccairs->e5xAsAttachment();

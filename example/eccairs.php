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
    //'Location_Indicator' => new Attribute(5, '188034'),
    //'Location_On_Near_Aerodrome' => new Attribute(641, '3', Attribute::TEXT_ENCODING_STRING),
]);

$aircraft = new Aircraft();
$aircraft->setAttributes([
    'Flight_Phase' => new Attribute(121, FieldMapping::map('approach', FieldMapping::$flightPhases)),
    'Parts_Damaged' => new Attribute(643, FieldMapping::map('propellers-rotor', FieldMapping::$PartsDamaged)),
    'Species_Description' => new Attribute(645, 1131), // OTHER: see xsd schema VL1041_12_0_1_2.xsd
    'Birds_Wildlife_Struck' => new Attribute(647, 2), // Number of birds/wildlife struck
    //'Flight_Number' => new Attribute(120, 'hhhhhddd'),
    //'Aircraft_Registration' => new Attribute(244, 'HBKKJ'),

    //'Aircraft_Category' => new Attribute(32, '16'),
    //'Last_Departure_Point' => new Attribute(167, '188034'),
    //'Operation_Type' => new Attribute(214, '3'),
    //'Operator' => new Attribute(215, '10004084'),
    //'Planned_Destination' => new Attribute(228, '95019'),
    //'Propulsion_Type' => new Attribute(232, 3),
    //'Aircraft_Registration' => new Attribute(244, '3'),
    //'Serial_Number' => new Attribute(254, '3'),
    //'State_Of_Registry' => new Attribute(281, '229'),
    //'Wake_Turb_Category' => new Attribute(313, '3'),
    //'Mass_Group' => new Attribute(319, '3'),
]);

$precipitationAndOtherWeatherPhenomena = new PrecipitationAndOtherWeatherPhenomena();
$precipitationAndOtherWeatherPhenomena->setAttributes([
   'Phenomenon_Type'  => new Attribute(299, FieldMapping::map('sunny', FieldMapping::$phenomenonTypes)),
]);

$occurrence = new Occurrence();
$occurrence->setAttributes([
    'Latitude_Of_Occ' => new Attribute(439, 46.25252),
    'Longitude_Of_Occ' => new Attribute(444, 7.23255),
    'UTC_Date' => new Attribute(477, '2016-10-19'),
    'UTC_Time' => new Attribute(478, '09:00:00'),
    //'Dang_Goods_Involved' => new Attribute(129, '2'),
    //'Occurrence_Category' => new Attribute(430, '24'),
]);

$occurrence->setEntities([
    'Aerodrome_General' => $aerodromeGeneral,
    'Aircraft' => $aircraft,
    'Precipitation_And_Other_Weather_Phenomena' => $precipitationAndOtherWeatherPhenomena,
]);

$set = new Set();
$set->setOccurrence($occurrence);

$eccairs = new Eccairs($set);
echo $eccairs->getXml(true);
//$eccairs->e5xAsAttachment();

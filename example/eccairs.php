<?php

use \Zhb\Eccairs\Model\Attribute;
use \Zhb\Eccairs\Model\Entity\AerodromeGeneral;
use \Zhb\Eccairs\Model\Entity\Aircraft;
use \Zhb\Eccairs\Model\Occurrence;
use \Zhb\Eccairs\Eccairs;
use \Zhb\Eccairs\Model\Set;
use \Zhb\Eccairs\E5x\Zipper;

require_once __DIR__ . '/../vendor/autoload.php';

$aerodromeGeneral = new AerodromeGeneral(129, '2');
$aerodromeGeneral->setAttributes([
    'Aerodrome_Latitude' => new Attribute(1, '46.2348694'),
    'Aerodrome_Longitude' => new Attribute(2, '6.114175'),
    'Location_Indicator' => new Attribute(5, '188034'),
    'Location_On_Near_Aerodrome' => new Attribute(641, '3', Attribute::TEXT_ENCODING_STRING),
]);

$aircraft = new Aircraft();
$aircraft->setAttributes([
    'Aircraft_Category' => new Attribute(32, '16'),
    'Flight_Phase' => new Attribute(121, '2'),
    'Last_Departure_Point' => new Attribute(167, '188034'),
    'Operation_Type' => new Attribute(214, '3'),
    'Operator' => new Attribute(215, '10004084'),
    'Planned_Destination' => new Attribute(228, '95019'),
    'Propulsion_Type' => new Attribute(232, 3),
    'Aircraft_Registration' => new Attribute(244, '3'),
    'Serial_Number' => new Attribute(254, '3'),
    'State_Of_Registry' => new Attribute(281, '229'),
    'Wake_Turb_Category' => new Attribute(313, '3'),
    'Mass_Group' => new Attribute(319, '3'),
]);

$occurrence = new Occurrence();
$occurrence->setAttributes([
    'Dang_Goods_Involved' => new Attribute(129, '2'),
    'Occurrence_Category' => new Attribute(430, '24'),
]);

$occurrence->setEntities([
    'Aerodrome_General' => $aerodromeGeneral,
    'Aircraft' => $aircraft,
]);

$set = new Set();
$set->setOccurrence($occurrence);

$eccairs = new Eccairs($set);
$xml = $eccairs->getXml();

$zipper = new Zipper($xml);
$zipper->compress();

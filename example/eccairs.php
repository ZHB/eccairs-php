<?php

/*
 * (c) ZHB <vincent.huck.pro@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Zhb\Eccairs\Eccairs;
use Zhb\Eccairs\FieldMapping;
use Zhb\Eccairs\Model\Entities;
use Zhb\Eccairs\Model\Entity\AerodromeGeneral\AerodromeGeneral;
use Zhb\Eccairs\Model\Entity\AerodromeGeneral\Attribute\AerodromeLatitude;
use Zhb\Eccairs\Model\Entity\AerodromeGeneral\Attribute\AerodromeLongitude;
use Zhb\Eccairs\Model\Entity\AerodromeGeneral\Attribute\LocationIndicator;
use Zhb\Eccairs\Model\Entity\Aircraft\Aircraft;
use Zhb\Eccairs\Model\Entity\Aircraft\Attribute\AircraftRegistration;
use Zhb\Eccairs\Model\Entity\Aircraft\Attribute\BirdsWildlifeStruck;
use Zhb\Eccairs\Model\Entity\Aircraft\Attribute\FlightNumber;
use Zhb\Eccairs\Model\Entity\Aircraft\Attribute\FlightPhase;
use Zhb\Eccairs\Model\Entity\Aircraft\Attribute\PartsDamaged;
use Zhb\Eccairs\Model\Entity\Aircraft\Attribute\PartsStruck;
use Zhb\Eccairs\Model\Entity\Aircraft\Attribute\PilotAdvisedOfBirds;
use Zhb\Eccairs\Model\Entity\Aircraft\Attribute\BirdsWildlifeSeen;
use Zhb\Eccairs\Model\Entity\Aircraft\Attribute\SpeciesDescription;
use Zhb\Eccairs\Model\Entity\Aircraft\Attribute\SpeedFirstEvent;
use Zhb\Eccairs\Model\Entity\Occurrence\Attribute\LatitudeOfOccurrence;
use Zhb\Eccairs\Model\Entity\Occurrence\Attribute\LocalTime;
use Zhb\Eccairs\Model\Entity\Occurrence\Attribute\LongitudeOfOccurrence;
use Zhb\Eccairs\Model\Entity\Occurrence\Attribute\UtcDate;
use Zhb\Eccairs\Model\Entity\Occurrence\Attribute\UtcTime;
use Zhb\Eccairs\Model\Entity\PrecipitationAndOtherWeatherPhenomena\Attribute\PhenomenonType;
use Zhb\Eccairs\Model\Entity\PrecipitationAndOtherWeatherPhenomena\PrecipitationAndOtherWeatherPhenomena;
use Zhb\Eccairs\Model\Entity\ReportingHistory\Attribute\Report;
use Zhb\Eccairs\Model\Entity\ReportingHistory\Attribute\ReportIdentification;
use Zhb\Eccairs\Model\Entity\ReportingHistory\ReportingHistory;
use Zhb\Eccairs\Model\Occurrence;

require_once __DIR__.'/../vendor/autoload.php';

/**
 * AerodromeGeneral.
 */
$aerodromeGeneral = (new AerodromeGeneral())
    ->addAttribute(new AerodromeLatitude(46.25252))
    ->addAttribute(new AerodromeLongitude(7.2564))
    ->addAttribute(new LocationIndicator(188034))
;

/**
 * Aircraft.
 */
$aircraft = (new Aircraft())
    ->addAttribute(new FlightNumber('555'))
    ->addAttribute(new FlightPhase('6'))
    ->addAttribute(new AircraftRegistration('A55'))
    ->addAttribute(new SpeedFirstEvent(150))
    ->addAttribute(new PartsDamaged('6'))
    ->addAttribute(new PartsStruck('2'))
    ->addAttribute(new SpeciesDescription('1131'))
    ->addAttribute(new BirdsWildlifeSeen())
    ->addAttribute(new BirdsWildlifeStruck(50))
    ->addAttribute(new PilotAdvisedOfBirds(true))
;

/**
 * PrecipitationAndOtherWeatherPhenomena.
 */
$precipitationAndOtherWeatherPhenomena = (new PrecipitationAndOtherWeatherPhenomena())
    ->addAttribute(new PhenomenonType(FieldMapping::map('sunny', FieldMapping::$phenomenonTypes)))
;

/**
 * ReportingHistory.
 */
$reportingHistory = (new ReportingHistory())
    ->addAttribute(new ReportIdentification('025-2016'))
    ->addAttribute(new Report('./Attachment_1.jpg', 'Desc'))
    ->addAttribute(new Report('./Attachment_2.jpg'))
;

/**
 * Occurrence.
 */
$entities = (new Entities())
    ->addEntity($aerodromeGeneral)
    ->addEntity($aircraft)
    ->addEntity($precipitationAndOtherWeatherPhenomena)
    ->addEntity($reportingHistory)
;

$occurrence = (new Occurrence($entities))
    ->addAttribute(new LatitudeOfOccurrence('46.3333'))
    ->addAttribute(new LongitudeOfOccurrence('46.3333'))
    ->addAttribute(new LocalTime('07:00:00'))
    ->addAttribute(new UtcDate('2016-10-19'))
    ->addAttribute(new UtcTime('09:00:00'))
;

$eccairs = new Eccairs($occurrence, $validateAgainstXsd = true);
$eccairs->addFile('./Attachment_1.jpg');
$eccairs->addFile('./Attachment_2.jpg');

// exports E5x as attachment
// $eccairs->e5xAsAttachment();

// or print the output to the browser
echo $eccairs->getXml();

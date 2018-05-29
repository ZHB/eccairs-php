<?php

namespace Zhb\Eccairs;

use Zhb\Eccairs\Exception\MissingMappingFieldException;

final class FieldMapping
{
    // Flight_Phases : VL121_5_0_1_1.xsd
    public static $flightPhases = [
        'approach' => 6,
        'landing' => 7,
        'take-off' => 3,
        'flight-phase-unknown' => 99,
        'taxiway' => 2,
    ];

    // Phenomenon_Type : VL299_5_0_1_2.xsd
    public static $phenomenonTypes = [
        'sunny' => 98,
        'mostly-sunny-some-clouds' => 98,
        'very-cloudy' => 98,
        'sunny-intervals-isolated-rain-or-snow-showers' => 98,
        'very-cloudy-intermittent-rain' => 1,
        'very-cloudy-intermittent-snow' => 3,
        'very-cloudy-stormy' => 98,
        'stratus-or-fog' => 107,
    ];

    // Parts_Damaged : VL1040_12_0_1_1.xsd
    public static $PartsDamaged = [
        'wing-edge' => 9,
        'fuselage' => 11,
        'propellers-rotor' => 8,
        'windshield' => 2,
        'tail-rudder' => 13,
        'radome' => 1,
        'turbine-engine' => 15, // Other
        'landing-gear' => 12,
        'undefined' => 15, // Other
    ];

    public static function map($field, $fields)
    {
        if (!array_key_exists($field, $fields)) {
            throw new MissingMappingFieldException();
        }

        return $fields[$field];
    }
}
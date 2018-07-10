<?php

/*
 * (c) ZHB <vincent.huck.pro@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zhb\Eccairs;

use Zhb\Eccairs\Exception\MissingMappingFieldException;

final class FieldMapping
{
    // Flight_Phases : VL121_5_0_1_1.xsd
    public static $flightPhases = [
        'standing' => 1,
        'taxiway' => 2,
        'take-off' => 3,
        'en-route' => 4,
        'approach' => 6,
        'landing' => 7,
        'tow' => 100,
        'flight-phase-unknown' => 99,
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
        'stratus-or-fog' => 101,
    ];

    // Parts_Damaged : VL1040_12_0_1_1.xsd
    public static $PartsDamaged = [
        'radome' => 1,
        'windshield' => 2,
        'nose-ex-radome-windshield' => 3,
        'engine-1' => 4,
        'engine-2' => 5,
        'engine-3' => 6,
        'engine-4' => 7,
        'propellers' => 8,
        'wing' => 9,
        'rotor' => 10,
        'fuselage' => 11,
        'landing-gear' => 12,
        'tail-rudder' => 13,
        'lights' => 14,
        'other-undefined' => 15, // Other
    ];

    public static function map($field, $fields)
    {
        if (!array_key_exists($field, $fields)) {
            throw new MissingMappingFieldException(sprintf('The field %s doesn\'t exists in mapping fields', $field));
        }

        return $fields[$field];
    }
}

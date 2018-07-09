<?php

/*
 * (c) ZHB <vincent.huck.pro@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zhb\Eccairs\Model\Entity\PrecipitationAndOtherWeatherPhenomena;

use Zhb\Eccairs\Model\AbstractEntity;

class PrecipitationAndOtherWeatherPhenomena extends AbstractEntity
{
    private $name = 'Precipitation_And_Other_Weather_Phenomena';

    private $attributes = [
        'entityId' => '28',
    ];

    protected $value;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return PrecipitationAndOtherWeatherPhenomena
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
}

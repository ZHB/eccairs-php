<?php

/*
 * (c) ZHB <vincent.huck.pro@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zhb\Eccairs\Model\Entity\ReportingHistory;

use Zhb\Eccairs\Model\AbstractEntity;

class ReportingHistory extends AbstractEntity
{
    private $name = 'Reporting_History';

    private $attributes = [
        'entityId' => '53',
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
     * @return ReportingHistory
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
}

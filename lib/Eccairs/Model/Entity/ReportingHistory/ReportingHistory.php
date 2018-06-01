<?php

namespace Zhb\Eccairs\Model\Entity\ReportingHistory;


use Zhb\Eccairs\Model\AbstractEntity;

class ReportingHistory extends AbstractEntity
{
    private $name = 'Reporting_History';

    private $attributes = [
        //'ID' => 'ID64ff25bf5de74af9b5385f44c0721b0a',
        'entityId' => '53',
    ];

    private $value;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @param mixed $attributes
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }
}
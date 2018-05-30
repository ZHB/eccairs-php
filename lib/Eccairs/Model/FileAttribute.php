<?php

namespace Zhb\Eccairs\Model;

use JMS\Serializer\Annotation as Serializer;


class FileAttribute implements AttributeInterface
{
    /**
     * @var string
     *
     * @Serializer\XmlElement(cdata=false, namespace="http://eccairsportal.jrc.ec.europa.eu/ECCAIRS5_dataTypes.xsd")
     * @Serializer\SerializedName("FileName")
     */
    private $fileName;

    /**
     * @var string
     *
     * @Serializer\XmlElement(cdata=false, namespace="http://eccairsportal.jrc.ec.europa.eu/ECCAIRS5_dataTypes.xsd")
     * @Serializer\SerializedName("Description")
     */
    private $description;

    /**
     * FileAttribute constructor.
     *
     * @param string $fileName
     * @param string $description
     */
    public function __construct($fileName, $description = null)
    {
        $this->fileName = $fileName;
        $this->description = $description ?: $fileName;
    }

    /**
     * @return string
     */
    public function getFileName(): string
    {
        return $this->fileName;
    }

    /**
     * @param string $fileName
     */
    public function setFileName(string $fileName)
    {
        $this->fileName = $fileName;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }
}

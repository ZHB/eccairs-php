<?php

namespace Zhb\Eccairs\E5x;

use PhpZip\ZipFile;

class Zipper
{
    const OUTPUT_EXT = '.e5x';

    /**
     * @var string
     */
    private $xml;

    public function __construct(string $xml)
    {
        $this->xml = $xml;
    }

    public function compress()
    {
        $fileName = $this->getFileName();

        $zip = new ZipFile();
        $zip->addFromString($fileName.'.xml', $this->xml);

        $zip->outputAsAttachment($fileName.self::OUTPUT_EXT);
        $zip->close();
    }

    private function getFileName()
    {
        return md5($this->xml);
    }
}

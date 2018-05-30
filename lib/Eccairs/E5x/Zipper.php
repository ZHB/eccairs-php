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

    /**
     * @var ZipFile
     */
    private $zip;

    public function __construct(string $xml)
    {
        $this->xml = $xml;

        $this->zip = new ZipFile();
    }

    public function addFile($filePath)
    {
        $this->zip->addFile($filePath, $this->getFileName().'/'.basename($filePath));
    }

    public function compress()
    {
        $fileName = $this->getFileName();

        $this->zip->addFromString($fileName.'.xml', $this->xml);
        $this->zip->outputAsAttachment($fileName.self::OUTPUT_EXT);
        $this->zip->close();
    }

    private function getFileName()
    {
        return md5($this->xml);
    }
}

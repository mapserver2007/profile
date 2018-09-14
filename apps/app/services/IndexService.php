<?php
namespace Profile\Service;

use WebStream\Core\CoreService;
use WebStream\IO\Reader\FileReader;
use WebStream\Util\ApplicationUtils;
use WebStream\Util\PropertyProxy;

class IndexService extends CoreService
{
    use PropertyProxy, ApplicationUtils;

    private $markdown;
    private $markdownDir;
    private $fileReader;

    public function __construct()
    {
        $this->markdown = new \cebe\markdown\MarkdownExtra();
        $this->markdownDir = $this->getApplicationRoot() . "/app/views/markdown/";
    }

    public function getMarkdownHTML($filename)
    {
        $reader = new FileReader($this->markdownDir . $filename);
        return $this->markdown->parse($reader->read());
    }
}

<?php
namespace Profile\Helper;

use WebStream\Core\CoreHelper;

class IndexHelper extends CoreHelper
{
    public function write($list)
    {
        foreach ($list as $elem) {
            echo $this->encodeHtml($elem->getName());
        }
    }
}

<?php
namespace Profile\Controller;

use WebStream\Core\CoreController;
use WebStream\Annotation\Attributes\Template;

class IndexController extends CoreController
{
    /**
     * @Template("career.tmpl")
     */
    public function career()
    {
    }
}

<?php
namespace Profile\Controller;

use WebStream\Core\CoreController;
// use WebStream\Annotation\Attributes\Alias;
// use WebStream\Annotation\Attributes\ExceptionHandler;
// use WebStream\Annotation\Attributes\Filter;
// use WebStream\Annotation\Attributes\Header;
use WebStream\Annotation\Attributes\Template;
// use WebStream\Annotation\Attributes\Validate;
// use WebStream\Annotation\Attributes\Custom\CustomControllerAnnotation;
// use WebStream\Exception\Extend\ForbiddenAccessException;


class IndexController extends CoreController
{
    /**
     * @Template("index.tmpl")
     */
    public function index()
    {
        // $this->Index->setCarrerMarkdown();
    }
}

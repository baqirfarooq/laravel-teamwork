<?php  namespace Baqirfarooq\Teamwork;

use Baqirfarooq\Teamwork\Traits\RestfulTrait;

class ProjectCategory extends AbstractObject {

    use RestfulTrait;

    protected $wrapper  = 'projectcategories';

    protected $endpoint = 'projectcategories';


}

<?php

namespace Smartbox\CoreBundle\Type;

use Smartbox\CoreBundle\Type\Traits\HasEntityGroup;
use Smartbox\CoreBundle\Type\Traits\HasInternalType;
use Smartbox\CoreBundle\Type\Traits\HasAPIVersion;

class Entity implements EntityInterface
{
    use HasEntityGroup;
    use HasAPIVersion;
    use HasInternalType;

    public function __construct()
    {
    }
}

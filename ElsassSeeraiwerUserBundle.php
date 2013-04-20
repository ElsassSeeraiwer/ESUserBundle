<?php

namespace Elsass\SeeraiwerUserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ElsassSeeraiwerUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}

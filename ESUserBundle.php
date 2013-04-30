<?php

namespace ElsassSeeraiwer\ESUserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ESUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}

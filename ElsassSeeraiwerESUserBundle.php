<?php

namespace ElsassSeeraiwer\ESUserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ElsassSeeraiwerESUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}

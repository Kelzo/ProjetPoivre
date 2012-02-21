<?php
// src/Poivre/UserBundle/PoivreUserBundle.php

namespace Poivre\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class PoivreUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
	

}
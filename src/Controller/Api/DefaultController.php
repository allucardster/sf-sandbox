<?php

namespace App\Controller\Api;

use FOS\RestBundle\Controller\Annotations as Rest;

#[Rest\Route('/default')]
class DefaultController
{
    #[Rest\Get('')]
    #[Rest\View()]
    public function get(): array
    {
        return ['foo' => 'bar'];
    }
}
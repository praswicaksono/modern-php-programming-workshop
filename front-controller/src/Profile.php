<?php

namespace Workshop;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Profile
{
    public function __invoke(Request $request, Response $response)
    {
        $response->setContent('this is profile page');
        return $response;
    }
}

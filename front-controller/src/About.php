<?php

namespace Workshop;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class About
{
    public function __invoke(Request $request, Response $response)
    {
        $response->setContent('this is about page');
        return $response;
    }
}

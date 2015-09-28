<?php

// register autoload
require 'vendor/autoload.php';

// use keyword to avoid FQCN declaration
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use League\Route\Http\Exception\NotFoundException;
use Workshop\About;
use Workshop\Profile;

// create route collection
$router = new League\Route\RouteCollection;

// create page object
$about = new About();
$profile = new Profile();

// register route
$router->addRoute('GET', '/about', $about);
$router->addRoute('GET', '/profile', $profile);

// create route dispatcher
$dispatcher = $router->getDispatcher();

// create request object from globals
$request = Request::createFromGlobals();

try {
    // dispatch request
    $response = $dispatcher->dispatch($request->getMethod(), $request->getRequestUri());
} catch (NotFoundException $e) {
    // catch not found exception
    $response = new Response(
        'Not Found',
        Response::HTTP_NOT_FOUND,
        ['Content-Type' => 'text/html']
    );
} finally {
    // send response to browser
    $response->send();
}



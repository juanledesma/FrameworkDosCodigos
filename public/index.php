<?php

declare(strict_types=1);

include '../vendor/autoload.php';

use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->load(realpath('../') . '/.env');

$request = Laminas\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER,
    $_GET,
    $_POST,
    $_COOKIE,
    $_FILES
);

$router = new League\Route\Router;

include '../app/Routes/web.php';

$responseFactory = new Laminas\Diactoros\ResponseFactory();

$jsonStrategy = new League\Route\Strategy\JsonStrategy($responseFactory);

$router->group('/api', function (\League\Route\RouteGroup $router) {

    include '../app/Routes/api.php';

}) ->setStrategy($jsonStrategy);


$response = $router->dispatch($request);

// send the response to the browser
(new Laminas\HttpHandlerRunner\Emitter\SapiEmitter)->emit($response);


<?php

require __DIR__ . '/../vendor/autoload.php';

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;

$app = new Slim\App(new Slim\Psr7\Factory\ResponseFactory());

$app->get('/', function (
    ServerRequestInterface $request,
    ResponseInterface $response,
    array $args
): ResponseInterface {
    $response->getBody()->write("Hello World!");
    return $response;
});

$app->run();

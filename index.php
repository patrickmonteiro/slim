<?php
require 'vendor/autoload.php';

$app = new \Slim\App;

$app->get('/hello/{name}', function ($request, $response, array $args) {
    $name = $args['name'];
    $response->getBody()->write("Hello, $name");

    return $response;
});

$app->run();
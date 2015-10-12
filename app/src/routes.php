<?php

$app->get('/', function ($request, $response, $args) {
    //echo 7/0;
    return $response->write("Hello from Diet with Slim");
});

$app->get('/test', function ($request, $response, $args) {
    $toc = $this->toc;
    d($toc);
    echo "HI!";
});
//this is what u type in the URL - THIS IS THE ROUTE
$app->get('/docs/{slug}', function ($request, $response, $args) {
    echo "You selected {$args['slug']}";
})->setName('docs');
//THIS IS THE NAME FOR THE ROUTE ->setName('docs')


<?php

$app->get('/', function ($request, $response, $args) {
    //echo 7/0;
    return $response->write("Hello from Diet with Slim");
});

$app->get('/test', function ($request, $response, $args) {
    $docs = $this->toc;
    //d($docs);
    $this->view->render($response, 'navbar.twig', ['docs'=>$docs]);
});
/*this is what u type in the URL - THIS IS THE ROUTE
$app->get('/docs/{slug}', function ($request, $response, $args) {
    echo "You selected {$args['slug']}";
})->setName('docs');
THIS IS THE NAME FOR THE ROUTE ->setName('docs')*/

        
$app->get('/docs/{slug}', function ($request, $response, $args) {
   //Retrieve the Object
    //$docs = $this->toc;
   //Render the template
   //
   echo "You selected {$args['slug']}";
})->setName('docs');
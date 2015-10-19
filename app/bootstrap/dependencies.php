<?php

$container = $app->getContainer();

//set up twig view
$container['view'] = function ($c) use($conf){ //use($conf) from index.php
    //gives twig options
    $twig = $conf->get('view.twig');
    $template_path = $conf->get('view.template_path');

    $view = new \Slim\Views\Twig( $template_path,  $twig);

    // Add extensions
    $view->addExtension(new Slim\Views\TwigExtension($c['router'], $c['request']->getUri()));
    $view->addExtension(new Twig_Extension_Debug());

    return $view;
};

//set up CSRF cross item forgery
$container['csrf'] = function ($c) {
    $guard = new \Slim\Csrf\Guard();
    //called in case of failure
    $guard->setFailureCallable(function ($request, $response, $next) {
        $request = $request->withAttribute("csrf_status", false);
        return $next($request, $response);
    });
    return $guard;
};

$container['application'] = function ($c) use($conf){
    return $conf->get('application');

// Flash messages slim provides support flash msg where u pass data from 1 page to another once only
$container['flash'] = function ($c) {
    return new \Slim\Flash\Messages();
};

};
$container['md_parser'] = function ($c) {
    return new Parser();
};
use Noodlehaus\Config;
$container['toc'] = function ($c) {
    $dir = $c['application']['docs_path'];
    $toc_file_name = $c['application']['docs_toc_file']; //ref settings.yaml
    
    $toc_file = "{$dir}/{$toc_file_name}";
    
    $toc = Config::load($toc_file)->get('toc');
    return $toc;
};
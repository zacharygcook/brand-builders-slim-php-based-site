<?php

    // Let's ask PHP to display all errors whenever they
    // occur in our slim code,
    // otherwise Slim will kind of swallow them, it will
    // only show in the command like.
    // Make sure you set this before other codes

    // The value mast become `false` before deployment
    ini_set('display_errors', true);


    // Call composer to autoload(make them available)
    // all classes from the the `vendor` folder

    // This file is in charge of doing that, and it's
    // located at vendor/autoload.php
    require __DIR__ . '/../vendor/autoload.php';


    // Let's announce to our application that we will be using
    // the Slim application class(`vendor/slim/slim/slim/App.php`) by calling its namespace. We don't need to require it with its
    // full path `vendor/slim/slim/slim/App.php`. Composer autoload
    // has already done that for us up there.
    // use SlimApp;


    // We now get a new instance/Object of slim app itself
    // and we save it in a variable we can name `$app`
    // You can name this variable anything
    $app = new \Slim\App;


    // Code to instantiate Twig-View
    // Main docs here -> https://github.com/slimphp/Twig-View
    // Cool tutorial on Twig templates in Slim:
    // https://www.cloudways.com/blog/twig-templates-in-slim/
    $container = $app->getContainer();

    // FOR WHEN YOU WANT A CACHE
    // $container['view'] = function($container) {
    //     $templates = __DIR__ . '/../templates';
    //     $cache = __DIR__ . '/../tmp/views/';

    //     $view = new Slim\Views\Twig($templates, compact('cache'));

    //     return $view;
    // };

    // FOR WHEN YOU DON'T WANT A CACHE

    $container['view'] = function ($container) {

        $templates = __DIR__ . '/../templates';

        $view = new \Slim\Views\Twig($templates, [

            'cache' => false,

        ]);

        // $view->addExtension(new \Slim\Views\TwigExtension(

        //     $container->router,

        //     $container->request->getUri()

        // ));

        return $view;

    };  


    // We add our first route which will respond to the home page
    // request, usually located at `/` or root.
    $app->get('/', function($request, $response, $args){


        // Then return an HTTP response
        return $this->view->render($response, 'index.html', $args);

    });

    // Once we have the instance of SlimApp we can ask it to start running
    // the application by calling Slim's run() function
    $app->run();
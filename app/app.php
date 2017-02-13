<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/Rock_paper_scissors.php';
    use Symfony\Component\Debug\Debug;
    Debug::enable();

    session_start();

    // initialize session variable if necessarry

    $app = new Silex\Application();
    $app['debug']=true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));






    return $app;
?>

<?php
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/RockPaperScissors.php';

    session_start();
    if(empty($_SESSION['list_of_choices'])) {
        $_SESSION['list_of_choices'] = array();
    }

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function () use ($app) {

    return $app['twig']->render('form.twig', array('col1' => 'selected', 'col2' => 'grey', 'display' => 'player1'));
    });

    $app->post('/player2', function() use ($app) {

        return $app['twig']->render('form.twig', array('col1' => 'grey', 'col2' => 'selected', 'display' => 'player2'));
    });

    $app->post('/outcome', function() use ($app) {

        return $app['twig']->render('outcome.twig');
    });

    return $app;

?>

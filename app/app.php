<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/Find.php';

    $app = new Silex\Application();
    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(),
        array('twig.path'=>__DIR__.'/../views')
    );

    $app->get('/', function() use ($app) {


        return $app['twig']->render('home.html.twig');
    });

    $app->post('/result', function() use ($app) {
        $new_find = new Find;
        $input1 = $_POST['input1'];
        $input2 = $_POST['input2'];
        $input3 = $_POST['input3'];
        $result = $new_find->findAndReplace($input1, $input2, $input3);

        return $app['twig']->render('result.html.twig', array('result' => $result));
    });

    return $app;

?>

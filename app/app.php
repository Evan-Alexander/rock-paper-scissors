<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/Rock_paper_scissors.php';
    use Symfony\Component\Debug\Debug;
    Debug::enable();

    session_start();
    if (empty($_SESSION['result']))
    {
        $_SESSION['result']= new RockPaperScissors;
    }

    // initialize session variable if necessarry

    $app = new Silex\Application();
    $app['debug']=true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('player_forms.html.twig', array('result' => RockPaperScissors::getGlobalResult()) );
    });

    $app->post("/", function() use ($app) {
        $player1_input = $_POST['player1'];
        $player2_input = $_POST['player2'];
        $result = new RockPaperScissors;
        $result->setResult($result->playRockPaperScissors($player1_input,$player2_input));
        $result->saveResult();
        // $result = RockPaperScissors::playRockPaperScissors($player1_input,$player2_input);
        return $app['twig']->render('player_forms.html.twig', array('result' => RockPaperScissors::getGlobalResult()) );
    });

    $app->get("/delete", function() use ($app) {
        RockPaperScissors::deletetGlobalResult();
        return $app['twig']->render('player_forms.html.twig', array('result' => RockPaperScissors::getGlobalResult()) );
    });



    return $app;
?>

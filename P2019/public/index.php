<?php

// Affichage des erreurs PHP
error_reporting(E_ALL);
ini_set("display_errors", 1);


// Constants de l'application
define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/..'));
define('VERSION_NUMBER', '1.0.0');

define('EMAIL', 'gerard@wsf.fr');
define('PASSWORD', '21232f297a57a5a743894a0e4a801fc3');

require APPLICATION_PATH . '/lib/autoload.php';

session_start();

// initialisation du router
$router = new Router();

$router->addRoute(array(
    'route'  => '^/login$',
    'GET'   => array('AuthController', 'login')
));

$router->addRoute(array(
    'route'  => '^/login$',
    'POST'   => array('AuthController', 'loginPost')
));

$router->addRoute(array(
    'route'  => '^/membres$',
    'GET'   => array('MembreController', 'index')
));

$router->addRoute(array(
    'route'  => '^/games$',
    'GET'   => array('GameController', 'index')
));

$router->addRoute(array(
    'route'  => '^/game$',
    'GET'   => array('GameController', 'one')
));

// Ajout des routes disponibles
$router->addRoute(array(
    'route'  => '^/$',
    'GET'   => array('IndexController', 'index')
));

$router->addRoute(array(
    'route'  => '^/movie$',
    'GET'   => array('MovieController', 'one')
));


$router->run();
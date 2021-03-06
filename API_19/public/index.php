<?php

// Affichage des erreurs PHP
error_reporting(E_ALL);
ini_set("display_errors", 1);

// Constants de l'application
define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/..'));
require APPLICATION_PATH . '/lib/autoload.php';

session_start();

// initialisation du router
$router = new Router();

$router->addRoute(array(
    'route'  => '^/logout$',
    'GET'   => array('AuthController', 'logout')
));

$router->addRoute(array(
    'route'  => '^/test$',
    'GET'   => array('AuthController', 'test')
));

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
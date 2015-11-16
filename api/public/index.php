<?php

// Affichage des erreurs PHP
error_reporting(E_ALL);
ini_set("display_errors", 1);


// Constants de l'application
define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/..'));
define('VERSION_NUMBER', '1.0.0');

require APPLICATION_PATH . '/lib/autoload.php';

// initialisation du router
$router = new Router();

// Ajout des routes disponibles
$router->addRoute(array(
    'route'  => '^/$',
    'GET'   => array('IndexController', 'index')
));

$router->addRoute(array(
    'route'  => '^/$',
    'POST'   => array('IndexController', 'index')
));

$router->run();
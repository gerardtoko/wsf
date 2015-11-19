<?php

// Affichage des erreurs PHP
error_reporting(E_ALL);
ini_set("display_errors", 1);


// Constants de l'application
define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/..'));

require APPLICATION_PATH . '/lib/autoload.php';

//Démarrage de la session en PHP
session_start();

// Initialisation du Router afin de capter les URLs disponibles
$router = new Router();

// Page d'accueil
$router->addRoute(array(
    'route'  => '^/$',
    'GET'   => array('IndexController', 'index') // Classe IndexController, Méthode index
));

// Affichage de tous les films sur l'url movies
$router->addRoute(array(
    'route'  => '^/movies$',
    'GET'   => array('MovieController', 'index') // Classe MovieController, Méthode index
));

// Authentification des membres
$router->addRoute(array(
    'route'  => '^/membres/login$',
    'GET'   => array('MembreController', 'login') // Classe MembreController, Méthode login
));

// Authentification des membres - envoie des données en POST
$router->addRoute(array(
    'route'  => '^/membres/login$',
    'POST'   => array('MembreController', 'loginPost') // Classe MembreController, Méthode loginPost
));

// Déconnexion de l'espace membre
$router->addRoute(array(
    'route'  => '^/membres/logout$',
    'GET'   => array('MembreController', 'logout')
));

// Affichage des films dans l'espace membre
$router->addRoute(array(
    'route'  => '^/membres$',
    'GET'   => array('MembreController', 'index') // Classe MembreController, Méthode index
));


$router->run();
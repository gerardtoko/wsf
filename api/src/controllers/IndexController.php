<?php

/**
 * Page d'accueil
 */
class IndexController {

  public function index($req, $res){
    // Changement de tous les films à travers le modèle Movie relié à la base de données
    $movies = new Movie();

    // Envoi des films vers la vue
    // Nom du template et données à transmettre
    $res->html("index.php", $movies->rows);
  }
}
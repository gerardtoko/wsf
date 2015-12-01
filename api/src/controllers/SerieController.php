<?php

// Classe Movie
class SerieController {

  public function index($req, $res){
    // Changement de tous les films à travers le modèle Movie relié à la base de données
    $series = new Serie();

    // Envoi des films vers la vue
    // Nom du template et données à transmettre
    echo "<pre>";
    print_r($series->rows);
    exit;
    $res->html("series.php", $series->rows);
  }
}
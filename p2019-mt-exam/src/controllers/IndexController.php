<?php
/**
 * Page d'accueil
 */
class IndexController {
  public function index($req, $res){
    // Modèle Film
    $film = new Film();
    $rows = $film->find();
    $res->html("index.php", array("films" => $rows));
  }
}
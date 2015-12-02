<?php
/**
 * Page d'accueil
 */
class IndexController {
  public function index($req, $res){
    $movie = new Movie();
    $rows = $movie->find();
    $res->html("index.php", array("movies" => $rows));
  }
}
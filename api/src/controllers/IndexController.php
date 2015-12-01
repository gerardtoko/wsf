<?php
/**
 * Page d'accueil
 */
class IndexController {
  public function index($req, $res){
    $movies = new Movie();

    $res->html("index.php", array());
  }
}
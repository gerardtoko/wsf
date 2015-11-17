<?php


class IndexController {

  public function index($req, $res){
    //http://localhost:8888?year=2000
    // Modèle
    $movies = new Movie();
    $movies2010 = array();

    foreach ($movies->rows as $key => $value) {
      if($value["Annee"] > $_GET["year"]) {
        array_push($movies2010, $value);
      }
    }

    $res->json($movies2010);
  }
}
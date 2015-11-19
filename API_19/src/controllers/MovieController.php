<?php


class MovieController {

  public function one($req, $res){
    $movies = new Movie();
    $id = ((int) $_GET["id"]); // Récupération de l'id
    $movie = $movies->rows[$id];

    $res->html("movie.php", $movie);
  }
}
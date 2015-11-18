<?php


class IndexController {

  public function index($req, $res){
    $movies = new Movie();
    $series = new Serie();
    $res->html("index.php", array(
        "movies" => $movies->rows, 
        "series" => $series->rows
      )
    );
  }
}
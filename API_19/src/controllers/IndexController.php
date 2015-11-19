<?php


class IndexController {

  public function index($req, $res){
    $movies = new Movie();
    $series = new Serie();

    $moviesPublics = array();

    foreach ($movies->rows as $key => $value) {
      
      if(isset($value["Private"])) {
        if($value["Private"] != true) {
          array_push($moviesPublics, $value);
        }
      } else {
        array_push($moviesPublics, $value);
      }
    }

    $res->html("index.php", array(
        "movies" => $moviesPublics, 
        "series" => $series->rows
      )
    );
  }
}
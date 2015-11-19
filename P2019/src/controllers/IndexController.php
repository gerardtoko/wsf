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

  public function sessionTest($req, $res) {
    session_start();
    if (!isset($_SESSION['count'])) {
      $_SESSION['count'] = 0;
    } else {
      $_SESSION['count']++;
    }

    echo $_SESSION['count'];
    exit;
  }
}
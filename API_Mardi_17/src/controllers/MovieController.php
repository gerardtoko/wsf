<?php


class MovieController {

  public function test($req, $res){

    $movies = new Movie();
    $res->json($movies->rows);
  }
}
<?php


class IndexController {

  public function index($req, $res){
    $movies = new Movie();
    $res->json($movies->rows);
  }
}
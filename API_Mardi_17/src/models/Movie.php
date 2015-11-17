<?php


class Movie extends Model {

  public $table_name = "movies";
  public $rows = array();



  public function index($req, $res){
    $res->json($req->query);
  }
}
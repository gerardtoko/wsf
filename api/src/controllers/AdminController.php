<?php

class AdminController extends BaseController {

  public function index($req, $res){
    //Test si l'utilisateur est logged
    $this->isLogged(array("redirect" => "/admin/login"));

    $movie = new Movie();
    $rows = $movie->find();

    $res->html("admin/index.php", array("movies" => $rows));
  }

}
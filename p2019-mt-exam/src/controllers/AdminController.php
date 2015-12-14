<?php

class AdminController extends BaseController {

  public function index($req, $res){
    //Test si l'utilisateur est logged
    $this->isLogged(array("redirect" => "/admin/login"));

    $film = new Film();
    $rows = $film->find();

    $res->html("admin/index.php", array("films" => $rows));
  }

}
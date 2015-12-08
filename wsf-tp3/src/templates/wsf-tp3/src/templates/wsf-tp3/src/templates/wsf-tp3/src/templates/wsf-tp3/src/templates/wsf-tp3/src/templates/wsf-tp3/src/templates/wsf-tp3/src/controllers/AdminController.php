<?php

class AdminController extends BaseController {

  public function index($req, $res){
    //Test si l'utilisateur est logged
    $this->isLogged(array("redirect" => "/admin/login"));

    $categorie = new Categorie();
    $rows = $categorie->find();

    $res->html("admin/index.php", array("categories" => $rows));
  }

}
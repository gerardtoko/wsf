<?php

class AdminCategorieController extends BaseController {

  public function getData() {
    return array(
      "nom" => $_POST["nom"],
      "description" => $_POST["description"],
      "activé" => $_POST["activé"]
    );
  }

  public function index($req, $res){
    //Test si l'utilisateur est logged
    $this->isLogged(array("redirect" => "/admin/login"));
    $categorie = new Categorie();
    $rows = $categorie->find();
    $res->html("admin/categories.php", array("categories" => $rows));
  }

  public function add($req, $res){
    //Test si l'utilisateur est logged
    $this->isLogged(array("redirect" => "/admin/login"));
    $categorie = new Categorie(); 
    
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $result = $categorie->insert($this->getData());
        $this->redirect("/admin/categories");
    } else {
        $res->html("admin/categorie.php", array());
    }
  }

  public function update($req, $res){
    $this->isLogged(array("redirect" => "/admin/login"));
    $categorie = new Categorie();
    
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $result = $categorie->update($_GET["id"], $this->getData());
        $this->redirect("/admin/categories");
    } else {
        $row = $categorie->findOne($_GET["id"]);
        $res->html("admin/categorie.php", $row);
    }
  }

  public function delete($req, $res){
    $this->isLogged(array("redirect" => "/admin/login"));
    $categorie = new Categorie();
    $categorie->delete($_GET["id"]);
    $this->redirect("/admin/categories");
  }
}
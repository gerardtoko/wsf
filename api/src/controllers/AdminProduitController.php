<?php

class AdminProduitController extends BaseController {

  public function getData() {
    return array(
      "nom" => $_POST["nom"],
      "description" => $_POST["description"],
      "prix" => $_POST["prix"],
      "taille" => $_POST["taille"],
      "type" => $_POST["type"],
      "photo_url" => $_POST["photo_url"],
      "activé" => $_POST["activé"]
    );
  }

  public function index($req, $res){
    //Test si l'utilisateur est logged
    $this->isLogged(array("redirect" => "/admin/login"));
    $categorie = new Produit();
    $rows = $categorie->find();
    $res->html("admin/produits.php", array("produits" => $rows));
  }

  public function add($req, $res){
    //Test si l'utilisateur est logged
    $this->isLogged(array("redirect" => "/admin/login"));
    $categorie = new Produit(); 
    
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $result = $categorie->insert($this->getData());
        $this->redirect("/admin/produits");
    } else {
        $res->html("admin/produit.php", array());
    }
  }

  public function update($req, $res){
    $this->isLogged(array("redirect" => "/admin/login"));
    $categorie = new Produit();
    
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $result = $categorie->update($_GET["id"], $this->getData());
        $this->redirect("/admin/produits");
    } else {
        $row = $categorie->findOne($_GET["id"]);
        $res->html("admin/produit.php", $row);
    }
  }

  public function delete($req, $res){
    $this->isLogged(array("redirect" => "/admin/login"));
    $categorie = new Produit();
    $categorie->delete($_GET["id"]);
    $this->redirect("/admin/produits");
  }
}
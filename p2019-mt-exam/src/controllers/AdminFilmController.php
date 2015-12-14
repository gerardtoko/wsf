<?php

class AdminFilmController extends BaseController {

  public function getData() {
    // Attention, il faut renseigner que les champs présents dans la base de données
    return array(
      "nom" => $_POST["nom"],
      "année" => $_POST["année"],
      "durée" => $_POST["durée"],
      "réalisateur" => $_POST["réalisateur"],
      "acteurs" => $_POST["acteurs"],
      "genres" => $_POST["genres"],
      "photo" => $_POST["photo"],
      "isActive" => $_POST["isActive"]
    );
  }

  public function index($req, $res){
    //Test si l'utilisateur est logged
    $this->isLogged(array("redirect" => "/admin/login"));
    $film = new Film();
    $rows = $film->find();
    $res->html("admin/films.php", array("films" => $rows));
  }

  public function add($req, $res){
    //Test si l'utilisateur est logged
    $this->isLogged(array("redirect" => "/admin/login"));
    $film = new Film(); 
    
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $result = $film->insert($this->getData());
        $this->redirect("/admin/films");
    } else {
        $res->html("admin/film.php", array());
    }
  }

  public function update($req, $res){
    $this->isLogged(array("redirect" => "/admin/login"));
    $film = new Film();
    
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $result = $film->update($_GET["id"], $this->getData());
        $this->redirect("/admin/films");
    } else {
        $row = $film->findOne($_GET["id"]);
        $res->html("admin/film.php", $row);
    }
  }

  public function delete($req, $res){
    $this->isLogged(array("redirect" => "/admin/login"));
    $film = new Film();
    $film->delete($_GET["id"]);
    $this->redirect("/admin/films");
  }
}
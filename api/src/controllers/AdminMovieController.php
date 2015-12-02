<?php

class AdminMovieController extends BaseController {

  public function getData() {
    return array(
      "nom" => $_POST["nom"],
      "année" => $_POST["année"],
      "durée" => $_POST["durée"],
      "réalisateur" => $_POST["réalisateur"],
      "acteurs" => $_POST["acteurs"],
      "genres" => $_POST["genres"],
      "photo" => $_POST["photo"]
    );
  }

  public function index($req, $res){
    //Test si l'utilisateur est logged
    $this->isLogged(array("redirect" => "/admin/login"));
    $movie = new Movie();
    $rows = $movie->find();
    $res->html("admin/movies.php", array("movies" => $rows));
  }

  public function add($req, $res){
    //Test si l'utilisateur est logged
    $this->isLogged(array("redirect" => "/admin/login"));
    $movie = new Movie();
    
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $result = $movie->insert($this->getData());
        $this->redirect("/admin/movies");
    } else {
        $res->html("admin/movie.php", array());
    }
  }

  public function update($req, $res){
    $this->isLogged(array("redirect" => "/admin/login"));
    $movie = new Movie();
    
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $result = $movie->update($_GET["id"], $this->getData());
        $this->redirect("/admin/movies");
    } else {
        $row = $movie->findOne($_GET["id"]);
        $res->html("admin/movie.php", $row);
    }
  }

  public function delete($req, $res){
    $this->isLogged(array("redirect" => "/admin/login"));
    $movie = new Movie();
    $movie->delete($_GET["id"]);
    $this->redirect("/admin/movies");
  }
}
<?php


class MembreController {

  public function index($req, $res){

      if(isset($_SESSION["Authentifié"]) && $_SESSION["Authentifié"] == true) {
        $movies = new Movie();
        $res->html("movies_membres.php", $movies->rows);
      } else {
         header('Location: /login');
      }

  }
}
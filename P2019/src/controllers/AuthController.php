<?php


class AuthController {

  public function login($req, $res){
    $res->html("login.php", array());
  }

  public function loginPost($req, $res){

    $membres = new Membre();
    $email = $membres->rows["email"];
    $password = $membres->rows["password"];

    if(($email == $_POST["email"]) && ($password == md5($_POST["password"]))){
      $_SESSION["Authentifié"] = true;
      header('Location: /membres');
    } else {
      $res->html("login.php", array());
    }

  }
}
<?php


class AuthController {

  public function login($req, $res){
    $res->html("login.php", array());
  }

  public function test($req, $res) {
      if(isset($_SESSION["test"])){
        $_SESSION["test"] += 1;
      } else {
        $_SESSION["test"] = 0;
      }

      $_SESSION["Authentifié"] = 0;
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

  public function logout($req, $res){
    $_SESSION["Authentifié"] = 0;
    header('Location: /');
  }
}
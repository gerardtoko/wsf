<?php

// Classe Movie
class AccountController {

  public function get($req, $res){
    $res->html("account.php", array());
  }

  public function post($req, $res){
    // Récuperation des valeures
    $email = $_POST["email"];
    $password = $_POST["password"];
    $twitter = $_POST["twitter"];
    $telephone_mobile = $_POST["telephone_mobile"];

    if (preg_match("#--#", $email)) {
      echo "Email validé";
    }

    if (preg_match("#--#", $password)) {
      echo "Mot de passe validé";
    }


    if (preg_match("#--#", $twitter)) {
      echo "Identifiant validé";
    }

    if (preg_match("#--#", $telephone_mobile)) {
      echo "Téléphone mobile validé";
    }

    $res->html("account.php", array());
  }

}
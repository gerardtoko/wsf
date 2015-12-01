<?php

class AdminController {

  public function index($req, $res){
      // Test si cette personne est authentifiée à travers la session
      // En cas d'échec on crée une redirection vers la page d'authentification
      if(isset($_SESSION["Authentifié"]) && $_SESSION["Authentifié"] == true) {
        // Changement des données et rendu à travers la vue
        // $movies = new Movie();
        // $res->html("admin.php", $movies->rows);
      } else {
         // Redirection HTTP vers membres/login
         header('Location: /admin/login');
      }
  }

  public function login($req, $res){
    // Page d'authentification
    $admin = new Admin();
    $rows = $admin->insert();
    var_dump($rows);
    exit;

    $res->html("login.php", array());
  }

  public function loginPost($req, $res){
    // Récuperation des données à travers de Modèle
    $membres = new Admin();

    // Récuperation des données issues de la base de données
    $email = $membres->rows["email"];
    $password = $membres->rows["password"];

    // Test si l'adresse et le mot de passe envoyer dans la variable $_POST conrespondent 
    // au informations issues de la base de données
    if(($email == $_POST["email"]) && ($password == md5($_POST["password"]))){

      // Test Ok, mise à jour de la session afin de se souvenir que cette personne est bien authentifier à travers la session
      $_SESSION["Authentifié"] = true;
      // Redirection de l'utlisateur vers l'espace membres
      header('Location: /admin');
    } else {
      // si les données ne conrespondent pas, nous renvoyions la page de login à travers la vue
      $res->html("login.php", array());
    }
  }

  public function logout($req, $res){
    $_SESSION["Authentifié"] = 0;
    header('Location: /');
  }
}
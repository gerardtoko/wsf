<?php
/**
 * Page d'accueil
 */
class IndexController {
  public function index($req, $res){

    $produit = new Produit();

    if(isset($_GET["type"])){
      $rows = $produit->findType($_GET["type"]);
    } else{
      $rows = $produit->findPublic();
    }

    $res->html("index.php", array("produits" => $rows));
  }
}
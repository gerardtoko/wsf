<?php
/**
 * Page d'accueil
 */
class IndexController {
  public function index($req, $res){
    $res->html("index.php", array("produits" => array()));
  }
}
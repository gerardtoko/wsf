<?php


class Model {

  // identifiant de connexion
  protected $mysql;

  public function __construct(){
    try {
      //Connection MySQL
      // $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
      $this->db = new PDO('mysql:host='.MYSQL_HOST.':'. MYSQL_PORT . ';dbname='.MYSQL_DATABASE.';charset=utf8', MYSQL_USER, MYSQL_PASSWORD);
    } catch (Exception $e) {
      die('Erreur : ' . $e->getMessage());
    }
  }

}
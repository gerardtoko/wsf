<?php


class Admin extends Model {
  // Nom de la table correspondant dans la base de données database.php
  public $table_name = "admins";

  public function find(){
    // $req = $bdd->prepare('SELECT nom, prix FROM jeux_video WHERE possesseur = :possesseur AND prix <= :prixmax');
    // $req->execute(array(':possesseur' => $_GET['possesseur'], ':prixmax' => $_GET['prix_max']));

    // On récupère touts les contenus dans la table
    $sql  = "SELECT * FROM " . $this->table_name;
    $sth = $this->db->prepare($sql);
    $sth->execute();

    return $sth->fetch();
  }

  public function insert(){
    // $conn = new PDO('sqlite:/home/lynn/music.sql3');

    // /* Chaîne dangereuse */
    // $string = 'Chaîne \' particulière';
    // print "Chaîne non échappée : $string\n";
    // print "Chaîne échappée :" . $conn->quote($string) . "\n";


    $sql = "INSERT INTO `wsf`.`admins` (`email`, `password`) VALUES ('tezr', 'reeee')";
    $sth = $this->db->prepare($sql);
    $sth->execute();
    return $sth->rowCount();
  }

}
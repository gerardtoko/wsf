<?php


class Movie extends Model {
  // Nom de la table correspondant dans la base de données database.php
  public $table_name = "movies";
  

  public function getRowsByYear($annee) {
    $query = $this->dbConnection->from($this->table_name)->where("année > ?", $annee);
    return $query->fetchAll();
  }

}
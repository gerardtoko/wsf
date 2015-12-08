<?php


class Article extends Model {
  // Nom de la table correspondant dans la base de données database.php
  public $table_name = "articles";
  

  public function getAllFilm($annee){
    $query = $this->dbConnection->from($this->table_name)->where("id", ">=", $annee);
    return $query->fetch();
  }

}
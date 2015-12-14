<?php


class Produit extends Model {
  // Nom de la table correspondant dans la base de données database.php
  public $table_name = "produits";

  public function findType($type){
    return $this->dbConnection->from($this->table_name)->where("type = :type AND activé = :active", array(":type" => $type, ":active" => "1"))->fetchAll();
  }

  public function findPublic(){        
    $query = $this->dbConnection->from($this->table_name)->where("activé", "1");
    return $query->fetchAll();
  }
  
}
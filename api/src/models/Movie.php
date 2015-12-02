<?php


class Movie extends Model {
  // Nom de la table correspondant dans la base de données database.php
  public $table_name = "movies";

  public function find(){        
    return $this->dbConnection->from($this->table_name)->fetchAll();
  }

  public function findOne($id){        
    $query = $this->dbConnection->from($this->table_name)->where("id", $id);
    return $query->fetch();
  }
  
  public function insert($values){
    return $this->dbConnection
      ->insertInto($this->table_name)
      ->values($values)->execute();
  }

  public function update($id, $set) {
    $query = $this->dbConnection
      ->update($this->table_name)
      ->set($set)
      ->where('id', $id);
    return $query->execute();
  }

  public function delete($id) {
    $query = $this->dbConnection
      ->delete($this->table_name)
      ->where('id', $id);
    return $query->execute();
  }
}
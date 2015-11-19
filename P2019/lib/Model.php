<?php


class Model {

  public function __construct(){
    include "./../database.php";
    if($database[$this->table_name]){
      $this->rows = $database[$this->table_name];
    }else{
      $this->rows = array();
    }
  }

}
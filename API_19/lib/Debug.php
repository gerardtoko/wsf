<?php

class Debug {

  public function __construct($data){
    echo "<pre>";
    print_r($data);
    exit;
  }
}

<?php

class Response {

  public function json($data){
    $json = json_encode($data);
    header('Content-Type: application/json');
    echo $json;
    exit;
  }
}
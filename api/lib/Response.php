<?php

class Response {

  public function json($data){
    $json = json_encode($data);
    header('Content-Type: application/json');
    echo $json;
    exit;
  }

  public function html($template_name, $data){
    include APPLICATION_PATH . "/src/templates/" . $template_name;
  }
}
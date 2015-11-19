<?php


class AuthController {

  public function login($req, $res){
    $res->html("login.php", array());
  }

  public function loginPost($req, $res){
    $res->html("login.php", array());
  }
}
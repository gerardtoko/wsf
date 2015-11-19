<?php


class GameController {

  public function index($req, $res){
    $games = new Game();
    $res->html("games.php", $games->rows);
  }

  public function one($req, $res){
    $games = new Game();
    $id = $_GET["id"];
    $game = $games->rows[$id];

    $res->html("game.php", $game);
  }
}
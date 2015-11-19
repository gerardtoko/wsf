<?php

class Router {
  public $routes = array();

  public function addRoute($route){
    array_push($this->routes, $route);
  }

  public function run(){
    foreach ($this->routes as $key => $route) {

      // Construction du chemin
      $path = "/";
      if(isset($_SERVER["PATH_INFO"])){
        $path = $_SERVER["PATH_INFO"];
      }

      // Match de la route
      if(preg_match("#". $route["route"] ."#", $path)){

        // Type de requête
        $request_method = $_SERVER["REQUEST_METHOD"];
        $route_method = array_keys($route)[1];

        // Si la methode de la requête est la même, on déclenche le controller et la methode
        if($request_method == $route_method){
          $controlle_class = $route[$route_method][0];
          $method_class = $route[$route_method][1];

          $controller = new $controlle_class;

          // Creation de request et response
          $req = new Request();
          $res = new Response();
          $req->addParams();
          $controller->$method_class($req, $res);
        }
      }

    }
  }
}
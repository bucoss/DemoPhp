<?php

$routes = require "routes.php";

$uri = parse_url($_SERVER["REQUEST_URI"])['path'];

function routeToController($uri, $routes){
  if(array_key_exists($uri, $routes)){
    require $routes[$uri];
  }
  else{
    abort();
  }
}

function abort($statusCode = 404){
  http_response_code($statusCode);
  require "views/{$statusCode}.php";
}

routeToController($uri, $routes);
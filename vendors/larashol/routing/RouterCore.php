<?php

namespace vendors\larashol\routing;
class RouterCore {

    public $routes = [];


   public function get($uri, $params)
   {
     $this->routes[] =[
        'uri' => $uri,
        'method' => 'GET',
        'controller' => $params[0],
        'method' => $params[1],
     ];
   }

   public function post($uri, $params)
   {
     $this->routes[] =[
        'uri' => $uri,
        'method' => 'POST',
        'controller' => $params[0],
        'method' => $params[1],
     ];
   }

   public function resolve(){

       dd($this);

   }

}
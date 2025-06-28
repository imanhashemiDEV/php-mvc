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
        'function' => $params[1],
     ];
   }

   public function post($uri, $params)
   {
     $this->routes[] =[
        'uri' => $uri,
        'method' => 'POST',
        'controller' => $params[0],
        'function' => $params[1],
     ];
   }

   public function resolve($url,$method){

      $id=null;
      $uri = explode('/',$url);
      if( (int) $uri[count($uri)-1]){
          global $id;
          $id = $uri[count($uri)-1];
          array_pop($uri);
      }
      $new_uri = implode('/',$uri);

      // /posts or /post

      foreach ($this->routes as $route){
          $web_uri = explode('/', $route['uri']);
          if(preg_match('/{/',$web_uri[count($web_uri)-1])){
            array_pop($web_uri);
          }
          $new_web_uri = implode('/',$web_uri); 
          
          if($new_uri=== $new_web_uri && $method===$route['method']){
               $class = new $route['controller'];

               call_user_func(array($class,$route['function']),$id);
          }
      }

   }

}
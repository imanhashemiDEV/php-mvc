<?php

const BASE_URL = "http://localhost/php-mvc/";
const PUBLIC_URL = BASE_URL . "public/";
const VIEW_URL = BASE_URL ."resources/views/";


function dd($var){
   echo '<pre>';
     var_dump($var);
   echo '</pre>';
   die();
}


function asset ($file){
   return PUBLIC_URL . $file;
}

function url($url){
   return BASE_URL . $url;
}

function base_path ($path){
    return BASE_PATH . $path;
}

function redirect($url){
     header("Location:". $url);
     exit();
}

function check_url(){
    $url = $_SERVER['REQUEST_URI'];
   return substr($url, strlen('/php-mvc'));
}

function view($path ,$data=[]){
   extract($data);
   require_once(base_path('resources/views/'. $path));
}

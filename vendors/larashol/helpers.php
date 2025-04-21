<?php

const BASE_URL = "http://localhost:8080/php-mvc/";
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

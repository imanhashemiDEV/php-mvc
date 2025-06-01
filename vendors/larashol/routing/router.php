<?php

use vendors\larashol\routing\RouterCore;

$url = check_url();
$router  =new RouterCore();
$method = isset($_POST['_method']) ? $_POST['_method'] : $_SERVER['REQUEST_METHOD'];
require ('routes/web.php');


$router->resolve($url,$method);
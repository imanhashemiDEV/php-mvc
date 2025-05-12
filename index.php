<?php

const BASE_PATH = __DIR__ . '/';

spl_autoload_register(function($class){
   require_once base_path(str_replace('\\','/',$class.'.php'));
});

require('vendors/larashol/helpers.php');
require('vendors/larashol/routing/router.php');
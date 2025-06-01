<?php

namespace app\controllers;

class PostController{

    public function index()
    {
        echo "This is the index method of PostController";
    }

    public function post($id)
    {
        echo "This is the post method of PostController with ID: " . htmlspecialchars($id);
    }

}
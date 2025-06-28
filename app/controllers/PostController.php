<?php

namespace app\controllers;

use app\models\Post;

class PostController{

    public function index()
    {
        echo "This is the index method of PostController";
    }

    public function post($id)
    {
        $data = new Post();
        $post = $data->post($id);
        //echo "This is the post method of PostController with ID: " . htmlspecialchars($id);
         view('admin/posts/post.php',['post'=>$post]);
    }

}
<?php
class Contact extends Controller{
    function contact()
    {
        // call model
        // $content = $this->model("PostsModel");
        // $posts = $content->getPosts();
        // print_r($posts);
        // call view
        $this->view("Master", [
            "Page" => "contact",
            // "Baiviet" => $posts

        ]);
    }
}
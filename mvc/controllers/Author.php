
<?php
class Author extends Controller
{
    function Login()
    {
        // call model
        // $content = $this->model("PostsModel");
        // $posts = $content->getPosts();
        // print_r($posts);
        // call view
        $this->view("Master", [
            "Page" => "login",
            // "Baiviet" => $posts

        ]);
    }
    function Register()
    {
        // call model
        // $content = $this->model("PostsModel");
        // $posts = $content->getPosts();
        // print_r($posts);
        // call view
        $this->view("Master", [
            "Page" => "register",
            // "Baiviet" => $posts

        ]);
    }

    function changepw()
    {
        // call model
        // $content = $this->model("PostsModel");
        // $posts = $content->getPosts();
        // print_r($posts);
        // call view
        $this->view("Master", [
            "Page" => "changepw",
            // "Baiviet" => $posts

        ]);
    }
    

    
}

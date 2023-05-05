<?php

// http://localhost/live/Home/Show/1/2

class Home extends Controller
{

    function index()
    {
        // call model
        $content = $this->model("PostsModel");
        $posts = $content->getPosts();
        // call view
        $this->view("Master", [
            "Page" => "homeLayout",
            "Baiviet" => $posts
        ]);
    }
    function about()
    {
        // call model
        // $content=$this->model("PostsModel");
        // $posts = $content -> getPosts();
        // print_r($posts);
        // call view1
        $this->view("Master", [
            "Page" => "about",
            // "Baiviet"=>$posts

        ]);
    }

    function allPosts()
    {
        // call model
        $content = $this->model("PostsModel");
        $posts = $content->getPosts();
        // print_r($posts);
        // call view
        $this->view("Master", [
            "Page" => "allpost",
            "Baiviet" => $posts

        ]);
    }
    function addPost()
    {
        $this->model("PostsModel");
        if (isset($_POST['addposts'])) {
            $title = $_POST['title'];
            $posts = $_POST['posts'];
            $blog = new PostsModel();
            if (!empty($_POST['title'] && !empty($_POST['posts']))) {
                $blog->addPosts($title, $posts);
                header("Location: http://mvctestblog.local/home");
                die;
            } else {
                $_SESSION['messenger'] = 'vui lòng kiểm tra tiêu đề và bài viết';
                $this->view("Master", ["Page" => "addpost"]);
                die;
            }
        }
        $this->view("Master", ["Page" => "addpost"]);
    }
    function updatePost()
    {
        $content = $this->model("PostsModel");
        $posts = $content->getPosts();
        if (isset($_POST['updateposts'])) {
            $title = $_POST['title'];
            $posts = $_POST['posts'];
            $blog = new PostsModel();
            if (!empty($_POST['title'] && !empty($_POST['posts']))) {
                $blog->updatePosts($title, $posts);
                header("Location: http://mvctestblog.local/home");
                die;
            } else {
                $_SESSION['messenger'] = 'vui lòng kiểm tra tiêu đề và bài viết';
                $this->view("Master", [
                    "Page" => "updatepost",
                    "Baiviet" => $posts
                ]);
            }
            // header("Location: http://localhost/learn/learning/test_blog/updateblog.php");

        }
        $this->view("Master", [
            "Page" => "updatepost",
            "Baiviet" => $posts
        ]);
    }

    function deletePost()
    {
        // call model
        $content = $this->model("PostsModel");
        $posts = $content->getPosts();
        if (isset($_POST['delposts'])) {
            $title = $_POST['title'];
            $blog = new PostsModel();
            if (!empty($_POST['title'])) {
                $blog->delPost($title);
            } else {
                $_SESSION['messenger'] = 'vui lòng kiểm tra tiêu đề bài viết';
            }
            $this->view("Master", [
                "Page" => "deletepost",
                "Baiviet" => $posts
            ]);
        }
        // print_r($posts);
        // call view
        $this->view("Master", [
            "Page" => "deletepost",
            "Baiviet" => $posts
        ]);
    }
    function dividualpost()
    {
        // call model
        $id=substr($_GET['url'], -2);
        $content = $this->model("PostsModel");
        $post = $content -> getPostById($id);
        // call view
        $this->view("Master", [
            "Page" => "dividualpost",
            "Baiviet" => $post
        ]);
    }
}

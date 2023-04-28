<?php

// http://localhost/live/Home/Show/1/2

class Home extends Controller{

    function index(){
        // call model
        $content=$this->model("PostsModel");
        $posts = $content -> getPosts();
        // print_r($posts);
        // call view
        $this ->view("Master",[
            "Page"=>"homeLayout",
            "Baiviet"=>$posts

        ]);

    }

    // function Show($a, $b){        
    //     // Call Models
    //     $teo = $this->model("SinhVienModel");
    //     $tong = $teo->Tong($a, $b); // 3
    //     // echo 'aihihi';

    //     // Call Views
    //     $this->view("aodep", [
    //         "Page"=>"contact",
    //         "Number"=>$tong,
    //         "Mau"=>"red",
    //         "SoThich"=>["A", "B", "C"],
    //         // "SV" => $teo->SinhVien()
    //     ]);
    // }
    function Showposts(){
        // call model
        $content=$this->model("PostsModel");
        $posts = $content -> getPosts();
        // print_r($posts);
        // call view
        $this ->view("Master",[
            "Page"=>"showpost",
            "Baiviet"=>$posts

        ]);
    }
    function Addpost(){
        // call model
        $content=$this->model("PostsModel");
        $posts = $content -> getPosts();
        // print_r($posts);
        // call view
        $this ->view("Master",[
            "Page"=>"addpost",
            "Baiviet"=>$posts

        ]);    
    }
    function Updatepost(){
        // call model
        $content=$this->model("PostsModel");
        $posts = $content -> getPosts();
        // print_r($posts);
        // call view
        $this ->view("Master",[
            "Page"=>"updatepost",
            "Baiviet"=>$posts

        ]);    
    }

    function Deletepost(){
        // call model
        $content=$this->model("PostsModel");
        $posts = $content -> getPosts();
        // print_r($posts);
        // call view
        $this ->view("Master",[
            "Page"=>"deletepost",
            "Baiviet"=>$posts

        ]);    
    }

}
?>
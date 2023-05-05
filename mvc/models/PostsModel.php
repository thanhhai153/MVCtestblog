<?php

// namespace Test\Blog;

// require_once "/xampp/htdocs/learn/learning/test_blog/vendor/autoload.php";

class PostsModel
{
    public $tỉtle;
    public $posts;
    protected $id;
    private $connection;


    public function __construct()
    {
        $this->connection = new Database();
    }

    public function addPosts($title, $posts)
    {
        $sql = "insert into blog (title,posts) values ('$title','$posts')";
        if ($this->connection->connect()->query($sql)) {
            $_SESSION['messenger'] = 'thêm thành công bài viết: ' . $title;
            $this->connection->close();
            return;
        }
        $_SESSION['messenger'] = 'có lỗi add';
    }
    public function updatePosts($title, $posts)
    {
        $sql = "update blog set title = '$title', posts ='$posts' where title = '$title'";
        $result = $this->connection->connect()->query($sql);
        if ($result) {
            $_SESSION['messenger'] = 'update thành công:' . $title;
            $this->connection->close();
            return;
        }
        $_SESSION['messenger'] = 'update thất bại';
    }
    public function delPost($title)
    {
        $sql = "delete from blog where title = '$title'";
        $result = $this->connection->connect()->query($sql);
        if ($result) {
            $_SESSION['messenger'] = 'xóa thành công:'.$title;
            $this->connection->close();
            return;
        }
        $_SESSION['messenger'] = 'vui lòng kiểm tra lại';
    }
    public function getPosts()
    {
        $sql = "select * from blog";
        $result = $this->connection->connect()->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function getPostById($id)
    {
        $sql = "select * from blog where id = $id";
        $result = $this->connection->connect()->query($sql);
        // echo($sql);
        return $result->fetch_assoc();
    }
}

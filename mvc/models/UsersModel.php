<?php
// namespace Test\Blo
// require_once '../vendor/autoload.php';



// $connection()=$this->connection;

class UsersModel extends Database
{
    public $username;
    protected $id;
    private $password;
    protected $connection;


    public function __construct()
    {
        $this->connection = new Database();
    }

    // login
    public function login($username, $password)
    {
        $sql = "select * from user where username = '$username' and password = '$password'";
        $result = $this->connection->connect()->query($sql);
        if ($result->num_rows > 0) {
            $_SESSION['username'] = $username;
            $_SESSION['messenger'] = 'Xin chào '.$username ;
            $this->connection->close(); 
            return true;
        }
        $this->connection->close();
        return false;
    }
    public function adduser($newusername, $newpassword1)
    {
        $sql = "insert into user (username, password) values ('$newusername','$newpassword1')";
        if ($this->connection->connect()->query($sql)) {
           $_SESSION['messenger'] = "Tạo tài khoản: $newusername thành công";
            header("Location: http://localhost/learn/learning/test_blog/author.php");
            $this->connection->close();
            return;
        }
    }
    public function changepw($username, $newpassword1)
    {
        $sql = "update user set password ='$newpassword1' where username ='$username'";
        if ($this->connection->connect()->query($sql)) {
           $_SESSION['messenger'] = "Đổi password thành công";
            $this->connection->close();
            return true;
        }
        return false;
    }

    public function getUserByUserName($username, $password)
    {
        $sql = "select * from user where username = '$username' and password = '$password'";
        $result = $this->connection->connect()->query($sql);
        if ($result->num_rows > 0) {
            return true;
        }
        return false;
    }
    function getEistUser($newusername)
    {
        $sql = "select * from user where username= '$newusername'";
        $result = $this->connection->connect()->query($sql);
        if ($result->num_rows > 0) {
            return true;
        }
        return false;
    }
}

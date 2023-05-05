
<?php
class Author extends Controller
{
    // login
    function login()
    {
        $this->model("UsersModel");
        if (isset($_POST['login'])) {
            if (isset($_POST['username']) && empty($_POST['password'])) {
                $_SESSION['messenger'] = 'Chưa nhập mật khẩu';
                $this->view("Master", ["Page" => "login"]);
                die;
            }
            if (isset($_POST['username']) && isset($_POST['password'])) {
                $username = $_POST['username'];
                $password = md5($_POST['password']);
                $user = new UsersModel();
                $result = $user->login($username, $password);
                if (!$result) {
                    $_SESSION['messenger'] = 'Tài khoản hoặc mật khẩu không đúng';
                    $this->view("Master", ["Page" => "login"]);
                    die;
                } else {
                    header("Location: http://mvctestblog.local");
                    die;
                }
            }
        }
        $this->view("Master", ["Page" => "login"]);
    }
    function register()
    {
        $this->model("UsersModel");
        if (isset($_POST['register'])) {
            $newusername = $_POST['newusername'];
            $newpassword1 = md5($_POST['newpassword1']);
            $newpassword2 = md5($_POST['newpassword2']);
            $user = new UsersModel();
            $checkExistUser = $user->getEistUser($newusername);
            if ($checkExistUser) {
                $_SESSION['messenger'] = 'tên đăng nhập đã tồn tại';
                $this->view("Master", ["Page" => "register"]);
                die;
            } else {
                if (empty($newpassword1) || empty($newpassword2)) {
                    $_SESSION['messenger'] = 'Chưa nhập mật khẩu';
                    $this->view("Master", ["Page" => "register"]);
                    die;
                }
                if ($newpassword1 !== $newpassword2) {
                    $_SESSION['messenger'] = 'Mật khẩu không trùng nhau';
                    $this->view("Master", ["Page" => "register"]);
                    die;
                } else {
                    $user->adduser($newusername, $newpassword1);
                    header("Location: http://mvctestblog.local");
                    die;
                }
            }
        }
        $this->view("Master", ["Page" => "register"]);
    }


    // change password
    function changePassword()
    {
        $this->model("UsersModel");
        if (isset($_POST['changepw'])) {
            $username = $_SESSION['username'];
            $password = md5($_POST['password']);
            $newpassword1 = md5($_POST['newpassword1']);
            $newpassword2 = md5($_POST['newpassword2']);
            $user = new UsersModel();
            $checkuser = $user->getUserByUserName($username, $password);
            if ($checkuser) {
                if ($newpassword1 == $newpassword2) {
                    $user->changepw($username, $newpassword1);
                    header("Location: http://mvctestblog.local");
                    die;
                } else {
                    $_SESSION['messenger'] = 'password mới không trùng nhau';
                    $this->view("Master", ["Page" => "changepw"]);
                    die;
                }
            } else {
                $_SESSION['messenger'] = 'Nhập sai password hiện tại';
                $this->view("Master", ["Page" => "changepw"]);
                die;
            }
        }
        $this->view("Master", ["Page" => "changepw"]);
    }
    function logOut()
    {
        if (isset($_POST['logout'])) {
            unset($_SESSION['username']);
            $_SESSION['messenger'] = "Have a nice day";
            header("Location: http://mvctestblog.local");
        }
    }
}

?>

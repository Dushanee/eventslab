<?php
session_start();

if (isset($_SESSION['email'])) {
    header('Location: ' . BASEURL . '/welcome');
}

class login extends Controller
{
    public function index()
    {
        $this->view('login/admin');
    }

    public function admin()
    {
        $this->view('login/admin');
    }

   

    public function adminLogin()
    {
        if (isset($_POST['email'])) {

            $email = $_POST['email'];
            $password = $_POST['password'];

            $this->login($email, $password, 'users');
        } else {
            header("Location: " . BASEURL."/login/admin" );
        }
    }

 

    public function login($email = null, $password = null, $user_type = null,$fname = null)
    {
        if ($email != null) {
            $path = BASEURL;
            //echo $email;

            $result = $this->model('loginModel')->login($email, $password, $user_type ,$fname);

            if ($result != null) {
                session_destroy();

                session_start();

                

                $row = $result->fetch_assoc();
                echo $row['email'];
                echo $row['user_type'];
                $_SESSION['email'] = $row['email'];
                echo "success";
                
                header("location: $path/welcome/".$row['user_type']);

            } else {
                echo "<br>Error<br><br><br> ";
                header("location: $path/login/admin");
            }

        } else {

            // echo "Invalid user";
            $this->view('login/admin');
        }
    }


}
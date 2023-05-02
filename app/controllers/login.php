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
            header("Location: " . BASEURL . "/login/admin");
        }
    }

    public function reset()
    {
        $this->view('login/passwordreset');
    }

    // public function checkemail()
    // {
    //     if (isset($_POST['email'])) {
    //         $_SESSION['email'] = $_POST['email'];
    //         $result = $this->model('loginModel')->checkemail($_SESSION['email'] );

    //         if ($result->num_rows > 0) {
    //             $code = rand(999999,111111);
    //             $this->model('updateModel')->updateCode($code,$_SESSION['email'] );

    //             $this->view('login/otp');

    //         }

    //         else{
    //             $error=1;
    //             $data = [
    //                 'inputValue' => "",
    //                 'error' => $error,
                    
    //             ];
        
    //             $this->view('login/passwordreset',$data);

    //         }
    //     } 
    
    // }


        public function checkemail()
    {
        if (isset($_POST['email'])) {
            $_SESSION['email'] = $_POST['email'];
            $result = $this->model('loginModel')->checkemail($_SESSION['email'] );

            if ($result->num_rows > 0) {
               

                $this->view('login/otp');

            }

            else{
                $error=1;
                $data = [
                    'inputValue' => "",
                    'error' => $error,
                    
                ];
        
                $this->view('login/passwordreset',$data);

            }
        } 
    
    }

    
    public function checkotp()
    { if (isset($_POST['code'])) {
        $code = $_POST['code'];
        $email = $_SESSION['email'] ;
        $result = $this->model('loginModel')->checkotp($code, $email);

        if ($result->num_rows > 0) {
            
            
            $this->model('updateModel')->updateCode(0 , $email);
            $this->view('login/newpassword');

        }

        else{
            $error=1;
            $data = [
                'inputValue' => "",
                'error' => $error,
                
            ];
    
            $this->view('login/otp',$data);

        }
    } 
    // else {
    //     header("Location: " . BASEURL . "/login/admin");
    // }
    // $this->view('login/otp');
}
        
    


    public function login($email = null, $password = null, $user_type = null, $fname = null)
    {
        if ($email != null) {
            $path = BASEURL;
            //echo $email;

            $result = $this->model('loginModel')->login($email, $password, $user_type, $fname);


            if ($result->num_rows > 0) {
                session_destroy();

                session_start();


                $row = $result->fetch_assoc();
                echo $row['email'];
                echo $row['user_type'];
                $_SESSION['email'] = $row['email'];
                echo "success";

                header("location:$path/welcome/" . $row['user_type']);
            } else {
                $data['count'] = 1;
                $this->view('login/admin', $data);
            }
        } else {

            // echo "Invalid user";
            // $this->view('login/admin');
        }
    }
}

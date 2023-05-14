<?php
session_start();


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
            $result = $this->model('loginModel')->checkemail($_SESSION['email']);

            if ($result->num_rows > 0) {
                $name = 'User';
                $email_address = $_SESSION['email'];
                $_SESSION['otp'] = rand(1000, 9999);

                $otp =   $_SESSION['otp'];


                $this->model('mailModel')->sendOTP($name, $email_address, $otp);

                $this->view('login/otp');
            } else {
                $error = 1;
                $data = [
                    'inputValue' => "",
                    'error' => $error,

                ];

                $this->view('login/passwordreset', $data);
            }
        }
    }


    public function checkOtp()
    {

        if ($_SESSION['otp'] == $_POST['code']) {

            $error = 0;
            $data = [
                'inputValue' => "",
                'error' => $error,

            ];

            $this->view('login/newpassword',$data);
            
        } else {
            $error = 1;
            $data = [
                'inputValue' => "",
                'error' => $error,

            ];
            $this->view('login/otp', $data);
        }
    }

    public function newpassword()
    {
        if (strlen($_POST['password'])  < 8) {
            // echo "Password should be at least 8 characters long.";
       
            $error = 2;
            $data = [
                'inputValue' => "",
                'error' => $error,

            ];
            $this->view('login/newpassword', $data);
        }
    

        // Check if the password contains a mix of uppercase and lowercase letters, numbers, and special characters
       else if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/", $_POST['password'] )) {
            // echo "Password should contain a mix of uppercase and lowercase letters, numbers, and special characters.";
        
            $error = 3;
            $data = [
                'inputValue' => "",
                'error' => $error,

            ];
            $this->view('login/newpassword', $data);
        }
    

        else if ($_POST['password'] == $_POST['confirm_password']) {

            $password = $_POST['password'];
            $email = $_SESSION['email'];
            $error = 0;
            $data = [
                'inputValue' => "",
                'error' => $error,

            ];

            $this->model('updateModel')->updatePassword($password, $email);
            $this->view('login/admin',$data);
        } 
        else {
            $error = 1;
            $data = [
                'inputValue' => "",
                'error' => $error,

            ];
            $this->view('login/newpassword', $data);
        }
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
                $userType= $row['user_type'];
                $_SESSION['email'] = $row['email'];
                echo "success";
                

                header("Location: " . BASEURL . "/welcome/" . urlencode(trim($userType)));



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

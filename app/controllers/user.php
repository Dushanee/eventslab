<?php

class user extends Controller
{
    public function index()
    {
        $this->view('admin/dashboard');
    }
    public function addCustomer()


    {
        if (isset($_POST['cust_email'])) {

            $result = $this->model('loginModel')->checkemail($_POST['cust_email']);

            if ($result->num_rows > 0) {


                header("Location: " . BASEURL . "/adminFunction/customer/fail");

            
            
        } else {

            $cust_email = $_POST['cust_email'];
            $cust_fname = $_POST['cust_fname'];
            $cust_lname = $_POST['cust_lname'];
            $cust_password = $_POST['cust_password'];
            $phone_number = $_POST['phone_number'];


            $this->model('insertModel')->insertCustomer( $cust_email, $cust_fname, $cust_lname, $cust_password,$phone_number);

            
   
            header("Location: " . BASEURL . "/adminFunction/customer/success");


            
        }
    }
}
    public function  addServiceProvider()
    {
        if (isset($_POST['sp_id'])) {

            $sp_id = $_POST['sp_id'];
            $sp_email = $_POST['sp_email'];
            $sp_name = $_POST['sp_name'];
            $sp_password = $_POST['sp_password'];


            $this->model('insertModel')->insertServiceProvider($sp_id, $sp_email, $sp_name, $sp_password);
            header("Location: " . BASEURL . "/adminFunction/service");
        } else {
            header("Location: " . BASEURL . "/adminFunction/index");
        }
    }

    // public function newAdmin()
    // {
    //     $this->view('login/register');
    // }

    // public function regAdmin()


    // {
    //      if (isset($_POST['username'])) {


    //              $name = $_POST['name'];
    //             $cust_email = $_POST['cust_email'];
    //             $username = $_POST['username'];
    //             $cust_password = $_POST['cust_password'];

    //             $this->model('insertModel')->insertAdmin($name, $cust_email, $username, $cust_password);
    //             header("Location: " . BASEURL."/adminFunction/welcome");
    //             echo "username";

    //         } else {
    //             header("Location: " . BASEURL."/adminFunction/welcome");
    //         }
    //     }
    public function viewCustomer($cust_id)
    {
        $result = $this->model('viewModel')->viewCustomer($cust_id);
        $data = [
            'inputValue' => "",
            'result' => $result,
        ];
        $this->view('admin/customer_view', $data);
    }

    public function deleteCustomer($cust_id)
    {
        if (isset($cust_id)) {
            $this->model('deleteModel')->deleteCustomer($cust_id);
            header("Location: " . BASEURL . "/adminFunction/customer");
        }
    }


    public function viewSp($sp_id)
    {
        $result = $this->model('viewModel')->viewSp($sp_id);
        $data = [
            'inputValue' => "",
            'result' => $result,
        ];
        $this->view('admin/sp_view', $data);
    }

    public function editSp()
    {
        if (isset($_POST['sp_id'])) {

            $sp_id = $_POST['sp_id'];
            $sp_name = $_POST['sp_name'];
            $sp_email = $_POST['sp_email'];
            $status = $_POST['status'];

            $this->model('updateModel')->editSp($sp_id, $sp_name, $sp_email, $status);

            header("Location: " . BASEURL . "/user/verify");
        } else {
            header("Location: " . BASEURL . "/user/viewService");
        }
    }

    public function editCustomer()
    {
        if (isset($_POST['cust_id'])) {

            $cust_id = $_POST['cust_id'];
            $cust_fname = $_POST['cust_fname'];
            $cust_lname = $_POST['cust_lname'];
            $cust_email = $_POST['cust_email'];

            $this->model('updateModel')->updateCustomer($cust_id, $cust_fname, $cust_lname, $cust_email);


            header("Location: " . BASEURL . "/adminFunction/customer");
        } else {
            header("Location: " . BASEURL . "/adminFunction/service");
        }
    }


    public function searchCustomer()
    {
        // Get the query string from the search form
        $query = $_GET['query'];

        // Call the search model to perform the search
        $results = $this->model('searchModel')->search($query);

        $result = $this->model('viewModel')->viewCustomer();
        $drop = $this->model('viewModel')->getTotalCustomers();

        $data = [
            'inputValue' => "",
            'result' => $result,
            'results' => $results,
            'drop' => $drop,
        ];
        // var_dump($data);
        $this->view('admin/customer', $data);
    }

    public function viewUsers($id)
    {
        $result = $this->model('viewModel')->getUsers($id);
        $data = [
            'inputValue' => "",
            'result' => $result,
        ];
        $this->view('/superAdmin/viewUsers', $data);
    }

    public function deleteUser($id)
    {
        if (isset($id)) {
            $this->model('deleteModel')->deleteUser($id);
            header("Location: " . BASEURL . "/superadmin/manageUsers");
        }
    }


    public function editUser()
    {
        if (isset($_POST['id'])) {

            $id = $_POST['id'];
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $user_type = $_POST['user_type'];
            $status = $_POST['status'];

            $this->model('updateModel')->updateUser($id, $fname, $lname, $email, $user_type, $status);


            header("Location: " . BASEURL . "/superAdmin/manageUsers");
        } else {
            header("Location: " . BASEURL . "/user/viewUsers");
        }
    }
    public function addUser()


    {
        if (isset($_POST['id'])) {

            $id = $_POST['id'];
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $user_type = $_POST['user_type'];
            $status = $_POST['status'];

            $this->model('insertModel')->insertUser($id, $fname, $lname, $email, $user_type, $status);
            header("Location: " . BASEURL . "/superAdmin/manageUsers");
        } else {
            header("Location: " . BASEURL . "/superAdmin/manageUsers");
        }
    }


    public function verify()
    {
        $result = $this->model('viewModel')->viewService();

        $data = [
            'inputValue' => "",
            'result' => $result,
        ];


        $this->view('admin/verify', $data);
    }





    public function sendmail($cust_email)
    {
        if (isset($cust_email)) {
            // $_SESSION['email'] = $_POST['email'];
            // $result = $this->model('loginModel')->checkemail($_SESSION['email']);

            // if ($result->num_rows > 0) {
            //     $name = 'User';
            //     $email_address = $_SESSION['email'];
            //     $_SESSION['otp'] = rand(1000, 9999);

            //     $otp =   $_SESSION['otp'];


            $this->model('mailModel')->sendmail($cust_email);

            $this->view('admin/customer_view');
        } else {
            $error = 1;
            $data = [
                'inputValue' => "",
                'error' => $error,

            ];

            $this->view('admin/dashboard', $data);
        }
    }
}

<?php

class user extends Controller
{
    public function addCustomer()


    {
        if (isset($_POST['cust_id'])) {

            $cust_id = $_POST['cust_id'];
            $cust_email = $_POST['cust_email'];
            $cust_fname = $_POST['cust_fname'];
            $cust_lname = $_POST['cust_lname'];
            $cust_password = $_POST['cust_password'];


            $this->model('insertModel')->insertCustomer($cust_id, $cust_email, $cust_fname, $cust_lname, $cust_password);
            header("Location: " . BASEURL . "/adminFunction/customer");
        } else {
            header("Location: " . BASEURL . "/adminFunction/index");
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


    public function editCustomer()
    {
        if (isset($_POST['cust_id'])) {

            $cust_id = $_POST['cust_id'];
            $cust_fname = $_POST['cust_fname'];
            $cust_lname = $_POST['cust_lname'];
            $cust_email = $_POST['cust_email'];

            // $birthday = $_POST['birthday'];
           
          

            $this->model('updateModel')->updateCustomer($cust_id, $cust_fname, $cust_lname, $cust_email);
           

            header("Location: " . BASEURL . "/adminFunction/customer");

        } else {
            header("Location: " . BASEURL . "/adminFunction/service");
        }
    }

}

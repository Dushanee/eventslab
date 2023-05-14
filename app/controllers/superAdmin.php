<?php

class superAdmin extends Controller
{
    public function index()
    {
  
        $drop = $this->model('viewModel')->getTotalCustomers();
        $result = $this->model('viewModel')->getTotalSps();  
     
        $data = [
            'inputValue' => "",
            'result' => $result,
            'drop' => $drop,
        ];

        $this->view('superadmin/dashboard' ,$data);
    }

    public function status()
    {
  
        if ($_POST['id']) {

            $id = $_POST['id'];
            $status = $_POST['status'];

            $this->model('updateModel')->updateStatus($id,$status);

            $result = $this->model('viewModel')->getUsers();  
     
            $data = [
                'inputValue' => "",
                'result' => $result,
    
            ];

            echo $id;
            echo $status;
        $this->view('superadmin/manageUser' ,$data);
    }
}
    public function manageUsers()
    {
        $result = $this->model('viewModel')->getUsers();  
     
        $data = [
            'inputValue' => "",
            'result' => $result,2
        ];

        $this->view('superadmin/manageUsers' ,$data);
    }



  
    public function signout()
    {
        session_start();
        session_destroy();
        unset($_SESSION['username']);
        header('Location: ' . BASEURL . '/login/admin');
    }





}
?>
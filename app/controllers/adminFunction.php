<?php

class adminFunction extends Controller
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

        $this->view('admin/dashboard' ,$data);
    }



    public function customer()
    {
        $result = $this->model('viewModel')->viewCustomer();   
        $drop = $this->model('viewModel')->getTotalCustomers();
     
        $data = [
            'inputValue' => "",
            'result' => $result,
            'drop' => $drop,
        ];
        var_dump($data);
        $this->view('admin/customer', $data);
    }
    public function service()
    {
        $result = $this->model('viewModel')->viewService();

        $data = [
            'inputValue' => "",
            'result' => $result,
        ];

        $this->view('admin/service', $data);
    }

   
   
    public function orders()
    {
        $result = $this->model('viewModel')->viewOrder();

        $data = [
            'inputValue' => "",
            'result' => $result,
            
        ];

        $this->view('admin/orders', $data);
    }




    public function packages($sp_type_id=null)
    {
        $result = $this->model('viewModel')->viewPackage($sp_type_id);
        $drop = $this->model('viewModel')->viewPackage();
        
        
        $data = [
            'inputValue' => "",
            'result' => $result,
            'drop' => $drop,

        ];

      

        $this->view('admin/packages', $data );
    }


    public function csm()
    {
        $this->view('csm/dashboard');
    }
    public function team()
    {
        $this->view('csm/team');
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
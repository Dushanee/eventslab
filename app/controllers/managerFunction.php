<?php

class managerFunction extends Controller
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

        $this->view('manager/dashboard' ,$data);
    }
    public function dashboard()
    {
  
        $drop = $this->model('viewModel')->getTotalCustomers();
        $result = $this->model('viewModel')->getTotalSps();  
     
        $data = [
            'inputValue' => "",
            'result' => $result,
            'drop' => $drop,
        ];

        $this->view('manager/dashboard' ,$data);
    }



    public function sales()
    {
        
        $this->view('manager/sales');
    }
    
    public function customerSales()
    {
        
        $this->view('manager/customerSales');
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

    // public function searchCustomer()
    // {
    //     $result = $this->model('viewModel')->viewCustomer();   
    //     $drop = $this->model('viewModel')->getTotalCustomers();
     
    //     $data = [
    //         'inputValue' => "",
    //         'result' => $result,
    //         'drop' => $drop,
    //     ];
    //     // var_dump($data);
    //     $this->view('admin/searchCustomer', $data);
    // }


 
      
    // public function search() {
     
        
    //     // Get the query string from the search form
    //     $query = $_GET['query'];
    
    //     // Call the search model to perform the search
    //     $results = $this->model('searchModel')->search($query);
    
    //     // Pass the search results to the view if not empty
    //     $data = [
    //         'inputValue' => "",
    //         'results' => $results
    //     ];

    //         $this->view('admin/searchCustomer', $data);
      
    // }
    
    
   
  
    public function signout()
    {
        session_start();
        session_destroy();
        unset($_SESSION['username']);
        header('Location: ' . BASEURL . '/login/admin');
    }





}
?>
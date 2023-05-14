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



    public function customer($id=null)
    {
        if($id=='success'){
            $error = 0;
        }
            else if($id=='fail'){
                $error = 1;

               
            }else{
                $error = null;

            }
        $result = $this->model('viewModel')->viewCustomer();   
        $drop = $this->model('viewModel')->getTotalCustomers();
        
     
        $data = [
            'inputValue' => "",
            'result' => $result,
            'drop' => $drop,
            'error' => $error,
        ];
        // var_dump($data);
        $this->view('admin/customer', $data);
    }

    public function service($id=null)
    { if($id=='success'){
        $error = 0;
    }
        else if($id=='fail'){
            $error = 1;

           
        }else{
            $error = null;

        }
        $result = $this->model('viewModel')->viewService();
        $drop =  $this->model('viewModel')->getTotalSps();  

        $data = [
            'inputValue' => "",
            'drop' => $drop,
            'result' => $result,
            'error' => $error,
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
    
    
    public function settings()
    {
        $this->view('admin/settings');
    }
    public function payments()
    {
        $this->view('admin/payments');
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
<?php

class welcome extends Controller
{
    public function index()
    {

        $drop = $this->model('viewModel')->getTotalCustomers();

        $data = [
            'inputValue' => "",

            'drop' => $drop,
        ];
        var_dump($data);
        $this->view('admin/dashboard', $data);
    }

    public function signout()
    {
        header("Location: " . BASEURL . "/home");
        session_start();
        session_destroy();
    }

    public function admin()
    {

        $drop = $this->model('viewModel')->getTotalCustomers();
        $result = $this->model('viewModel')->getTotalSPs();
        $data = [
            'inputValue' => "",

            'drop' => $drop,
            'result' => $result,
        ];
        // var_dump($data);
        $this->view('admin/dashboard', $data);
    }



    public function superadmin()
    {

        $drop = $this->model('viewModel')->getTotalCustomers();
        $result = $this->model('viewModel')->getTotalSPs();
        $data = [
            'inputValue' => "",

            'drop' => $drop,
            'result' => $result,
        ];
        // var_dump($data);
        $this->view('superadmin/dashboard', $data);
    }



    public function cs_manager()
    {
        $this->view('csm/dashboard');
    }
}

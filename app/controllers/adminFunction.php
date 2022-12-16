<?php

class adminFunction extends Controller
{
    public function index() 
    {
        $this->view('admin/dashboard');
    }  
    public function customer() 
    {
        $this->view('admin/customer');
    }  
    public function service() 
    {
        $this->view('admin/service');
    }  
    public function signout()
    {
        session_start();
        session_destroy();
        unset($_SESSION['username']);
        header('Location: '.BASEURL.'/login/admin');
    }
    

}
?>
<?php

class loginModel extends Model
{
    protected $result;

    public function __construct()
    {
        parent::__construct();
    }
    public function login($username, $password)
    {
        return $this->get("admin", "username = '$username' AND password = '$password'");
    
    }
   
   
}
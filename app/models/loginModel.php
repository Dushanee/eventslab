<?php

class loginModel extends Model
{
    protected $result;

    public function __construct()
    {
        parent::__construct();
    }
    public function login($email, $password)
    {
        return $this->get("users", "email = '$email' AND password = '$password'");
    
    }
   
    public function checkemail($email)
    {
        return $this->get("users", "email = '$email'");
    
    }
    public function checkotp($code)
    {
        return $this->get("users", "code = '$code'");
    
    }
   
   
} 
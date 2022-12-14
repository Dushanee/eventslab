<?php

class insertModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function userCheck($column,$value)
    {
        $result = $this->get('customer', "$column = '$value'");
        return $result;
    }
     public function insertCustomer( $name, $email,$username,$password)
    {
      $this->insert('customer', ['name'=> $name,'email'=> $email,'username'=> $username,'password'=> $password]);
      echo $username;
        
   }


}




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
     public function insertCustomer( $id, $name, $email,$username,$password)
    {
      $this->insert('customer', ['id'=> $id, 'name'=> $name,'email'=> $email,'username'=> $username,'password'=> $password]);
      echo $username;
        
   }


}




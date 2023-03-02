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
     public function insertCustomer( $cust_id, $cust_email,  $cust_fname ,$cust_lname, $cust_password)
    {
      $this->insert('customers', ['cust_id'=> $cust_id, 'cust_email'=> $cust_email,'cust_fname'=> $cust_fname,'cust_lname'=> $cust_lname,'cust_password'=> $cust_password]);
      
        
   }
   public function insertServiceProvider($sp_id, $sp_email, $sp_name , $sp_password) {
    $this->insert('service_providers', ['sp_id'=> $sp_id, 'sp_email'=> $sp_email,'sp_name '=> $sp_name ,'sp_password'=> $sp_password]);
    
      
 }

  //  public function insertAdmin(  $name, $cust_email,$username,$password)
  //  {
  //    $this->insert('customer', [ 'name'=> $name,'cust_email'=> $cust_email,'username'=> $username,'password'=> $password]);
  //    echo $username;
       
  // }

}




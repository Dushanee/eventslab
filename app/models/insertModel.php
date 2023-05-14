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
     public function insertCustomer(  $cust_email,  $cust_fname ,$cust_lname, $cust_password,$phone_number)
    {
      $this->insert('customers', [ 'cust_email'=> $cust_email,'cust_fname'=> $cust_fname,'cust_lname'=> $cust_lname,'cust_password'=> $cust_password,'phone_number'=> $phone_number]);
      
        
   }
   public function insertServiceProvider( $sp_email, $sp_name , $sp_password) {
    $this->insert('service_providers', ['sp_email'=> $sp_email,'sp_name '=> $sp_name ,'sp_password'=> $sp_password]);
    
      
 }



public function insertUser($id, $fname, $lname, $email, $user_type, $status) {
 $this->insert('users', ['id' => $id,'fname' => $fname,'lname' => $lname,'email' => $email,'user_type' => $user_type, 'status ' => $status]);
 
   
}

  //  public function insertAdmin(  $name, $cust_email,$username,$password)
  //  {
  //    $this->insert('customer', [ 'name'=> $name,'cust_email'=> $cust_email,'username'=> $username,'password'=> $password]);
  //    echo $username;
       
  // }

}




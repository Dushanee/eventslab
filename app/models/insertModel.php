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
     public function insertCustomer( $ID, $Email,  $FirstName ,$SecondName, $Password,$PhoneNumber)
    {
      $this->insert('customer', ['ID'=> $ID, 'Email'=> $Email,'FirstName'=> $FirstName,'SecondName'=> $SecondName,'Password'=> $Password,'PhoneNumber'=> $PhoneNumber]);
      
        
   }
   public function insertServiceProvider($service_provider_id, $sp_email, $sp_name , $password) {
    $this->insert('service_provider', ['service_provider_id'=> $service_provider_id, 'sp_email'=> $sp_email,'sp_name '=> $sp_name ,'password'=> $password]);
    
      
 }

  //  public function insertAdmin(  $name, $email,$username,$password)
  //  {
  //    $this->insert('customer', [ 'name'=> $name,'email'=> $email,'username'=> $username,'password'=> $password]);
  //    echo $username;
       
  // }

}




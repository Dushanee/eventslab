<?php

class updateModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }


    public function updateCustomer($cust_id, $cust_fname, $cust_lname, $cust_email)
    {
        $this->update(
            'customers',
            [
                'cust_id' => $cust_id,
                'cust_fname' => $cust_fname,
                'cust_lname' => $cust_lname,
                'cust_email' => $cust_email,
                // 'birthday' => $birthday,

            ],
            "cust_id= '$cust_id'"
        );
    }

    public function updateUser($id, $fname, $lname, $email, $user_type, $status)
    {
        $this->update(
            'users',
            [
                'id' => $id,
                'fname' => $fname,
                'lname' => $lname,
                'email' => $email,
                'user_type' => $user_type,
                'status ' => $status,
            ],
            "id= '$id'"
        );
    }
    public function updateSP($sp_id, $sp_name,  $sp_email,  $status)
    {
        $this->update(
            'service_providers',
            [
                'sp_id' => $sp_id,
                'sp_name' => $sp_name,
                'sp_email' => $sp_email,
                'status' => $status,
               
            ],
            "sp_id= '$sp_id'"
        );
    }

    public function updatePassword($password, $email)
    {   
        $this->update(
            'users',
            [
                'password' => $password,
                
            ],
            "email= '$email'"
        );
    }


    public function updateStatus($id, $status)
    {
        
        $this->update(
            'users',
            [
                'status' => $status,
                
            ],
            "id= '$id'"
        );
    }

    public function updateCode($code ,$email)
    {
        $this->update(
            'users',
            [
                'code' => $code,
               

            ],
            "email= '$email'"
        );
    }
}

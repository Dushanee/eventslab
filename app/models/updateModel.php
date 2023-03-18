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
}

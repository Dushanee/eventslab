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
                
            ]
            ,"cust_id= '$cust_id'"
        );

    }

    


}
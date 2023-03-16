<?php

class deleteModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function deleteCustomer($cust_id)
    {
        $link = $this->delete('customers', "cust_id = $cust_id");
    }

    public function deleteUser($id)
    {
        $link = $this->delete('users', "id = $id");
    }
}

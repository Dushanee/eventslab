<?php

class viewModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }


    public function viewCustomer($cust_id = null)
    {
        if (isset($cust_id)) {
            $append = "cust_id='$cust_id '";
        } else {
            $append = '';
        }
        return $this->get('customers', $append);
    }

    public function viewService($sp_id = null)
    {
        if (isset($sp_id)) {
            $append = "sp_id='$sp_id '";
        } else {
            $append = '';
        }
        return $this->get('service_providers', $append);
    }



    public function viewPackages($pack_id = null)
    {
        if (isset($pack_id)) {
            $append = "pack_id='$pack_id '";
        } else {
            $append = '';
        }
        return $this->get('packages', $append);
    }


    public function viewOrder()
    {

        $table1 = "orders";
        $table2 = "options";
        $joinOn1 = "orders.option_id = options.option_id";
        $where = "";
        $order = "";
        $limit = "";

        return $this->getjoin($table1, $table2, $joinOn1, $where, $order, $limit);
    }

    public function viewPackage()
    {

        $table1 = "packages";
        $table2 = "options";
        $joinOn1 = "packages.pack_id = options.pack_id";
        $where = "";
        $order = "";
        $limit = "";

        return $this->getjoin($table1, $table2, $joinOn1, $where, $order, $limit);
    }
}

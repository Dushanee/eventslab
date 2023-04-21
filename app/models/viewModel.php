<?php

class viewModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getUsers($id = null)
    {
        if (isset($id)) {
            $append = "id='$id '";
        } else {
            $append = '';
        }
        return $this->get('users', $append);
    }

    public function viewCustomer1($cust_id = null)
    {
        if (isset($cust_id)) {
            $append = "cust_id='$cust_id '";
        } else {
            $append = '';
        }
        return $this->get('customers', $append);
    }

    public function viewCustomer($cust_id = null, $customers_per_page = 6)
    {   if (isset($_GET['page'])) {
        $current_page = $_GET['page'];
    } else {
        $current_page = 1;
    }
        $order = null;
        $offset = ($current_page - 1) * $customers_per_page;
        if (isset($cust_id)) {
            $append = "cust_id='$cust_id'";
        } else {
            $append = '';
        }
        return $this->getoffset('customers',$append,$order,$customers_per_page,$offset);
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
        $table2 = "customers";
        $joinOn1 = "orders.cust_id = customers.cust_id";
        $where = "";
        $order = "";
        $limit = "";

        return $this->getjoin($table1, $table2, $joinOn1, $where, $order, $limit);
    }

    public function viewPackage($sp_type_id=null)

    {

        if (isset($sp_type_id)) {
            $append = "sp_type_id='$sp_type_id '";
        } else {
            $append = '';
        }
     
        $table1 = "service_providers";
        $table2 = "sp_pack";
        $table3 = "packages";
        $joinOn1 = "service_providers.sp_id = sp_pack.sp_id";
        $joinOn2 = "sp_pack.pack_id = packages.pack_id";
        $where = $append;
        $order = "";
        $limit = "";
  

        return $this->getThreeJoin($table1, $table2, $table3, $joinOn1, $joinOn2, $where,$order, $limit);
    }
    public function getTotalCustomers() {
        return $this->getTableCount('customers');
    }

    public function getTotalSps() {
        return $this->getTableCount('service_providers');
    }



   

}

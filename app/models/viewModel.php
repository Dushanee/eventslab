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
    public function viewService1($sp_id = null)
    {
        if (isset($sp_id)) {
            $append = "sp_id='$sp_id '";
        } else {
            $append = '';
        }
        return $this->get('service_providers', $append);
    }
    public function viewService($sp_id = null, $sps_per_page = 6)
    {   if (isset($_GET['page'])) {
        $current_page = $_GET['page'];
    } else {
        $current_page = 1;
    }
        $order = null;
        $offset = ($current_page - 1) * $sps_per_page;
        if (isset($sp_id)) {
            $append = "sp_id='$sp_id'";
        } else {
            $append = '';
        }
        return $this->getoffset('service_providers',$append,$order,$sps_per_page,$offset);
    }
    public function verifyService($sp_id = null, $sps_per_page = 6)
    {   if (isset($_GET['page'])) {
        $current_page = $_GET['page'];
    } else {
        $current_page = 1;
    }
        $order = null;
        $offset = ($current_page - 1) * $sps_per_page;
        if (isset($sp_id)) {
            $append = "status='0'";
        } else {
            $append = "status='0'";
        }
        return $this->getoffset('service_providers',$append,$order,$sps_per_page,$offset);
    }
    public function viewSp($sp_id = null)
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
  
    public function orders($order_id = null)
    {
        $select = "SELECT order_date, COUNT(*) AS total_orders, SUM(total_price) AS total_revenue";
        if (isset($order_id)) {
            $append = "order_id='$order_id'";
        } else {
            $append = '';
        }
        $group = "order_date";
        $order = "order_date DESC";
           
        return $this->getGroup($select, 'orders', $append, $group,$order);
    }


    public function maxRevenue($order_id = null)
{
    $select = "SELECT order_date, COUNT(*) AS total_orders, SUM(total_price) AS total_revenue";
    if (isset($order_id)) {
        $append = "order_id='$order_id'";
    } else {
        $append = '';
    }
    $group = "order_date";
    $order = "total_revenue DESC";
    $limit = "1";
    return $this->getGroup($select, 'orders', $append, $group, $order, $limit);
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


    public function customerOrders($cust_id=null)

    {
        if (isset($cust_id)) {
            $append = "cust_id='$cust_id'";
        } else {
            $append = '';
        }
     
        $table1 = "customers";
        $table2 = "orders";
        $joinOn1 = "customers.cust_id = orders.cust_id";
        $where = $append;
        $order = "";
        $limit = "";
  

        return $this->getjoin($table1, $table2, $joinOn1, $where,$order, $limit);
    }


    public function customerSales($cust_id=null)

    {
        if (isset($cust_id)) {
            $append = "cust_id='$cust_id'";
        } else {
            $append = '';
        }
     
        $table1 = "customers";
        $table2 = "orders";
        $joinOn1 = "customers.cust_id = orders.cust_id";
        $where = $append;
        $order = "";
        $limit = "";
  

        return $this->getjoin($table1, $table2, $joinOn1, $where,$order, $limit);
    }
    public function customerOrders1($cust_id=null)

    {
        if (isset($cust_id)) {
            $append = "orders.cust_id='$cust_id'";
        } else {
            $append = '';
        }
     
        $table1 = "customers";
        $table2 = "orders";
        $joinOn1 = "customers.cust_id = orders.cust_id";
        $where = $append;
        $order = "";
        $limit = "";
  

        return $this->getjoin($table1, $table2, $joinOn1, $where,$order, $limit);
    }
    // public function spPayments($order_id=null)

    // {
    //     if (isset($order_id)) {
    //         $append = "order_id='$order_id'";
    //     } else {
    //         $append = '';
    //     }
     
    //     $table1 = "orders";
    //     $table2 = "order_details";
    //     $joinOn1 = "orders.order_id = order_details.order_id";
    //     $where = $append;
    //     $order = "";
    //     $limit = "";
  

    //     return $this->getjoin($table1, $table2, $joinOn1, $where,$order, $limit);
    // }


    // public function spPayments($order_id=null)

    // {

    //     if (isset($order_id)) {
    //                 $append = "order_id='$order_id'";
    //             } else {
    //                 $append = '';
    //             }
     
    //     $table1 = "orders";
    //     $table2 = "order_details";
    //     $table3 = "options";
    //     $joinOn1 = "orders.order_id = order_details.order_id";
    //     $joinOn2 = "order_details.option_id = options.option_id ";
    //     $where = $append;
    //     $order = "";
    //     $limit = "";
  

    //     return $this->getThreeJoin($table1, $table2, $table3, $joinOn1, $joinOn2, $where,$order, $limit);
    // }


    public function spPayments($order_id=null)

    {

        if (isset($order_id)) {
                    $append = "order_id='$order_id'";
                } else {
                    $append = '';
                }
     
        $table1 = "orders";
        $table2 = "order_details";
        $table3 = "options";
        $table4 = "sp_pack";
        $joinOn1 = "orders.order_id = order_details.order_id";
        $joinOn2 = "order_details.option_id = options.option_id ";
        $joinOn3 = "options.pack_id = sp_pack.pack_id ";
        $where = $append;
        $order = "sp_id";
        $limit = "";
  

        return $this->getFourJoin($table1, $table2, $table3,  $table4,$joinOn1, $joinOn2, $joinOn3, $where,$order, $limit);
    }
}

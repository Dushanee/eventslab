<?php

class searchModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }


    public function searchCust($query)
    {
       
        return $this->searchBar('customers','cust_fname',$query);

    }
    public function searchSp($query)
    {
       
        return $this->searchBar('service_providers','sp_name',$query);

    }
}

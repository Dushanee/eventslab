<?php

class searchModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }


    public function search($query)
    {
       
        return $this->searchBar('customers','cust_fname',$query);

    }
   
}

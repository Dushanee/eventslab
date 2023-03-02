<?php

class order extends Controller
{

    public function viewOrder($order_id)
    {
        $result = $this->model('viewModel')->viewOrder($order_id);


        $data = [
            'inputValue' => "",
            'result' => $result,
        ];



        $this->view('admin/order_view', $data);
    }

    public function order()
    {

        // $result = $this->model('viewModel')->viewOrder();
        $result1 = $this->model('viewModel')->viewOrder();
        $data = [
            'inputValue' => "",
            // 'requisitionproducts' => $result,
            'requisitionList' => $result1,

        ];

        $this->view('admin/orders', $data);
    }
}

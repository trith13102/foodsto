<?php

class home extends Controller
{
    public function default()
    {

        $model = $this->model('homeModel');

        $this->view("homeView", [
            'fruits' => $model->getProductsByCategory(14),
            'vegetables' => $model->getProductsByCategory(4),
            'salads' => $model->getProductsByCategory(64),
            'products' => $model->getProducts(),
            'productSale' => $model->getProductSale(),
        ]);
    }

    public function get_product_by_id($id = null)
    {
        // header('Access-Control-Allow-Origin: *');
        header('Content-Type: application/json');

        $model = $this->model('homeModel');
        $model->get_product_by_id($id);
    }
}
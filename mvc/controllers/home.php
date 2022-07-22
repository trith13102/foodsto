<?php

class home extends Controller
{
    public function default()
    {
        $model = $this->model('homeModel');

        $this->view('homeView', [
            'products' => $model->getProducts(),
        ]);
    }

    public function crud($type = null)
    {
        if ($type == 'method_1') {
            $model = $this->model('homeModel');
            $model->getProductById();
        } else {
            echo 'Not choose crud method yet!';
        }
    }
}

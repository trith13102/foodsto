<?php

class admin extends Controller
{
    public function default()
    {
        $model = $this->model('adminModel');

        $this->view('adminView', [
            'page' => 'dashboard',
        ]);
    }

    public function dashboard()
    {
        $model = $this->model('adminModel');

        $this->view('adminView', [
            'page' => 'dashboard',
        ]);
    }

    public function category()
    {
        $model = $this->model('adminModel');

        $this->view('adminView', [
            'page' => 'category',
        ]);
    }

    public function account()
    {
        $model = $this->model('adminModel');

        $this->view('adminView', [
            'page' => 'account',
        ]);
    }

    public function product()
    {
        $model = $this->model('adminModel');

        $this->view('adminView', [
            'page' => 'product',
        ]);
    }

    public function discount()
    {
        $model = $this->model('adminModel');

        $this->view('adminView', [
            'page' => 'discount',
        ]);
    }

    public function order()
    {
        $model = $this->model('adminModel');

        $this->view('adminView', [
            'page' => 'order',
        ]);
    }

    public function crud($method = null)
    {
        header(
            'Content-Type: application/json; charset=utf-8'
        );

        $model = $this->model('adminModel');

        if (!$method == null && method_exists($model, $method)) {
            $model->$method();
        } else {
            die('Not select method or method does not exist!');
        }
    }
}

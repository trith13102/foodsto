<?php

class home extends Controller
{
    public function default()
    {
        $model = $this->model('homeModel');
        $this->view("homeView", []);
    }

    public function crud($method = null)
    {
        header('Content-Type: application/json; charset=utf-8');

        $model = $this->model('homeModel');

        if (!$method == null && method_exists($model, $method)) {
            $model->$method();
        } else die("FAIL");
    }
}

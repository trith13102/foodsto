<?php

class home extends Controller
{
    public function default()
    {
        $model = $this->model('homeModel');

        $this->view('homeView', []);
    }
}

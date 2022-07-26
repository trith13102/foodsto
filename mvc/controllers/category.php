<?php

class category extends Controller
{
    public function default()
    {
        $model = $this->model('categoryModel');

        $arr = $model->showCategory();

        $this->view('categoryView',["arrCategory"=>$arr] );

    }
}

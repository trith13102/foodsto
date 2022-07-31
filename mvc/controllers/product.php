<?php

class product extends Controller
{
    public function default()
    {
        $model = $this->model('productModel');



        $this->view('productView', [
            'arrProducts' => $this->chosePage(),
            'popular' => $model->popularProducts(),
            'getPage' => $model->getPage(),
            'numberPages' => $model->pagesProduct(),

        ]);
    }

    public function chosePage()
    {
        $model = $this->model('productModel');
        if (isset($_GET['keyword']) && !$_GET['keyword'] == '') {
            return $model->search();
        } else {
           return $model->showProduct();
        }
    }
}

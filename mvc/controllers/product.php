<?php

     class product extends Controller
     {
         public function default()
         {
             $model = $this->model('productModel');

             $this->view('productView', [
                'getPage' =>$model->getPage(),
                'arrProducts'=>$model->showProduct(),
                'popular' => $model->popularProducts(),
                'numberPages' => $model->pagesProduct(),
                'keyword' => $model->search()
            ]);

         }
     }

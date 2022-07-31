<?php

     class product extends Controller
     {
         public function default()
         {
             $model = $this->model('productModel');

             if (isset($_GET['keyword']) && !$_GET['keyword'] == ''){
                $product = $model->search();
            } else {
                $product = $model->showProduct();
            }

            $this->view('productView',[
                'popular' => $model->popularProducts(),
                'getPage' =>$model->getPage(),
                'arrProducts'=> $product,
                'numberPages' => $model->pagesProduct(),
            ]);

         }
     }

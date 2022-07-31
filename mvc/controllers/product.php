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
                'arrProducts'=>$product,
                'popular' => $model->popularProducts(),
                'getPage' =>$model->getPage(),
                'numberPages' => $model->pagesProduct(),
                
            ]);

         }
     }

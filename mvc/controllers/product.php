<?php

     class product extends Controller
     {
         public function default()
         {
             $model = $this->model('productModel');

             $this->view('productView', []);
         }
     }

<?php

     class cart extends Controller
     {
         public function default()
         {
             $model = $this->model('cartModel');

             $this->view('cartView', []);
         }
     }

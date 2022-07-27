<?php

     class checkout extends Controller
     {
         public function default()
         {
             $model = $this->model('checkoutModel');

             $this->view('checkoutView', [
                'page' => 'checkout',
             ]);
         }

         public function success() 
         {
            $model = $this->model('checkoutModel');

            $this->view('checkoutView', [
                'page' => 'checkoutSuccess',
            ]);
         }
     }

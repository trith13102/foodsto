<?php

     class checkout extends Controller
     {
         public function default()
         {
             $model = $this->model('checkoutModel');

             $this->view('checkoutView', []);
         }
     }

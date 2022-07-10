<?php

     class category extends Controller
     {
         public function default()
         {
             $model = $this->model('categoryModel');

             $this->view('categoryView', []);
         }
     }

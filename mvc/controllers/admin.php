<?php

     class admin extends Controller
     {
         public function default()
         {
             $model = $this->model('adminModel');

             $this->view('adminView', []);
         }
     }

<?php

     class details extends Controller
     {
         public function default()
         {
             $model = $this->model('detailsModel');

             $this->view('detailsView', []);
         }
     }
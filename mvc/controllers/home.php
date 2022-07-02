<?php

     class home extends Controller
     {
         public function default()
         {
             $model = $this->model('homeModel');
             $this->view('homeView', [
                'testData' => $model->getData()
             ]);
         }

         public function action()
         {
             $model = $this->model('homeModel');
             $model->greet();
         }
     }

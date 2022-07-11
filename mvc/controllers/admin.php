<?php

     class admin extends Controller
     {
         public function default($page = 'dashboard')
         {
             $model = $this->model('adminModel');

             $pageData = [$page];
             switch ($page) {
                 case 'category':
                     array_push($pageData, $model->getCategories());
                     break;
                 case 'account': break;
                 case 'product': break;
                 case 'discount': break;
                 default: break;
              }

             $this->view('adminView', [
                'pageData' => $pageData,
             ]);
         }
     }

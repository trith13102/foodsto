<?php

     class adminModel extends Connect
     {
         public function getCategories()
         {
             $script = 'SELECT * FROM san_pham';
             $raw = $this->dbConnect->query($script);
             
             $result = [];
             while ($row = $raw->fetch_assoc()) {
               array_push($result, $row);
             }

             return $result;
         }
     }

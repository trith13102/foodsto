<?php

     class homeModel extends Connect
     {
         public function greet()
         {
             echo 'Hello World!';
         }

         public function getData()
         {
            $query = "SELECT * FROM my_table";
            $raw = $this->dbConnect->query($query);

            $result = [];
            while ($row = $raw->fetch_assoc()) {
                array_push($result, $row);
            }

            return $result;
         }
     }

<?php

class detailsModel extends Connect
{
     public function getProductByID()
     {
          $id = isset($_GET['id']) ? trim($_GET['id']) : die ("FAIL!");
          $sql = "SELECT a.*, b.name AS name_category FROM products a INNER JOIN categories b ON a.category_id = b.id WHERE a.id = '$id'";
          $result = $this->dbConnect->query($sql);
          if ($result->num_rows == 1) {
               $row = $result -> fetch_assoc();
          }

          return $row;
          
     }

     public function getAllProduct() 
     {
          $id = isset($_GET['id']) ? trim($_GET['id']) : die ("FAIL!");
          $sql = "SELECT a.*, b.name AS name_category FROM products a INNER JOIN categories b ON a.category_id = b.id WHERE NOT a.id = '$id'";
          $result = $this->dbConnect->query($sql);
          $list = array();
          while ($row = $result->fetch_assoc()) {
               array_push($list, $row);
          }

          return $list;
     }
}    

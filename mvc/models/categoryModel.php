<?php

class categoryModel extends Connect
{
     public function showCategory()
     {
          $sql = "SELECT * FROM categories";
          $query = mysqli_query($this->dbConnect, $sql);
          $arr = mysqli_fetch_all($query,MYSQLI_ASSOC);
          return $arr;
          
     }
}

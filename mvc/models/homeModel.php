<?php

class homeModel extends Connect
{
     
     public function get_products()
     {
          $category_id = isset($_POST['category_id']) ? $_POST['category_id'] : die("FAIL");
          $sql = "SELECT *
                    FROM products
                    INNER JOIN categories
                    ON products.category_id = categories.id
                    WHERE categories.id = '$category_id'
                    ORDER BY products.id DESC
                    LIMIT 4";

          $query = mysqli_query($this->dbConnect, $sql);
          $arr = mysqli_fetch_all($query);
          echo json_encode($arr);
     }


}

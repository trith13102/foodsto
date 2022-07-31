<?php

class homeModel extends Connect
{
     public function getProductsByCategory($category_id)
     {
          $query = 'SELECT *
                    FROM products
                    WHERE category_id = "' . $category_id . '"
                    ORDER BY id DESC
                    LIMIT 4';
          $stmt = $this->dbConnect->prepare($query);

          $stmt->execute();

          $raw = $stmt->get_result();

          $products = [];

          while ($product = $raw->fetch_assoc()) {
               array_push($products, $product);
          }

          return $products;
     }

     public function getProducts()
     {
          $query = "SELECT *
                    FROM products
                    ORDER BY products.id DESC
                    LIMIT 6";
          $stmt = $this->dbConnect->prepare($query);

          $stmt->execute();

          $raw = $stmt->get_result();

          $products = [];

          while ($product = $raw->fetch_assoc()) {
               array_push($products, $product);
          }

          return $products;
     }

     public function getProductSale()
     {
          $query = "SELECT *
                    FROM products
                    INNER JOIN sale_events
                    ON products.id = sale_events.product_id";
          $stmt = $this->dbConnect->prepare($query);

          $stmt->execute();

          $raw = $stmt->get_result();

          $products = [];

          while ($product = $raw->fetch_assoc()) {
               array_push($products, $product);
          }

          return $products;
     }

     public function get_product_by_id($id)
     {
          $query = 'SELECT * FROM products WHERE id = "' . $id . '"';
          $info = mysqli_fetch_all($this->dbConnect->query($query));

          $query = 'SELECT * FROM product_images WHERE product_id = "' . $id . '"';
          $gallery = mysqli_fetch_all($this->dbConnect->query($query));

          echo json_encode(array('info' => $info, 'gallery' => $gallery), JSON_UNESCAPED_UNICODE);
     }
}

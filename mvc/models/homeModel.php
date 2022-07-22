<?php

class homeModel extends Connect
{
     public function getProducts()
     {
          $query = "SELECT * FROM products ORDER BY id DESC LIMIT 4";
          $stmt = $this->dbConnect->prepare($query);

          $stmt->execute();

          $raw = $stmt->get_result();

          $products = [];

          while ($product = $raw->fetch_assoc()) {
               array_push($products, $product);
          }

          return $products;
     }

     public function getProductById()
     {
          $id = isset($_POST['id']) ? $_POST['id'] : '';

          $query = "SELECT * FROM products WHERE id=?";
          $stmt = $this->dbConnect->prepare($query);

          $stmt->bind_param('d', $id);

          $stmt->execute();

          $raw = $stmt->get_result();

          $product = $raw->fetch_assoc();

          echo json_encode($product, JSON_UNESCAPED_UNICODE);
     }
}

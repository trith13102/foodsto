<?php

class homeModel extends Connect
{
     public function getProductsByCategory($category_id) {
          $query = "SELECT *
                    FROM products
                    WHERE products.category_id = '$category_id'
                    ORDER BY products.id DESC
                    LIMIT 4";
          $stmt = $this->dbConnect->prepare($query);

          $stmt->execute();

          $raw = $stmt->get_result();

          $products = [];

          while ($product = $raw->fetch_assoc()) {
               array_push($products, $product);
          }

          return $products;
     }

     public function getProducts() {
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
}

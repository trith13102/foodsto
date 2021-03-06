<?php

class productModel extends Connect
{
     public $showProduct = 6;

     public function getPage()
     {
          $page = 1;
          if (isset($_GET['page']) && is_numeric($_GET['page'])) {
               $page = $_GET['page'];
               settype($page, 'int');
          } else {
               $page = 1;
          }
          return  $page;
     }

     public function showProduct()
     {
          $page = $this->getPage();
          $from = ($page - 1) * $this->showProduct;

          if (isset($_GET['min']) && !$_GET['min'] == '') {
               $min = $_GET['min'] ?? 1000;
               $max = $_GET['max'] ?? 650000;
               $sql = "SELECT *,Sort.name AS productName ,
                         Sort.thumbnail as productThumbnail,
                         Sort.id as productId
                         FROM (SELECT * FROM products 
                         WHERE price BETWEEN $min and $max) AS Sort
                         INNER JOIN categories 
                         ON Sort.category_id = categories.id
                         LIMIT $from,$this->showProduct";
          } else {

               $orderby = $_GET['orderby'] ?? null;
               $sort = match ($orderby) {
                    'price-desc' => $sql =  "SELECT *,Sort.name AS productName ,
                                             Sort.thumbnail as productThumbnail,
                                             Sort.id as productId
                                             FROM (SELECT * FROM products 
                                             ORDER BY price DESC) AS Sort
                                             INNER JOIN categories 
                                             ON Sort.category_id = categories.id
                                             LIMIT $from,$this->showProduct",

                    'price' => $sql = "SELECT *,Sort.name AS productName ,
                                        Sort.thumbnail as productThumbnail,
                                        Sort.id as productId
                                        FROM (SELECT * FROM products 
                                        ORDER BY price ASC) AS Sort
                                        INNER JOIN categories 
                                        ON Sort.category_id = categories.id
                                        LIMIT $from,$this->showProduct",

                    default => $sql = "SELECT *,products.name AS productName ,
                                        products.thumbnail as productThumbnail,
                                        products.id as productId
                                        FROM products
                                        INNER JOIN categories 
                                        ON products.category_id = categories.id
                                        LIMIT $from,$this->showProduct "
               };
          }


          // $query = mysqli_query($this->dbConnect, $sql);
          // $arr = mysqli_fetch_all($query, MYSQLI_ASSOC);
          return  mysqli_query($this->dbConnect, $sql);
     }

     public function popularProducts()
     {
          $sql = "SELECT *,categories.name as categoryName,categories.thumbnail as categoryThumbnail
               FROM categories
               INNER JOIN products 
               ON products.category_id = categories.id 
               ORDER BY products.id DESC
               LIMIT 3 ";
          return mysqli_query($this->dbConnect, $sql);
     }

     // Pages

     public function totalProduct()
     {
          $total_products = 0;
          if (isset($_GET['keyword']) && !$_GET['keyword'] == '') {
               $total_products = mysqli_num_rows($this->search());
          } elseif (isset($_GET['min']) && !$_GET['min'] == '') {
               $min = $_GET['min'] ?? 1000;
               $max = $_GET['max'] ?? 650000;
               $sql  = "SELECT * FROM products 
                    WHERE price BETWEEN $min and $max";
               $query = mysqli_query($this->dbConnect, $sql);
               $total_products = mysqli_num_rows($query);
          } else {
               $sql = "SELECT *,categories.name as categoryName,categories.thumbnail as categoryThumbnail
               FROM categories
               INNER JOIN products 
               ON products.category_id = categories.id ";
               $query = mysqli_query($this->dbConnect, $sql);
               $total_products = mysqli_num_rows($query);
          }
          return $total_products;
     }
     public function pagesProduct()
     {
          $show_pages = ceil($this->totalProduct() / $this->showProduct);
          return $show_pages;
     }

     // Search
     public function search()
     {
          if (isset($_GET['keyword'])) {
               $keyword = $_GET['keyword'];
          } else {
               $keyword = "";
          }
          $sql = "SELECT *,products.name AS productName  ,products.thumbnail as productThumbnail,products.id as productId
          FROM products
          INNER JOIN categories 
          ON products.category_id = categories.id
          WHERE products.name LIKE '%" . $keyword . "%' ";
          return mysqli_query($this->dbConnect, $sql);
     }
}

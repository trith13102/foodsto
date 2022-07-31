<?php

class productModel extends Connect
{
     public $showProduct = 6;
     public $page = 1;

     public function getPage()
     {
          if (isset($_GET['page'])) {
               $this->page = $_GET['page'];
               settype($this->page, 'int');
          }
          return $this->page;
     }

     public function showProduct()
     {
          $from = ($this->page - 1) * $this->showProduct;
          $sql = "SELECT *,products.name AS productName  ,products.thumbnail as productThumbnail
                    FROM products
                    INNER JOIN categories 
                    ON products.category_id = categories.id
                    LIMIT $from,$this->showProduct ";
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

     public function pagesProduct()
     {



          if (isset($_GET['keyword']) && !$_GET['keyword'] == '') {
               $total_products = mysqli_num_rows($this->search());
          } else {
               $sql = "SELECT *,categories.name as categoryName,categories.thumbnail as categoryThumbnail
               FROM categories
               INNER JOIN products 
               ON products.category_id = categories.id ";
               $query = mysqli_query($this->dbConnect, $sql);
               $total_products = mysqli_num_rows($query);
          }
          $show_pages = ceil($total_products / $this->showProduct);
          return $show_pages;
     }

     // Search
     public function search()
     {
          if (isset($_GET['keyword'])) {
               $keyword = $_GET['keyword'];
          } else {
               $keyword = "1";
          }
          $sql = "SELECT *,products.name AS productName  ,products.thumbnail as productThumbnail
          FROM products
          INNER JOIN categories 
          ON products.category_id = categories.id
          WHERE products.name LIKE '%" . $keyword . "%' ";
          return mysqli_query($this->dbConnect, $sql);
     }
}

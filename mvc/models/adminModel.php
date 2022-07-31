<?php

date_default_timezone_set('Asia/Ho_Chi_Minh');
class adminModel extends Connect
{
     public function check_account()
     {
          header('Access-Control-Allow-Origin: *');
          header('Content-Type: application/json');

          $username = isset($_POST['username']) ? $_POST['username'] : '';
          $password = isset($_POST['password']) ? $_POST['password'] : '';

          $query = 'SELECT password FROM account WHERE username="' . $username . '" AND password="' . md5($password) . '" AND account_role = "0"';

          $raw = $this->dbConnect->query($query);

          if ($raw->num_rows) {
               echo json_encode(array("message" => "SUCCESS"));
          } else {
               echo json_encode(array("message" => "FAILURE"));
          }
     }

     //   Dashboard
     public function get_summary()
     {
          // Get accounts
          $query = "SELECT COUNT(id) FROM account";

          $raw = $this->dbConnect->query($query);

          $result = [
               mysqli_fetch_all($raw)[0][0],
          ];

          // Get orders
          $query = "SELECT COUNT(id) FROM orders";

          $raw = $this->dbConnect->query($query);

          array_push($result, mysqli_fetch_all($raw)[0][0]);

          // Get discounts
          $query = "SELECT COUNT(id) FROM sale_events";

          $raw = $this->dbConnect->query($query);

          array_push($result, mysqli_fetch_all($raw)[0][0]);

          // Get products
          $query = "SELECT COUNT(id) FROM products";

          $raw = $this->dbConnect->query($query);

          array_push($result, mysqli_fetch_all($raw)[0][0]);

          // Get categories
          $query = "SELECT COUNT(id) FROM categories";

          $raw = $this->dbConnect->query($query);

          array_push($result, mysqli_fetch_all($raw)[0][0]);

          return $result;
     }

     public function get_charts_data()
     {
          $query = 'SELECT MONTH(DATE(order_date)), order_status FROM orders WHERE YEAR(order_date) = "' . date("Y") . '"';
          $orders = mysqli_fetch_all($this->dbConnect->query($query));

          //   Data for Line chart
          $lineChart = [0, 0, 0, 0];
          foreach ($orders as $order) {
               if ($order[1] == 4) {
                    $lineChart[ceil($order[0] / 3) - 1]++;
               }
          }

          // Data for Donut chart
          $donutChart = [0, 0];
          foreach ($orders as $order) {
               if ($order[1] == 0) {
                    $donutChart[0]++;
               }

               if ($order[1] == 4) {
                    $donutChart[1]++;
               }
          }

          echo json_encode(array('line' => $lineChart, 'donut' => $donutChart));
     }

     //   Account
     public function get_account_by_id()
     {
          $id = isset($_POST['id']) ? $_POST['id'] : die();

          $query = 'SELECT * FROM account WHERE id="' . $id . '"';
          $account =  mysqli_fetch_all($this->dbConnect->query($query))[0];

          echo json_encode($account);
     }

     public function get_accounts()
     {
          $query = 'SELECT * FROM account WHERE username != "admin" ORDER BY id DESC';
          $accounts =  mysqli_fetch_all($this->dbConnect->query($query));

          echo json_encode($accounts);
     }

     public function find_account()
     {
          $email = isset($_POST['email']) ? $_POST['email'] : die();
          $query = 'SELECT * FROM account WHERE email LIKE "%' . $email . '%" AND username != "admin" ORDER BY id DESC';

          $account =  mysqli_fetch_all($this->dbConnect->query($query));

          echo json_encode($account);
     }

     public function delete_account()
     {
          $id = isset($_POST['id']) ? $_POST['id'] : die();
          $query = 'DELETE FROM account WHERE id="' . $id . '"';

          if ($this->dbConnect->query($query)) {
               echo json_encode(array("message" => "SUCCESS"));
          } else {
               echo json_encode(array("message" => "FAILURE"));
          }
     }

     public function update_account()
     {
          $id = isset($_POST['id']) ? $_POST['id'] : die();
          $email = isset($_POST['email']) ? $_POST['email'] : die();
          $full_name = isset($_POST['full_name']) ? $_POST['full_name'] : die();
          $role = isset($_POST['role']) ? $_POST['role'] : die();
          $address = isset($_POST['address']) ? $_POST['address'] : die();
          $country = isset($_POST['country']) ? $_POST['country'] : die();
          $phone = isset($_POST['phone']) ? $_POST['phone'] : die();

          $query = 'UPDATE account SET email = "' . $email . '", full_name = "' . $full_name . '", account_role = "' . $role . '", default_shipping_address = "' . $address . '", country = "' . $country . '", phone = "' . $phone . '" WHERE id="' . $id . '"';

          if ($this->dbConnect->query($query)) {
               echo json_encode(array("message" => "SUCCESS"));
          } else {
               echo json_encode(array("message" => "FAILURE"));
          }
     }

     // Order
     public function get_orders()
     {
          $query = "SELECT id, customer_id, amount, order_address, shipping_address, order_date, order_status FROM orders";

          $orders = mysqli_fetch_all($this->dbConnect->query($query));

          echo json_encode($orders);
     }

     public function update_order_status()
     {
          $id = isset($_POST['id']) ? $_POST['id'] : die();
          $status = isset($_POST['status']) ? $_POST['status'] : die();

          $query = 'UPDATE orders SET order_status="' . $status . '" WHERE id="' . $id . '"';

          if ($this->dbConnect->query($query)) {
               echo json_encode(array("message" => "SUCCESS"));
          } else {
               echo json_encode(array("message" => "FAILURE"));
          }
     }

     public function get_order_status()
     {
          $id = isset($_POST['id']) ? $_POST['id'] : die();
          $query = 'SELECT order_status FROM orders WHERE id="' . $id . '"';
          $status = mysqli_fetch_all($this->dbConnect->query($query));

          echo json_encode(array("status" => $status[0][0]));
     }

     //   Discount
     public function get_products_with_discount()
     {
          $query = "SELECT products.id, products.name, products.price AS current_price, ROUND(products.price*sale_events.discount, 0) AS sale_price, ROUND(sale_events.discount*100, 0) as discount FROM products LEFT JOIN sale_events on products.id = sale_events.product_id ORDER BY products.id";

          $products_with_discount = mysqli_fetch_all($this->dbConnect->query($query));

          echo json_encode($products_with_discount);
     }

     public function update_product_discount()
     {
          $id = isset($_POST['id']) ? $_POST['id'] : die();
          $discount = isset($_POST['discount']) ? $_POST['discount'] : die();

          $query = 'UPDATE sale_events SET discount="' . $discount . '" WHERE product_id = "' . $id . '"';

          if ($this->dbConnect->query($query)) {
               echo json_encode(array("message" => "SUCCESS"));
          } else {
               echo json_encode(array("message" => "FAILURE"));
          }
     }

     public function create_product_discount()
     {
          $id = isset($_POST['id']) ? $_POST['id'] : die();
          $discount = isset($_POST['discount']) ? $_POST['discount'] : die();

          $query = 'INSERT INTO sale_events(product_id, discount) VALUES("' . $id . '", "' . $discount . '")';

          if ($this->dbConnect->query($query)) {
               echo json_encode(array("message" => "SUCCESS"));
          } else {
               echo json_encode(array("message" => "FAILURE"));
          }
     }

     //   Products
     private function skuGenerator()
     {
          $date = date("Y-m-d h:i:sa");

          return "PRODUCT" . md5($date);
     }

     public function get_product()
     {
          $id = isset($_POST['id']) ? $_POST['id'] : die();

          $query = 'SELECT * FROM products WHERE id="' . $id . '"';

          $product = mysqli_fetch_all($this->dbConnect->query($query));

          echo json_encode($product[0]);
     }

     public function get_products()
     {
          $query = 'SELECT products.thumbnail, products.id, products.name, categories.name, products.sku, products.price, products.weight, products.descriptions, DATE(products.create_date), products.stock FROM products
          INNER JOIN categories ON products.category_id = categories.id ORDER BY products.id DESC';

          $products = mysqli_fetch_all($this->dbConnect->query($query));

          echo json_encode($products);
     }

     public function add_product()
     {
          $category_id = isset($_POST['category_id']) ? $_POST['category_id'] : die();
          $sku = $this->skuGenerator();
          $name = isset($_POST['name']) ? $_POST['name'] : die();
          $price = isset($_POST['price']) ? $_POST['price'] : die();
          $weight = isset($_POST['weight']) ? $_POST['weight'] : die();
          $description = isset($_POST['description']) ? $_POST['description'] : die();
          $thumbnail = isset($_FILES["thumbnail"]) ? $this->uploadImage($_FILES["thumbnail"]['tmp_name'], "product_images/thumbnail") : die();
          $create_date = date("Y-m-d H:i:s");
          $stock = isset($_POST['stock']) ? $_POST['stock'] : die();

          $query = 'INSERT INTO products(category_id, sku, name, price, weight, descriptions, thumbnail, create_date, stock)
          VALUES ("' . $category_id . '", "' . $sku . '", "' . $name . '", "' . $price . '", "' . $weight . '", "' . $description . '",
          "' . $thumbnail . '", "' . $create_date . '", "' . $stock . '")';

          if ($this->dbConnect->query($query)) {
               echo json_encode(array("message" => "SUCCESS"));
          } else {
               echo json_encode(array("message" => "FAILURE"));
          }
     }

     public function update_product()
     {
          $id = isset($_POST['id']) ? $_POST['id'] : die();
          $category_id = isset($_POST['category_id']) ? $_POST['category_id'] : die();
          $name = isset($_POST['name']) ? $_POST['name'] : die();
          $price = isset($_POST['price']) ? $_POST['price'] : die();
          $weight = isset($_POST['weight']) ? $_POST['weight'] : die();
          $description = isset($_POST['description']) ? $_POST['description'] : die();
          $stock = isset($_POST['stock']) ? $_POST['stock'] : die();


          if (isset($_FILES["thumbnail"])) {
               $thumbnail = $this->uploadImage($_FILES["thumbnail"]['tmp_name'], "product_images/thumbnail");
               $query = 'UPDATE products SET category_id="' . $category_id . '", name="' . $name . '", price="' . $price . '", weight="' . $weight . '", descriptions="' . $description . '", stock="' . $stock . '", thumbnail="' . $thumbnail . '" WHERE id ="' . $id . '"';

               if ($this->dbConnect->query($query)) {
                    echo json_encode(array("message" => "SUCCESS"));
               } else {
                    echo json_encode(array("message" => "FAILURE"));
               }
          } else {

               $query = 'UPDATE products SET category_id="' . $category_id . '", name="' . $name . '", price="' . $price . '", weight="' . $weight . '", descriptions="' . $description . '", stock="' . $stock . '" WHERE id ="' . $id . '"';

               if ($this->dbConnect->query($query)) {
                    echo json_encode(array("message" => "SUCCESS"));
               } else {
                    echo json_encode(array("message" => "FAILURE"));
               }
          }
     }

     public function delete_product()
     {
          $id = isset($_POST['id']) ? $_POST['id'] : die();
          $query = 'DELETE FROM products WHERE id = "' . $id . '"';

          if ($this->dbConnect->query($query)) {
               echo json_encode(array("message" => "SUCCESS"));
          } else {
               echo json_encode(array("message" => "FAILURE"));
          }
     }


     //   Category
     public function get_categories()
     {
          $query = "SELECT * FROM categories";
          $categories = mysqli_fetch_all($this->dbConnect->query($query));

          echo json_encode($categories);
     }
}

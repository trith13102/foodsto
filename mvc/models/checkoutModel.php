<?php

class checkoutModel extends Connect
{
    public function insertNewOrder() {
        // Infor customer
        $id = $_SESSION['id'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $defaultAddress = $_SESSION['address'];
        $address = $_POST['address'];
        $dt = new DateTime("now", new DateTimeZone('Asia/Saigon'));
        $time = $dt->format("Y-m-d H:i:s");
        $note = $_POST['note'];
        // Infor cart
        $amount = $_SESSION['total'];
        $status = false;

        $sql = "INSERT INTO orders (customer_id, amount, shipping_address, order_address, order_email, order_date, order_status, full_name, phone_number, note)
                VALUES ('$id', '$amount', '$defaultAddress', '$address', '$email', '$time', '1', '$name', '$phone', '$note')";
        if($this->dbConnect->query($sql)) 
        {
            $id_order = $this->dbConnect->insert_id;
            $_SESSION['id_order'] = $id_order;
            foreach($_SESSION['cart'] as $product) 
            {
                $id_product = $product['id'];
                $price_product = $product['price'];
                $sku_product = $product['sku'];
                $qty_product = $product['qty'];
                $subtotal_product = $product['subtotal'];

                $sql = "INSERT INTO order_details (order_id, product_id, price, sku, quantity, sub_total)
                        VALUES ('$id_order', '$id_product', '$price_product', '$sku_product', '$qty_product', '$subtotal_product')";
                $this->dbConnect->query($sql);
            }
            unset($_SESSION['cart']);
            $status = true;
        }
        
        return $status;
    }

    public function getOrder() {
        $id = $_SESSION['id_order'] ?? null;
        $sql = "SELECT o.id as id_order,
                        o.order_date as date_order,
                        o.full_name as name_customer,
                        o.order_email as email_customer,
                        o.shipping_address as default_address,
                        o.order_address as order_address,
                        o.amount as order_amount,
                        p.name as name_product,
                        p.thumbnail as thumbnail_product,
                        od.price as price_product,
                        od.sub_total as subtotal_product,
                        od.quantity as qty_product
                FROM order_details od 
                INNER JOIN products p on od.product_id = p.id
                INNER JOIN orders o on o.id = od.order_id
                WHERE o.id = '$id'";

        $result = $this->dbConnect->query($sql);

        $list = array();
        while ($row = $result->fetch_assoc()) {
             array_push($list, $row);
        }

        return $list;
    }

    // send mail

    public function sendMail() {
        $data = $this->getOrder();
        $email = $data[0]['email_customer'] ?? null;
        $sql = "SELECT * FROM account WHERE email= '$email' LIMIT 1";
        $query = mysqli_query($this->dbConnect, $sql);
        $result = false;
        if(mysqli_num_rows($query)>0){
            require 'mail/email.php';
            $mail = new Mailer();
            $template = "mail/templates/template.php";
            $mail->order($email,$template);
            $result = true;

        }
        return $result;

    }
}

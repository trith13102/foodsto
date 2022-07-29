<?php
if (!isset($_SESSION['cart'])) $_SESSION['cart'] = [];

class cartModel extends Controller
{
    public function getID() {
        $id = ($_REQUEST['id']) ?? null;
        return $id;
    }

    public function addToCart()
    {
        $id = $this->getID();
        $subtotal = 0;
        $product = $this->model('detailsModel')->getProductByID();
        $qty = isset($_POST['qty']) ? (int)$_POST['qty'] : 1;
        $subtotal = (float)$qty * $product['price'];

        if (!isset($_SESSION['cart'][$product['id']])) {
            $_SESSION['cart'][$product['id']] = array(
                'id' => (int)$product['id'],
                'sku' => $product['sku'],
                'name' => $product['name'],
                'price' => (float)$product['price'],
                'image' => $product['thumbnail'],
                'qty' => $qty,
                'subtotal' => $subtotal,
            );
        } else {
            $_SESSION['cart'][$product['id']]['qty'] += $qty;
            $this->loadCart($id);
        }

        return $qty;
    }

    public function cart()
    {
        $id = $this->getID();
        // Add To Cart
        if (isset($_GET['add'])) {
            $this->addToCart();
        }
        // Edit cart

        if (isset($_GET['addition']) || isset($_GET['subtraction']) || isset($_GET['remove'])) {
            foreach ($_SESSION['cart'] as $product) {
                if ($product['id'] == $id) {
                    if (isset($_GET['addition'])) {
                        $_SESSION['cart'][$id]['qty']++;
                    } else if (isset($_GET['subtraction'])) {

                        if ($_SESSION['cart'][$id]['qty'] <= 1) {
                            unset($_SESSION['cart'][$id]);
                        } else {
                            $_SESSION['cart'][$id]['qty']--;
                        }
                    } else if (isset($_GET['remove'])) {
                        unset($_SESSION['cart'][$id]);
                    }

                    $this->loadCart($id);
                }
            }
        }

        // Update cart with input qty by keyboard

        if (isset($_POST['update'])) {
            $arrId = $_POST['idProduct'];
            $arrQty = $_POST['qtyProduct'];

            $arrPro = array_combine($arrId, $arrQty);
            foreach ($_SESSION['cart'] as $item) {
                foreach ($arrPro as $id => $qty) {
                    if ($item['id'] == $id) {
                        $_SESSION['cart'][$id]['qty'] = $qty;
                        $this->loadCart($id);
                    }
                }
            }
        }

        return $_SESSION['cart'];
    }

    public function loadCart($id)
    {
        if (isset($_SESSION['cart'][$id])) {
            $_SESSION['cart'][$id]['subtotal'] = $_SESSION['cart'][$id]['qty'] * $_SESSION['cart'][$id]['price'];
        }
    }




}

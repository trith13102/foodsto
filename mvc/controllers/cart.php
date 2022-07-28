<?php
if (!isset($_SESSION['cart'])) $_SESSION['cart'] = [];

class cart extends Controller
{
    public function default()
    {
        $model = $this->model('cartModel');
        $this->view('cartView', ["cart" => $model->cart()]);
    }
}

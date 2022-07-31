<?php
if (!isset($_SESSION['cart'])) $_SESSION['cart'] = [];

class checkout extends Controller
{
    public function default()
    {
        $model = $this->model('checkoutModel');

        if (isset($_POST['submit'])) {
            $status = $model->insertNewOrder();

            if ($status) {
                $this->view('checkoutView', [
                    'page' => 'checkoutSuccess',
                    'result' => $model->getOrder(),
                    // send mail
                    'email' => $model->sendMail()
                ]);
            }
        } else if (sizeof($_SESSION['cart']) > 0 && isset($_SESSION['email'])) {
            $this->view('checkoutView', ['page' => 'checkout',]);
        } else {
            $this->view('cartView', ["cart" => $_SESSION['cart'],]);
        }
    }
}

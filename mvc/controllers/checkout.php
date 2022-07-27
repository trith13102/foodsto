<?php

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
                    'result' => $model->getOrder()
                ]);
            } else {
                $this->view('checkoutView', [
                    'page' => 'checkout',
                ]);
            }
        }

        $this->view('checkoutView', ['page' => 'checkout']);
    }
}

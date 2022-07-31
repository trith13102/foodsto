<?php

class details extends Controller
{
   public function default()
   {
      $model = $this->model('detailsModel');

      if (isset($_POST['insert'])) {
         $infoProduct = $this->model('cartModel')->addToCart();

         $this->view('detailsView', [
            "product" => $model->getProductByID(),
            "category" => $model->getAllProduct(),
            "infoProduct" => $infoProduct
         ]);
      } else {
         $this->view('detailsView', [
            "product" => $model->getProductByID(),
            "category" => $model->getAllProduct()
         ]);
      }
   }
}

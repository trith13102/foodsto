<?php

class adminModel extends Connect
{

     public function check_account()
     {
          header('Access-Control-Allow-Origin: *');
          header('Content-Type: application/json');

          $username = isset($_POST['username']) ? $_POST['username'] : '';
          $password = isset($_POST['password']) ? $_POST['password'] : '';

          $query = 'SELECT password, account_role FROM account WHERE username="' . $username . '" AND password="' . md5($password) . '"';

          $raw = $this->dbConnect->query($query);

          if ($raw->num_rows) {
               echo json_encode(array("message" => "SUCCESS"));
          } else {
               echo json_encode(array("message" => "FAILURE"));
          }
     }
}

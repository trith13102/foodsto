<?php

class UserModel extends Connect
{
   public function InsertNewUser($email, $password)
   {
      $qr = "Insert into account (email, password) values ('$email','$password') ";
      $result = false;
      if (mysqli_query($this->dbConnect, $qr)) {
         $result = true;

         if (!isset($_SESSION['is_logged_in'])) {
            $_SESSION['is_logged_in'] = 1;
         }

         if (!isset($_SESSION['email'])) {
            $_SESSION['email'] = $email;
         }
         if (!isset($_SESSION['password'])) {
            $_SESSION['password'] = $password;
         }
      }
      return json_encode($result);
   }

   public function CheckUserValid($email, $password)
   {
      $qr = "SELECT * From account WHERE email='$email'LIMIT 1";
      $result = false;
      $row = mysqli_query($this->dbConnect, $qr);
      $count = mysqli_num_rows($row);
      $row_data =  mysqli_fetch_array($row);

      if ($count > 0) {
         if (password_verify($password, $row_data['password'])) {
            $result = true;
            $this->UserLogin($row_data);
         }
         return json_encode($result);
      }
   }

   public function UserLogin($user){
      if (!isset($_SESSION['is_logged_in'])) {
         $_SESSION['is_logged_in'] = 1;
      }
      if (!isset($_SESSION['email'])) {
         $_SESSION['email'] = $user['email'];
      }
      if (!isset($_SESSION['password'])) {
         $_SESSION['password'] = $user['password'];
      }

      if (!isset($_SESSION['id'])) {
         $_SESSION['id'] =  $user['id'];
      }
      if (!isset($_SESSION['fullname'])) {
         $_SESSION['fullname'] =  $user['fullname'];
      }
   }
}

<?php
class Login extends Controller
{
    public $userModel;

    public function __construct()
    {
        $this->userModel = $this->model('userModel');
    }

    public function default()
    {
        if (isset($_POST["btn_login"])) {
            // get data
            $email = $_POST["email"];
            $password = $_POST["password"];


            // check db
            $result = $this->userModel->CheckUserValid($email, $password);


            // show result
            $this->view(
                "loginView",
                [
                    "page" => "loginPage",
                    "result" => $result
                ]
            );
        } else {
            $this->view(
                "loginView",
                [
                    "page" => "loginPage",
                ]
            );
        }
    }

    public function signup()
    {
        if (isset($_POST["btn_signup"])) {
            // get data
            $email = $_POST["email"];
            $password = $_POST["password"];
            $password = password_hash($password, PASSWORD_DEFAULT);

            // insert db
            $result = $this->userModel->InsertNewUser($email, $password);

            // show result
            $this->view(
                "loginView",
                [
                    "page" => "signupPage",
                    "result" => $result
                ]
            );
        } else {
            $this->view(
                "loginView",
                [
                    "page" => "signupPage"
                ]
            );
        }
    }

    public function lostPass()
    {
        if (isset($_POST['lost_pass'])&&!$_POST['lost_pass']=="") {
            $this->view(
                "loginView",
                [
                    "page" => "lostPassPage",
                    "lostPass" => $this->userModel->forgotPass()
                ]
            );
        } else {
            $this->view(
                "loginView",
                [
                    "page" => "lostPassPage"
                ]
            );
        }
    }

    public function loginView()
    {
    }
}

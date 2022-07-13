<?php
class Login extends Controller
{
    public function default()
    {
        $this->view(
            "loginView",
            [
                "page" => "loginForm"
            ]
        );
    }

    public function signup()
    {
        $this->view(
            "loginView",
            [
                "page" => "signupForm"
            ]
        );
    }

    public function lostPass()
    {
        $this->view(
            "loginView",
            [
                "page" => "lostPassForm"
            ]
        );
    }
}

<?php

class admin extends Controller
{
    public function default()
    {
        $model = $this->model('adminModel');

        // $account = $_SESSION['3ddb21101df030bb5b00220dc7c6933a'] ? $_SESSION['3ddb21101df030bb5b00220dc7c6933a'] : "";

        $account = '';

        if ($account) {
            $this->view('adminView', [
                'page' => 'dashboard',
            ]);
        } else {
            $this->view('adminLogin', []);
        }
    }
}

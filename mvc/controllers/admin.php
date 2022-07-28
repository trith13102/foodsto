<?php



class admin extends Controller
{
    // private $protocol = 'https://foodsto.shop/';
    private $protocol = 'http://localhost/foodsto/';

    public function check_account()
    {
        $username = isset($_POST['username']) ? $_POST['username'] : die();
        $password = isset($_POST['password']) ? $_POST['password'] : die();

        $model = $this->model('adminModel');
        $model->check_account();
    }

    public function login()
    {
        $username = isset($_POST['username']) ? $_POST['username'] : die();
        $password = isset($_POST['password']) ? $_POST['password'] : die();

        $_SESSION['3ddb21101df030bb5b00220dc7c6933a'] = md5("SUCCESS");

        header('Location: ' . $this->protocol . 'admin');
    }

    public function logout()
    {
        if (isset($_SESSION['3ddb21101df030bb5b00220dc7c6933a'])) {
            unset($_SESSION['3ddb21101df030bb5b00220dc7c6933a']);
        }

        header('Location: ' . $this->protocol . 'admin');
    }

    public function default($page = 'dashboard')
    {
        $account = isset($_SESSION['3ddb21101df030bb5b00220dc7c6933a']) ? $_SESSION['3ddb21101df030bb5b00220dc7c6933a'] : "";

        if ($account) {
            $this->view('adminView', [
                'page' => $page
            ]);
        } else {
            $this->view('adminLogin', []);
        }
    }
}

<?php



class admin extends Controller
{
    // private $protocol = 'https://foodsto.shop/';
    private $protocol = 'http://localhost/foodsto/';

    //  Login and Logout
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

    //  CRUD Database
    public function crud($method)
    {
        header('Access-Control-Allow-Origin: *');
        header('Content-Type: application/json');

        $model = $this->model("adminModel");

        if (method_exists($model, $method)) {
            $model->$method();
        } else {
            die();
        }
    }

    //  Default
    public function default()
    {
        $account = isset($_SESSION['3ddb21101df030bb5b00220dc7c6933a']) ? $_SESSION['3ddb21101df030bb5b00220dc7c6933a'] : "";

        if ($account) {
            $model = $this->model('adminModel');
            $this->view('adminView', [
                'page' => 'dashboard',
                'summary' => $model->get_summary()
            ]);
        } else {
            $this->view('adminLogin', []);
        }
    }

    //  Dashboard
    public function dashboard()
    {
        $account = isset($_SESSION['3ddb21101df030bb5b00220dc7c6933a']) ? $_SESSION['3ddb21101df030bb5b00220dc7c6933a'] : "";

        if ($account) {
            $model = $this->model('adminModel');
            $this->view('adminView', [
                'page' => 'dashboard',
                'summary' => $model->get_summary()
            ]);
        } else {
            $this->view('adminLogin', []);
        }
    }

    //  Account
    public function account()
    {
        $account = isset($_SESSION['3ddb21101df030bb5b00220dc7c6933a']) ? $_SESSION['3ddb21101df030bb5b00220dc7c6933a'] : "";

        if ($account) {
            $this->view('adminView', [
                'page' => 'account'
            ]);
        } else {
            $this->view('adminLogin', []);
        }
    }

    //  Order
    public function order()
    {
        $account = isset($_SESSION['3ddb21101df030bb5b00220dc7c6933a']) ? $_SESSION['3ddb21101df030bb5b00220dc7c6933a'] : "";

        if ($account) {
            $this->view('adminView', [
                'page' => 'order'
            ]);
        } else {
            $this->view('adminLogin', []);
        }
    }


    //  Discount
    public function discount()
    {
        $account = isset($_SESSION['3ddb21101df030bb5b00220dc7c6933a']) ? $_SESSION['3ddb21101df030bb5b00220dc7c6933a'] : "";

        if ($account) {
            $this->view('adminView', [
                'page' => 'discount'
            ]);
        } else {
            $this->view('adminLogin', []);
        }
    }

    //  Product
    public function product()
    {
        $account = isset($_SESSION['3ddb21101df030bb5b00220dc7c6933a']) ? $_SESSION['3ddb21101df030bb5b00220dc7c6933a'] : "";

        if ($account) {
            $this->view('adminView', [
                'page' => 'product'
            ]);
        } else {
            $this->view('adminLogin', []);
        }
    }

    //  Category
    public function category()
    {
        $account = isset($_SESSION['3ddb21101df030bb5b00220dc7c6933a']) ? $_SESSION['3ddb21101df030bb5b00220dc7c6933a'] : "";

        if ($account) {
            $this->view('adminView', [
                'page' => 'category'
            ]);
        } else {
            $this->view('adminLogin', []);
        }
    }
}

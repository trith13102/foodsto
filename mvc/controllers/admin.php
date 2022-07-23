<?php

class admin extends Controller
{
    public function default($page = 'dashboard')
    {
        $model = $this->model('adminModel');

        $this->view('adminView', [
            'page' => 'dashboard',
        ]);
    }

    public function dashboard()
    {
        $model = $this->model('adminModel');

        $this->view('adminView', [
            'page' => 'dashboard',
        ]);
    }

    public function category()
    {
        $model = $this->model('adminModel');

        $this->view('adminView', [
            'page' => 'category',
        ]);
    }

    public function account()
    {
        $model = $this->model('adminModel');

        $this->view('adminView', [
            'page' => 'account',
        ]);
    }

    public function product()
    {
        $model = $this->model('adminModel');

        $this->view('adminView', [
            'page' => 'product',
        ]);
    }

    public function discount()
    {
        $model = $this->model('adminModel');

        $this->view('adminView', [
            'page' => 'discount',
        ]);
    }

    public function orders()
    {
        $model = $this->model('adminModel');

        $this->view('adminView', [
            'page' => 'orders',
        ]);
    }
    
    public function addNewCategory($folder = null)
    {
        $model = $this->model('adminModel');

        if ($model->addNewCategory($folder)) {
            exit(header("Location: http://" . $_SERVER['HTTP_HOST'] . '/foodsto/admin/default/category'));
            // exit(header("Location: https://" . $_SERVER['HTTP_HOST'] . '/admin/default/category'));
        } else {
            echo "Error!";
        }
    }

    public function crud($method = null)
    {
        header('Content-Type: application/json');
        $model = $this->model('adminModel');
        switch ($method) {
            case 'get_category':
                $model->get_category();
                break;
            default:
                $data = array(
                    'message' => 'Not select method yet!',
                );

                echo json_encode($data, JSON_UNESCAPED_UNICODE);
                break;
        }
    }
}

<?php

class admin extends Controller
{
    public function default($page = 'dashboard')
    {
        $model = $this->model('adminModel');

        $pageData = [$page];
        switch ($page) {
            case 'category':
                break;
            case 'account':
                break;
            case 'product':
                break;
            case 'discount':
                break;
            default:
                break;
        }

        $this->view('adminView', [
            'pageData' => $pageData,
        ]);
    }

    public function addNewCategory($folder = null)
    {
        $model = $this->model('adminModel');

        if ($model->addNewCategory($folder)) {
            // exit(header("Location: http://" . $_SERVER['HTTP_HOST'] . '/foodsto/admin/default/category'));
            exit(header("Location: https://" . $_SERVER['HTTP_HOST'] . '/admin/default/category'));
        } else {
            echo "Error!";
        }
    }
}

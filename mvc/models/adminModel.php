<?php

class adminModel extends Connect
{
    // Category methods
    public function get_categories()
    {
        header('Content-Type: application/json; charset=utf-8');

        $query = 'SELECT * FROM categories';
        $raw = $this->dbConnect->query($query);

        if ($raw->num_rows) {
            $categories = [];
            while ($category = $raw->fetch_assoc()) {
                array_push($categories, $category);
            }

            echo json_encode($categories, JSON_UNESCAPED_UNICODE);
        } else {
            echo json_encode(array('message' => 'NOT_FOUND'));
        }
    }

    public function find_category()
    {
        header('Content-Type: application/json; charset=utf-8');

        $category = isset($_POST['category']) ? $_POST['category'] : die('NOT_ENOUGH_PARAMETERS');

        $query = 'SELECT COUNT(id) AS COUNT FROM categories WHERE name LIKE "' . $category . '" ';
        $raw = $this->dbConnect->query($query);

        if ($raw->fetch_assoc()['COUNT']) {
            echo json_encode(array('message' => 'ALREADY_EXISTS'));
            return json_encode(array('message' => 'ALREADY_EXISTS'));
        } else {
            echo json_encode(array('message' => 'NOT_FOUND'));
            return
                json_encode(array('message' => 'NOT_FOUND'));
        }
    }

    public function add_category()
    {
        header('Content-Type: application/json; charset=utf-8');

        $name = isset($_POST['name']) ? $_POST['name'] : die('NOT_ENOUGH_PARAMETERS');
        $description = isset($_POST['description']) ? $_POST['description'] : die('NOT_ENOUGH_PARAMETERS');
        $thumbnail = isset($_POST['thumbnail']) ? $_POST['thumbnail'] : die('NOT_ENOUGH_PARAMETERS');

        $query = 'SELECT COUNT(id) AS COUNT FROM categories WHERE name LIKE "' . $name . '" ';
        $raw = $this->dbConnect->query($query);

        if ($raw->fetch_assoc()['COUNT']) {
            echo json_encode(array('message' => 'ALREADY_EXISTS'));
        } else {
            $imagedUploaded = $this->uploadImage($thumbnail, 'category');

            $query = 'INSERT INTO categories (name, description, thumbnail) VALUES ("' . $name . '", "' . $description . '", "' . $imagedUploaded . '")';

            if ($this->dbConnect->query($query)) {
                echo json_encode(array('message' => 'SUCCESS'));
            } else {
                echo json_encode(array('message' => 'FAIL'));
            }
        }
    }

    public function update_category()
    {
        header('Content-Type: application/json; charset=utf-8');

        $id = isset($_POST['id']) ? $_POST['id'] : die('NOT_ENOUGH_PARAMETERS');
        $name = isset($_POST['name']) ? $_POST['name'] : die('NOT_ENOUGH_PARAMETERS');
        $description = isset($_POST['description']) ? $_POST['description'] : die('NOT_ENOUGH_PARAMETERS');
        $thumbnail = isset($_POST['thumbnail']) ? $_POST['thumbnail'] : die('NOT_ENOUGH_PARAMETERS');

        $imagedUploaded = $this->uploadImage($thumbnail, 'category');



        $query = 'UPDATE categories SET name="' . $name . '", description="' . $description . '", thumbnail="' . $imagedUploaded . '" WHERE id="' . $id . '"';

        if ($this->dbConnect->query($query)) {
            echo json_encode(array('message' => 'SUCCESS'));
        } else {
            echo json_encode(array('message' => 'FAIL'));
        }
    }

    public function delete_category()
    {
        header('Content-Type: application/json; charset=utf-8');

        $id = isset($_POST['id']) ? $_POST['id'] : die('NOT_ENOUGH_PARAMETERS');

        $query = 'DELETE FROM categories WHERE id="' . $id . '"';

        if ($this->dbConnect->query($query)) {
            echo json_encode(array('message' => 'SUCCESS'));
        } else {
            echo json_encode(array('message' => 'FAIL'));
        }
    }
}

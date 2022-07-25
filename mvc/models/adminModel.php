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

            echo json_encode($categories);
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

        if ($raw->num_rows) {
            echo json_encode(array('message' => 'ALREADY_EXISTS'));
        } else {
            echo json_encode(array('message' => 'NOT_FOUND'));
        }
    }

    public function add_category()
    {
        header('Content-Type: application/json; charset=utf-8');

        $name = isset($_POST['name']) ? $_POST['name'] : die('NOT_ENOUGH_PARAMETERS');
        $description = isset($_POST['description']) ? $_POST['description'] : die('NOT_ENOUGH_PARAMETERS');
        $thumbnail = isset($_POST['thumbnail']) ? $_POST['thumbnail'] : die('NOT_ENOUGH_PARAMETERS');

        $imagedUploaded = $this->uploadImage($thumbnail, 'category');
        // $secure_url = $imagedUploaded['secure_url'];
        // $public_id = $imagedUploaded['public_id'];

        // $query = 'INSERT INTO categories (name, description, thumbnail, thumbnail_public_id) VALUES ("' . $name . '", "' . $description . '", "' . $secure_url . '", "' . $public_id . '")';

        // if ($this->dbConnect->query($query)) {
        //     echo json_encode(array('message' => 'SUCCESS'));
        // } else {
        //     echo json_encode(array('message' => 'FAIL'));
        // }
    }

    public function update_category()
    {
        header('Content-Type: application/json; charset=utf-8');

        $id = isset($_POST['id']) ? $_POST['id'] : die('NOT_ENOUGH_PARAMETERS');
        $name = isset($_POST['name']) ? $_POST['name'] : die('NOT_ENOUGH_PARAMETERS');
        $description = isset($_POST['description']) ? $_POST['description'] : die('NOT_ENOUGH_PARAMETERS');
        $thumbnail = isset($_POST['thumbnail']) ? $_POST['thumbnail'] : die('NOT_ENOUGH_PARAMETERS');

        // $thumbnail = $this->uploadImage($thumbnail, 'category');

        $query = 'UPDATE categories SET name="' . $name . '", description="' . $description . '", thumbnail="' . $thumbnail . '" WHERE id="' . $id . '"';

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

        $query = 'SELECT thumbnail_public_id FROM categories WHERE id="' . $id . '"';
        $raw = $this->dbConnect->query($query);

        $publicId = $raw->fetch_assoc()['thumbnail_public_id'];
        $status = $this->deleteImage($publicId);

        $query = 'DELETE FROM categories WHERE id="' . $id . '"';

        if ($this->dbConnect->query($query)) {
            echo json_encode(array('message' => 'SUCCESS'));
        } else {
            echo json_encode(array('message' => 'FAIL'));
        }
    }

    public function get_images()
    {
        $publicId = isset($_POST['public_id']) ? $_POST['public_id'] : die("NOT POST");
        $image = $this->getImage($publicId);

        echo json_encode($image);
    }

    public function delete_image()
    {
        $publicId = isset($_POST['public_id']) ? $_POST['public_id'] : die("NOT POST");
        $status = $this->deleteImage($publicId);

        echo json_encode($status);
    }

    public function hello_world()
    {
        echo json_encode(array("message" => "Hello Nguyễn Mạnh Đức"));
    }
}

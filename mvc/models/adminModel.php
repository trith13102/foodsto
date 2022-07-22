<?php

class adminModel extends Connect
{
    public function getCategories()
    {
        $query = "SELECT id, name, description, thumbnail FROM categories ORDER BY id DESC";
        $raw = $this->dbConnect->query($query);

        $categories = [];
        while ($category = $raw->fetch_assoc()) {
            array_push($categories, $category);
        }

        echo json_encode($categories, JSON_UNESCAPED_UNICODE);
    }

    public function addNewCategory($folder)
    {
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $description = isset($_POST['description']) ? $_POST['description'] : '';
        $local_thumbnail = isset($_FILES['thumbnail']['tmp_name']) ? $_FILES['thumbnail']['tmp_name'] : '';
        $thumbnail = $this->uploadImage($local_thumbnail, $folder);

        $query = "INSERT INTO categories(name, description, thumbnail) VALUES(?, ?, ?)";
        $stmt = $this->dbConnect->prepare($query);

        $stmt->bind_param("sss", $name, $description, $thumbnail);


        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function get_category()
    {
        $query = "SELECT * FROM categories ORDER BY id DESC";
        $stmt = $this->dbConnect->prepare($query);
        $stmt->execute();

        $data = [];
        $data['status'] = '';
        $data['categories'] = [];

        if ($raw = $stmt->get_result()) {
            $data['status'] = 'success';
            while ($row = $raw->fetch_assoc()) {
                array_push($data['categories'], $row);
            }
        } else {
            $data['status'] = 'fail';
        }

        echo json_encode($data, JSON_UNESCAPED_UNICODE);
    }
}

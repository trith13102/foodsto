<?php

class adminModel extends Connect
{
    public function getCategories()
    {
        $query = 'SELECT ten_dmuc FROM danhmuc_sp';
        $raw = $this->dbConnect->query($query);

        $categories = [];
        while ($category = $raw->fetch_assoc()) {
            array_push($categories, $category);
        }

        return $categories;
    }
}

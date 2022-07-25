<?php

require 'vendor/autoload.php';

use Cloudinary\Api\Admin\AdminApi;
use Cloudinary\Api\Upload\UploadApi;
use Cloudinary\Configuration\Configuration;

Configuration::instance([
    'cloud' => [
        'cloud_name' => 'foodstocloud',
        'api_key' => '941254623563878',
        'api_secret' => '9W0sxZv5D5rV_3akmXA59mf8tuk'
    ],
    'url' => [
        'secure' => true
    ]
]);

class Connect
{
    public $dbConnect;
    protected $dbServerName = 'us-cdbr-east-06.cleardb.net';
    protected $dbUserName = 'b5e4d828933364';
    protected $dbPassword = 'a029f711';
    protected $dbDatabase = 'heroku_7f443bd7de21c6c';

    public function __construct()
    {
        $this->dbConnect = new mysqli(
            $this->dbServerName,
            $this->dbUserName,
            $this->dbPassword,
            $this->dbDatabase
        );
        $this->dbConnect->query("SET NAMES 'utf8'");
    }

    public function uploadImage($image, $folder)
    {
        $folder = $folder == null ? '' : $folder;

        $result = (new AdminApi())->assetsByIds("category/h9qju5o9fy7bgwysgvxw");

        // $response = (new UploadApi())->upload($image, [
        //     'folder' => $folder,
        //     'public_id' => md5_file($image)
        // ]);

        // return array(
        //     'secure_url' => $response['secure_url'],
        //     'public_id' => $response['public_id'],
        // );
        // print_r($response);
        print_r($result);
    }

    public function getImage($publicID)
    {
        $result = (new AdminApi())->asset($publicID);
        return $result;
    }

    public function deleteImage($publicID)
    {
        $result = (new AdminApi())->deleteAssets($publicID);
        return $result;
    }
}

//  b5e4d828933364:a029f711@us-cdbr-east-06.cleardb.net/heroku_7f443bd7de21c6c?reconnect=true

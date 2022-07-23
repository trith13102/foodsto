<?php

require 'vendor/autoload.php';

use Cloudinary\Configuration\Configuration;
use Cloudinary\Api\Upload\UploadApi;

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
        $uploadImage = (new UploadApi())->upload($image, [
            'folder' => $folder
        ]);

        return $uploadImage['secure_url'];
    }
}

//  b5e4d828933364:a029f711@us-cdbr-east-06.cleardb.net/heroku_7f443bd7de21c6c?reconnect=true

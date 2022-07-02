<?php

     class Connect
     {
         public $dbConnect;
         protected $dbServerName = 'us-cdbr-east-06.cleardb.net';
         protected $dbUserName = 'b115f2a219fd1c';
         protected $dbPassword = '4e8d35b7';
         protected $dbDatabase = 'heroku_4b22686e36dd386';

         public function __construct()
         {
             $this->dbConnect = new mysqli($this->dbServerName,
               $this->dbUserName,
               $this->dbPassword,
               $this->dbDatabase
            );
             $this->dbConnect->query("SET NAMES 'utf8'");
         }
     }

    //  b115f2a219fd1c:4e8d35b7@us-cdbr-east-06.cleardb.net/heroku_4b22686e36dd386?reconnect=true

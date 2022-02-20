<?php

namespace Naimur;

use PDO;

class Category
{
    public $id = null;
    public $conn = null;
    public function __construct()
    {

        $this->conn = new PDO("mysql:host=localhost;dbname=ecommerce", 'root', '');
        // set the PDO error mode to exception
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    public function Filter(){


    }
}
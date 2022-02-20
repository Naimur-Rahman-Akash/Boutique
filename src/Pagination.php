<?php

namespace Naimur;

use PDO;
class Pagination{
    
    public $conn = null;
    public function __construct()
    {

        $this->conn = new PDO("mysql:host=localhost;dbname=ecommerce", 'root', '');
        // set the PDO error mode to exception
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function page(){

        $this->perPage =12;

    // Calculate Total pages
    $stmt = $this->conn->query('SELECT count(*) FROM Product');
    $total_results = $stmt->fetchColumn();
    $total_pages = ceil($total_results / $this->perPage);
    return $total_pages;
    }
    
    public function pagi($page){
    

    // Current page
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $starting_limit = ($page - 1) * $this->perPage;

    // Query to fetch users
    $query = "SELECT * FROM Product WHERE is_active = 1  LIMIT $starting_limit,$this->perPage";

    // Fetch all users for current page
    $product = $this->conn->query($query)->fetchAll();
    return $product;
    }}
    
    

?>
<?php
if (session_status() == 
PHP_SESSION_NONE){

session_start();
}

$approot = $_SERVER['DOCUMENT_ROOT']. "/Boutique/";
$webroot ="http://localhost/Boutique/";

include_once ($approot. "vendor/autoload.php");
<?php

include_once ($_SERVER['DOCUMENT_ROOT']. "/crud/config.php");

use Bitm\Banner;

$data = $_POST;
function is_empty ($value)
{
    if ($value == ''){
    return true;
}else{
   return false; 
}
}
if (is_empty($data['title'])){
    session_start();
    echo $_SESSION['message'] = "Title cant be empty";
    header('location:create.php');
}
else {
$_banner = new Banner();
$_banner->Store($data);
}


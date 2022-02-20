<?php

include_once($_SERVER['DOCUMENT_ROOT'] . "/Boutique/config.php");
?>
<!DOCTYPE html>
<html>

<head>
    <?php
include_once('../views/elements/head.php');

?>
    <link rel="stylesheet" href="http://localhost/crud/font/public/material-icon/style.css">
</head>

<body>
    <?php

include_once('../views/elements/header.php');
?>
    <div class="main">


        <?php
         
        include_once('../views/elements/sign_up_form.php');
       
        include_once('../views/elements/script.php');

        ?>
    </div>
</body>

</html>
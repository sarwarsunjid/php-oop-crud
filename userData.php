<?php
    include ("user.php");
    //print_r($_POST['username']); //for print array data 
    //echo $_POST['username']; 
    $obj = new User();
    $obj->prepare($_POST);
    $obj->insert();
?>
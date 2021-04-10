<?php
include "user.php";
$obj = new User();
$obj->prepare($_GET);
$data = $obj->delete();

?>
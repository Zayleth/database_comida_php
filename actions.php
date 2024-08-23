<?php 
require "clases.php";  
extract($_POST);
$chivo=new User;
$chivo->guardarcomidas($name, $price, $status);
?>
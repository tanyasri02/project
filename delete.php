<?php
include 'p.php';
$id = $_GET['id'];

$q = " DELETE FROM 'table' where id=$id";
mysqli_query($p,$q);
header('location:display.php');

?>
<?php
session_start();
include_once "config.php";
$ngrupo=$_POST['ngrupo'];


$insert_query = mysqli_query($conn, "INSERT INTO grupos (nombre_grupo)VALUES ('{$ngrupo}')");

?>
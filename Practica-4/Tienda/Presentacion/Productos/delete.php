<?php
require_once "Negocio/productos.php";

$productos = new Productos();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$productos->delete($_GET['id']);

echo "<script>location.replace('index.php?mod=&form=li')</script>";

?>
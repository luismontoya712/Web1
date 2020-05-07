<?php
$server="127.0.0.1";
$user="root";
$password='';
$database="GestionCitas";

$conexion= new mysqli("127.0.0.1","root","","GestionCitas");


if ($conexion->connect_error){
    die($conexion->connect_error);

}
?>
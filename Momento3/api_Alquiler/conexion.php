<?php
$server="127.0.0.1";
$user="root";
$password='';
$database="AlquilerVivienda";

$conexion= new mysqli($server,$user,$password,$database);


if ($conexion->connect_error){
    die($conexion->connect_error);

}
?>
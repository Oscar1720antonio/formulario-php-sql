<?php
include '../CONEXION/conection.php';
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$puesto = $_POST['puesto'];
$estado = $_POST['estado'];


$sql = "UPDATE empleado SET nombre='".$nombre."', puesto='".$puesto."', estado='".$estado."', update_at=now() WHERE id=".$id;
if($resultado = $conn->query($sql)){
    header('Location: index.php');
}else{
    die("Connection failed: " . $conn->connect_error);
}
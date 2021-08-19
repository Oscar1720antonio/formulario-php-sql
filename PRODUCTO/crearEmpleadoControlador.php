<?php
include '../CONEXION/conection.php';

$nombre = $_POST['nombre'];
$puesto = $_POST['puesto'];
$vacuna = $_POST['vacuna'];
$pri_dosis = $_POST['pri_dosis'];
$seg_dosis = $_POST['seg_dosis'];
$estado = $_POST['estado'];


$sql = "INSERT INTO empleado (nombre, puesto, vacuna, pri_dosis, seg_dosis, estado)
                    VALUES ('$nombre', '$puesto', '$vacuna', '$pri_dosis', now(), '$estado')";

if($resultado = $conn->query($sql)){
    header('Location: index.php');
}else{
    die("Connection failed: " . $conn->connect_error);
}
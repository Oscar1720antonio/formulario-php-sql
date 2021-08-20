<?php
include '../CONEXION/conection.php';

$nombre = isset($_POST["nombre"]) ? $_POST["nombre"]:"";
$puesto = isset($_POST["puesto"]) ? $_POST["puesto"]:"";
$vacuna = isset($_POST["vacuna"]) ? $_POST["vacuna"]:"";
$pri_dosis = isset($_POST["pri_dosis"]) ? $_POST["pri_dosis"]:"";
$seg_dosis = isset($_POST["seg_dosis"]) ? $_POST["seg_dosis"]:"";
$estado = isset($_POST["estado"]) ? $_POST["estado"]:"";
$seg_dosistr = "";

if( !(isset($pri_dosis) && empty ($pri_dosis)) ){
    
    $seg_dosis=new DateTime ($pri_dosis);

    switch($vacuna){
        case "Sinopharm": $seg_dosis->modify ('+28 day'); break;
        case "AstraZeneca": $seg_dosis->modify ('+56 day'); break;
        case "Sputnik": $seg_dosis->modify ('+60 day'); break;
        case "Pfizer": $seg_dosis->modify ('+21 day'); break;
        case "Moderna": $seg_dosis->modify ('+28 day'); break;
        case "Janssen": $seg_dosis->modify ('+1 day'); break;
        default: $seg_dosis = new DateTime();
    }
    $seg_dosistr = $seg_dosis->format('Y-m-d');
} 


$sql = "INSERT INTO empleado (nombre, puesto, vacuna, pri_dosis, seg_dosis, estado)
                    VALUES ('$nombre', '$puesto', '$vacuna', '$pri_dosis', '$seg_dosistr', '$estado')";

if($resultado = $conn->query($sql)){
    header('Location: index.php');
}else{
    die("Connection failed: " . $conn->connect_error);
}
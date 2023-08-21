<?php
include("connection.php");


$con = connection();

$id_detalle = null;
$numero_solicitud = 1;
$nombre_producto = $_POST['nombre_producto'];
$especificaciones = $_POST['especificaciones'];
$unidad_medida = $_POST['unidad_medida'];
$cantidad = $_POST['cantidad'];
$razon_requerimiento = $_POST['razon_requerimiento'];
$coordinador = '';
$estado = '';

$sql = "INSERT INTO detalle_solicitud VALUES(
'$id_detalle',
'$numero_solicitud',
'$nombre_producto',
'$especificaciones',
'$unidad_medida',
'$cantidad',
'$razon_requerimiento',
'$coordinador',
'$estado')";

$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: ../views/solicitudes.view.php");
} else {
    echo "Error al Crear nueva solicitud";
}

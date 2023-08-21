<?php
include("connection.php");

$con = connection();

/* $fecha_hoy = date("d-m-Y h:i:s"); */
$estado_inicial = 1;

$ID_Solicitud = null;
$Fecha_Creacion = $_POST['Fecha_Creacion'];
$Correo_Usuario = $_POST['Correo_Usuario'];
$Fecha_Entrega = $_POST['Fecha_Entrega'];
$Descripcion = $_POST['Descripcion'];
$Tipo = $_POST['Tipo'];
$Estado = $estado_inicial;
$Categoria = $_POST['Categoria'];
$Clase = $_POST['Clase'];

$sql = "INSERT INTO solicitudes_compras VALUES('$ID_Solicitud','$Fecha_Creacion','$Correo_Usuario','$Fecha_Entrega','$Descripcion','$Tipo', '$Estado', '$Categoria', '$Clase' )";

$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: ../views/solicitudes.view.php");
} else {
    echo "error al crear nueva solicitud";
}

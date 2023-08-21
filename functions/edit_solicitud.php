<?php
include("connection.php");
$con = connection();

$ID_Solicitud = $_POST['ID_Solicitud'];
$Fecha_Creacion = $_POST['Fecha_Creacion'];
$Correo_Usuario = $_POST['Correo_Usuario'];
$Fecha_Entrega = $_POST['Fecha_Entrega'];
$Descripcion = $_POST['Descripcion'];
$Tipo = $_POST['Tipo'];
$Estado = $_POST['Estado'];
$Categoria = $_POST['Categoria'];
$Clase = $_POST['Clase'];

$sql = "UPDATE solicitudes_compras SET
Fecha_Creacion='$Fecha_Creacion',
Correo_Usuario='$Correo_Usuario',
Fecha_Entrega='$Fecha_Entrega',
Descripcion='$Descripcion',
Tipo='$Tipo',
Estado='$Estado',
Categoria='$Categoria',
Clase='$Clase'
WHERE ID_Solicitud='$ID_Solicitud' ";

$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: ../views/solicitudes.view.php");
} else {
    echo "Error al modificar la solicitud ";
}

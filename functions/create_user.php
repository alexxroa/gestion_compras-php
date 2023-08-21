<?php
include("connection.php");
$con = connection();

$ID_Usuario = null;
$Nombre_Usuario = $_POST['Nombre_Usuario'];
$Correo = $_POST['Correo'];
$Contraseña = $_POST['Contraseña'];
$Contraseñahash = hash('sha512', $Contraseña);
$Area = $_POST['Area'];
$Rol = $_POST['Rol'];


$sql = "INSERT INTO usuarios VALUES('$ID_Usuario','$Nombre_Usuario','$Correo', '$Contraseñahash', '$Area', '$Rol')";

$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: ../views/administracion.view.php");
} else {
    echo "error al crear nuevo usuario";
}

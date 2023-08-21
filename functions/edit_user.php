<?php
include("connection.php");
$con = connection();

$ID_Usuario = $_POST['ID_Usuario'];
$Nombre_Usuario = $_POST['usuario'];
$Correo = $_POST['Correo'];
$Contraseña = $_POST['pass'];
$Contraseñahash = hash('sha512', $Contraseña);
$Area = $_POST['Area'];
$Rol = $_POST['Rol'];


$sql = "UPDATE usuarios SET usuario='$Nombre_Usuario', Correo='$Correo', pass='$Contraseñahash', Area='$Area', Rol='$Rol' WHERE ID_Usuario='$ID_Usuario' ";
$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: ../views/administracion.view.php");
} else {
    echo "Error al Modificar el Usuario";
}

<?php
include("connection.php");
$con = connection();

$ID_Usuario = $_GET['ID_Usuario'];

$sql = "DELETE FROM usuarios WHERE ID_Usuario='$ID_Usuario'";
$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: ../views/administracion.view.php");
} else {
    echo "Error al Eliminar el Usuario";
}

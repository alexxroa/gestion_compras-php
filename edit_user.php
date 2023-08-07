<?php
    include("./database/connection.php");
    $con = connection();

    $ID_Usuario =$_POST['ID_Usuario'];
    $Nombre_Usuario =$_POST['Nombre_Usuario'];
    $Correo = $_POST['Correo'];
    $Contraseña =$_POST['Contraseña'];
    $Area =$_POST['Area'];
    $Rol =$_POST['Rol'];


    $sql="UPDATE usuarios SET Nombre_Usuario='$Nombre_Usuario', Correo='$Correo', Contraseña='$Contraseña', Area='$Area', Rol='$Rol' WHERE ID_Usuario='$ID_Usuario' ";
    $query =mysqli_query($con, $sql);

    if($query){
        header("Location: administracion.php");
    }else{
        echo "Error al Modificar el Usuario";
    }
?>
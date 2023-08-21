<?php
include("navbar.admin.php");
include("../database/connection.php");
$con = connection();



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/estilos_administracion.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Crear Solicitud</title>

</head>

<body>
    <br>
    <h3 class="titulo_administracion">Crear Nuevo Articulo</h1>
        <!-- formulario para ingresar nuevo usuario -->
        <br>

        <!-- Solicitudes de compras -->

        <section class="Crear">
            <div class="titulo_crear">
                <br>
                <h4>Ingresar Nuevo Articulo a La Solicitud</h4>
                <br>
                <h5>Diligencie los siguientes espacios de acuerdo con su requerimiento</h5>
            </div>
            <br>
            <br>

            <div class="d-flex aling-content-center flex-row justify-content-center">
                <div class="contenedor6">
                    <form action="../functions/create_articulo.php" method="POST">
                        <label class="form-label numero_solicitud">Ingrese el Nombre del Producto</label>
                        <input type="text" class="form-control" name="nombre_producto">
                        <br>
                        <label class="form-label numero_solicitud">Ingrese las Especificaciones del producto</label>
                        <input type="text" class="form-control" name="especificaciones">
                        <br>
                        <label class="form-label numero_solicitud">Ingrese la Unidad de Medida</label>
                        <input type="text" class="form-control" name="unidad_medida">
                        <br>
                        <label class="form-label numero_solicitud">Ingrese la Cantidad Requerida</label>
                        <input type="text" class="form-control" name="cantidad">
                        <br>
                        <label class="form-label numero_solicitud">Ingrese la Razon por la que se requiere el producto</label>
                        <input type="text" class="form-control" name="razon_requerimiento">
                        <br>
                        <button type="submit" class="btn btn-dark">Ingresar</button>
                    </form>
                </div>



                <!-- Link boostrap -->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>


</body>

</html>
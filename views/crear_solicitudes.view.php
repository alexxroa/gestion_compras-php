<?php
include("navbar.admin.php");
include("../database/connection.php");
$con = connection();

$sql = "SELECT * FROM usuarios";
$query = mysqli_query($con, $sql);

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
    <h3 class="titulo_administracion">Crear Nueva Solicitud</h1>
        <!-- formulario para ingresar nuevo usuario -->
        <br>

        <!-- Solicitudes de compras -->

        <section class="Crear">
            <div class="titulo_crear">
                <br>
                <h4>Crear nueva Solicitud de compra</h4>
                <br>
                <h5>Diligencie los siguientes espacios de acuerdo con su requerimiento</h5>
            </div>
            <br>
            <br>

            <div class="d-flex aling-content-center flex-row justify-content-center">
                <div class="contenedor6">
                    <form action="../functions/create_solicitud.php" method="POST">
                        <label class="form-label numero_solicitud">Fecha de creacion</label>
                        <input type="date" class="form-control" name="Fecha_Creacion">
                        <br>
                        <label class="form-label numero_solicitud">Correo Usuario</label>
                        <input type="email" class="form-control" name="Correo_Usuario">
                        <br>
                        <label class="form-label numero_solicitud">Fecha de Entrega</label>
                        <input type="date" class="form-control" name="Fecha_Entrega">
                        <br>
                        <label class="form-label numero_solicitud">Descripcion Requerimiento</label>
                        <input type="text" class="form-control" name="Descripcion">
                        <br>
                        <p>Seleccione segun Corresponda:</p>

                        <div class="tipo_requerimiento">
                            <div>
                                <label>Seleccione el tipo de requerimiento:</label>
                                <select class="custom-select" name="Tipo">
                                    <option value="1">Presupuestado</option>
                                    <option value="2">No Presupuestado</option>
                                </select>
                            </div>

                            <div>
                                <label>Seleccione la categoria del requerimiento</label>
                                <select class="custom-select" name="Categoria">
                                    <option value="1">Presupuestado</option>
                                    <option value="2">Semi-Urgente</option>
                                    <option value="3">Urgente</option>
                                </select>
                            </div>

                            <div>
                                <label>Seleccione la clase del requerimiento:</label>
                                <select class="custom-select" name="Tipo">
                                    <option value="1">Presupuestado</option>
                                    <option value="2">Capex</option>
                                    <option value="2">Non Capex</option>
                                </select>
                            </div>
                            <br>
                            <br>
                            <button type="submit" class="btn btn-dark">Crear</button>
                    </form>
                </div>



                <!-- Link boostrap -->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>


</body>

</html>
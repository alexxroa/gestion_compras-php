<?php
include("../database/connection.php");
include("navbar.admin.php");
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

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/estilos_administracion.css">
    <title>Crear Usuarios</title>

</head>

<body>
    <br>
    <h3 class="titulo_administracion">Ingresar Nuevo Usuario</h1>
        <!-- formulario para ingresar nuevo usuario -->
        <br>

        <section class="seccion">
            <div class="formulario">

                <form action="../functions/create_user.php" method="POST">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre de Usuario</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" name="Nombre_Usuario" placeholder="Digite el Nombre del Usuario a registrar">
                        </div>

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Correo Corporativo</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" name="Correo" placeholder="Digite el correo corporativo">
                        </div>

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Asigne la Contraseña</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputEmail3" name="Contraseña" placeholder="Digite la contraseña">
                        </div>

                        <div class="seleccione_area">
                            <label class="label_seleccione_area">Seleccione el Area:</label>
                            <select class="custom-select" name="Area">
                                <option value="1">Compras</option>
                                <option value="2">Almacen</option>
                                <option value="3">IDS</option>
                                <option value="4">Mantenimiento Vehicular</option>
                                <option value="5">Mantenimiento Locativo</option>
                                <option value="6">Higiene</option>
                                <option value="7">Service Delivery</option>
                                <option value="8">Culinary</option>
                                <option value="9">Make And Pack</option>
                                <option value="10">Pick And Pack</option>
                                <option value="11">Wash And Pack</option>
                                <option value="12">Laundry</option>
                                <option value="13">Talento Humano</option>
                                <option value="14">HSE</option>
                                <option value="15">Calidad</option>
                                <option value="16">Supply Chain</option>
                                <option value="17">Financiera</option>
                            </select>
                        </div>

                        <div class="seleccione_rol">
                            <label class="label_seleccione_rol">Seleccione el Rol: </label>
                            <select class="custom-select" name="Rol">
                                <option value="1">Solicitante</option>
                                <option value="2">Aprobador</option>
                                <option value="3">Coordinador</option>
                            </select>
                        </div>


                        <button type="submit" class="btn btn-dark">Agregar</button>
                    </div>
                </form>
            </div>
        </section>

        <!-- Link boostrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>


</body>

</html>
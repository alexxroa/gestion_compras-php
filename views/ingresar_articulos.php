<?php
include("navbar.admin.php");
include("../database/connection.php");
$con = connection();

$ID_Solicitud = $_GET['ID_Solicitud'];

$sql = "SELECT * FROM detalle_solicitud WHERE numero_solicitud='$ID_Solicitud'";
$query = mysqli_query($con, $sql);



?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- link css -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/estilos_solicitudes.css">

    <!-- Link Tipografia -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;600&display=swap" rel="stylesheet">

    <!-- Titulo de la pagina -->
    <title> Solicitudes de Compra</title>


</head>

<body>

    <!-- Seccion  Estado de las solicitudes -->
    <section class="consular_solicitud">
        <div class="titulo_consultar">
            <br>
            <h4>Articulos de la Solicitud</h4>
            <br>
        </div>
        <div class="crear_solicitud">
            <form action="crear_articulo.view.php" method="POST">
                <input type="submit" value="Ingresar Articulo" class="crear_nuevo_solicitud">
            </form>
        </div>
        <div class="d-flex aling-content-center flex-row justify-content-center">
            <div class="contenedor8">
                <form action="">
                    <br>
                    <label for="disabledTextInput" class="form-label">Numero de Solicitud</label>
                    <input type="text" id="disabledTextInput" class="form-control" placeholder="Escriba el numero de la solicitud a consultar">
                    <br>
                    <input type="submi  t" value="consultar">
                    </p>
                </form>
            </div>
        </div>

        <div class="d-flex aling-content-center flex-row justify-content-center">
            <div class="contenedor9">
                <table class="table table-hover">
                    <thead class="table-dark">
                        </tr>
                        <tr>
                            <th scope="col">Numero de Item</th>
                            <th scope="col">Numero de Solicitud</th>
                            <th scope="col">Nombre de Producto</th>
                            <th scope="col">Especificaciones</th>
                            <th scope="col">Unidad de Medida</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Razon de Requerimiento</th>
                            <th scope="col">Coordinador</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Eliminar</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_array($query)) : ?>
                            <tr>
                                <th scope="row"><?= $row['id_detalle'] ?></th>
                                <td><?= $row['numero_solicitud'] ?></td>
                                <td><?= $row['nombre_producto'] ?></td>
                                <td><?= $row['especificaciones'] ?></td>
                                <td><?= $row['unidad_medida'] ?></td>
                                <td><?= $row['cantidad'] ?></td>
                                <td><?= $row['razon_requerimiento'] ?></td>
                                <td><?= $row['coordinador'] ?></td>
                                <td><?= $row['estado'] ?></td>
                                <th><a href="#">Editar</a></th>
                                <th><a href="#">Eliminar</a></th>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
                <br>
                <br>
                <br>
                <br>
                <br>
            </div>
        </div>

    </section>
    <!-- Link boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>

</html>
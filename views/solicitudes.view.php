<?php
include("navbar.admin.php");
include("../database/connection.php");
$con = connection();

$sql = "SELECT * FROM solicitudes_compras";
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
      <h4>Consultar Solicitudes de Compras</h4>
      <br>
    </div>
    <div class="crear_solicitud">
      <form action="crear_solicitudes.view.php">
        <input type="submit" value="Crear Nueva solicitud" class="crear_nuevo_solicitud">
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
              <th scope="col">Numero Solicitud</th>
              <th scope="col">Fecha de Creacion</th>
              <th scope="col">Usuario</th>
              <th scope="col">Fecha de Entrega</th>
              <th scope="col">Descripcion</th>
              <th scope="col">Tipo</th>
              <th scope="col">Categoria</th>
              <th scope="col">Clase</th>
              <th scope="col">Estado</th>
              <th scope="col">Consultar</th>
              <th scope="col">Editar</th>

            </tr>
          </thead>
          <tbody>
            <?php while ($row = mysqli_fetch_array($query)) : ?>
              <tr>
                <th scope="row"><?= $row['ID_Solicitud'] ?></th>
                <td><?= $row['Fecha_Creacion'] ?></td>
                <td><?= $row['Correo_Usuario'] ?></td>
                <td><?= $row['Fecha_Entrega'] ?></td>
                <td><?= $row['Descripcion'] ?></td>
                <td><?= $row['Tipo'] ?></td>
                <td><?= $row['Categoria'] ?></td>
                <td><?= $row['Clase'] ?></td>
                <td><?= $row['Estado'] ?></td>
                <th><a href="ingresar_articulos.php?ID_Solicitud=<?= $row['ID_Solicitud'] ?>">Consultar</a></th>
                <th><a href="editar_solicitud.view.php?ID_Solicitud=<?= $row['ID_Solicitud'] ?>">Editar</a></th>

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
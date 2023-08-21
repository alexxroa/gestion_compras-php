<?php
include("../database/connection.php");
include("navbar.admin.php");

$con = connection();

$sql = "SELECT * FROM usuarios";
$query = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- link css -->
  <link rel="stylesheet" href="../css/style.css">

  <link rel="stylesheet" href="../css/estilos_administracion.css">


  <!-- Link boostrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

  <!-- Link Tipografia -->

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;600&display=swap" rel="stylesheet">

  <!-- Titulo de la pagina -->
  <title>Administracion</title>


</head>

<body>

  <br>

  <div>
    <h3 class="titulo_administracion">Usuarios y Roles</h3>
    <div class="crear_usuario">
      <form action="./crear_usuarios.view.php" class="form_crear_usuario">
        <!-- <button type="submit" class="boton_nuevo_user">Crear Nuevo Usuario</button> -->
        <input type="submit" value="Crear Nuevo Usuario" class="crear_nuevo_usuario">
      </form>
    </div>

  </div>
  <br>
  <!-- Tabla de Datos -->
  <section class="tabla_usuarios">
    <div class="tabla_usuarios_DIV">
      <table class="table table-hover">
        <thead class="table-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre Usuario</th>
            <th scope="col">Correo</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
          </tr>
        </thead>

        <tbody>
          <?php while ($row = mysqli_fetch_array($query)) : ?>
            <tr>
              <th><?= $row['ID_Usuario'] ?></th>
              <th><?= $row['usuario'] ?></th>
              <th><?= $row['Correo'] ?></th>
              <th><a href="update_usuarios.view.php?ID_Usuario=<?= $row['ID_Usuario'] ?>">Editar</a></th>
              <th><a href="../functions/delete_user.php?ID_Usuario=<?= $row['ID_Usuario'] ?>">Eliminar</a></th>
            </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>
  </section>

  <!-- Link boostrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>

</html>
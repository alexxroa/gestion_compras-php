<?php
include("navbar.admin.php");
include("../database/connection.php");
$con = connection();

$ID_Usuario = $_GET['ID_Usuario'];

$sql = "SELECT * FROM usuarios WHERE ID_Usuario ='$ID_Usuario'";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);

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

  <!-- Link Tipografia -->

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;600&display=swap" rel="stylesheet">

  <!-- Titulo de la pagina -->
  <title>Administracion de Usuarios</title>


</head>

<body>

  <h3>Editar Usuario</h3>

  <!-- formulario para ingresar nuevo usuario -->
  <section class="Crear">
    <div>

      <form action="../functions/edit_user.php" method="POST">
        <div class="form-group row">
          <input type="hidden" name="ID_Usuario" value="<?= $row['ID_Usuario'] ?>">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre de Usuario</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" name="usuario" placeholder="Digite el Nombre del Usuario a registrar" value="<?= $row['usuario'] ?>">
          </div>

          <label for="inputEmail3" class="col-sm-2 col-form-label">Correo Corporativo</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3" name="Correo" placeholder="Digite el correo corporativo" value="<?= $row['Correo'] ?>">
          </div>

          <label for="inputEmail3" class="col-sm-2 col-form-label">Asigne la Contraseña</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="inputEmail3" name="pass" placeholder="Digite la contraseña" value="<?= $row['pass'] ?>">
          </div>

          <label for="inputEmail3" class="col-sm-2 col-form-label">Seleccione el Area</label>
          <select class="custom-select" name="Area" value="<?= $row['Area'] ?>">
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

          <label for="inputEmail3" class="col-sm-2 col-form-label">Seleccione el Rol</label>
          <select class="custom-select" name="Rol" value="<?= $row['Rol'] ?>">
            <option value="1">Solicitante</option>
            <option value="2">Aprobador</option>
            <option value="3">Coordinador</option>
          </select>

          <button type="submit" class="btn btn-primary">Editar</button>
        </div>
      </form>
    </div>
  </section>


  <!-- Link boostrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>

</html>
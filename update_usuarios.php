<?php
  include("./database/connection.php");
  $con = connection();

  $ID_Usuario = $_GET['ID_Usuario'];

  $sql ="SELECT * FROM usuarios WHERE ID_Usuario ='$ID_Usuario'";
  $query = mysqli_query($con, $sql);

  $row = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Link boostrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <!-- link css -->
  <link rel="stylesheet" href="./css/style.css">

  <!-- Link Tipografia -->

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;600&display=swap" rel="stylesheet">

  <!-- Titulo de la pagina -->
  <title>Administracion de Usuarios</title>


</head>

<body>

  <!-- Barra de navegacion -->
  <section>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
      <div class="container-fluid">
        <a class="navbar-brand logogate" href="./index.php"><img src="./img/Logo_Gategourmet.png"
            alt="Logo_Gategourmet" class="Logo_Navbar"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="./solicitudes.php" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Solicitudes
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="./solicitudes.php">Crear Nueva Solicitud</a></li>
                <li><a class="dropdown-item" href="./solicitudes.php">Estado de la solicitud</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="./cotizaciones.php" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Cotizaciones
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="./cotizaciones.php">Solicitud de Cotizacion</a></li>
                <li><a class="dropdown-item" href="./cotizaciones.php">Cuadros Comparativos</a></li>
                <li><a class="dropdown-item" href="./cotizaciones.php">Aprobacion de la Compra</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="./cotizaciones.php">Administracion de presupuesto</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="./gestion.php" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Gestion de Compras
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="./gestion.php">Asignar Coordinador</a></li>
                <li><a class="dropdown-item" href="./gestion.php">Orden de Compra</a></li>
                <li><a class="dropdown-item" href="./gestion.php">Factura</a></li>
                <li><a class="dropdown-item" href="./gestion.php">Anticipos</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="./administracion.php" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Administracion
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="./administracion.php">Roles</a></li>
                <li><a class="dropdown-item" href="./administracion.php">Usuarios</a></li>
                <li><a class="dropdown-item" href="./administracion.php">Proveedores</a></li>
              </ul>
            </li>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Perfil</a></li>
              <li><a class="dropdown-item" href="#">Salir</a></li>
            </ul>
            </li>

            <h4 class="titulo">SISTEMA DE GESTION DE COMPRAS</h4>

          </ul>
          <ul class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="./img/usuario_dark.jpg" alt="Usuario" class="usuario">
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </ul>
          <!-- <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>

              
              
            </form> -->
        </div>
      </div>
    </nav>

  </section>

  <h3>Editar Usuario</h3>

      <!-- formulario para ingresar nuevo usuario -->
      <section class="Crear">
    <div>
      
      <form action="edit_user.php" method="POST">
        <div class="form-group row">
          <input type="hidden" name="ID_Usuario" value="<?=$row['ID_Usuario']?>">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre de Usuario</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputEmail3" name="Nombre_Usuario" placeholder="Digite el Nombre del Usuario a registrar" value="<?=$row['Nombre_Usuario']?>">
            </div>
            
          <label for="inputEmail3" class="col-sm-2 col-form-label">Correo Corporativo</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputEmail3" name="Correo" placeholder="Digite el correo corporativo" value="<?=$row['Correo']?>">
            </div>
            
            <label for="inputEmail3" class="col-sm-2 col-form-label">Asigne la Contraseña</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="inputEmail3" name="Contraseña" placeholder="Digite la contraseña" value="<?=$row['Contraseña']?>">
            </div>
                  
            <label for="inputEmail3" class="col-sm-2 col-form-label">Seleccione el Area</label>     
            <select class="custom-select" name="Area" value="<?=$row['Area']?>">              
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
            <select class="custom-select" name="Rol" value="<?=$row['Rol']?>">        
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>

</body>

</html>
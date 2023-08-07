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
    <title>Cotizaciones</title>


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
  
              <h4 class="titulo">COTIZACIONES</h4>
  
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

    <!-- Link boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>

</body>

</html>
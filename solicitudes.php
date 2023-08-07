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
    <title> Solicitudes de Compra</title>


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
  
              <h4 class="titulo">SOLICITUDES DE COMPRAS</h4>
  
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
        <form action="">
          <br>
          <label for="disabledTextInput" class="form-label numero_solicitud">Numero de Solicitud</label>
          <input type="text" id="disabledTextInput" class="form-control" placeholder="Solicitud N001">
          <br>
          <label for="disabledTextInput" class="form-label numero_solicitud">Fecha de Creacion</label>
          <input type="date" id="disabledTextInput" class="form-control" placeholder="16/07/2023">
          <br>
          <label for="disabledTextInput" class="form-label numero_solicitud">Usuario</label>
          <input type="text" id="disabledTextInput" class="form-control" placeholder="Usuario A">
          <br>
          <label for="disabledTextInput" class="form-label numero_solicitud">Fecha de Entrega</label>
          <input type="date" id="disabledTextInput" class="form-control" placeholder="16/07/2023">
          <br>
          <h5>Observaciones</h5>
          <p>
            <textarea name="texto" cols="50" rows="4"></textarea>
            <input type="submit" value="Enviar">
          </p>
          
        </form>
                
      </div>
      
      <div class="contenedor7">
        <p>Seleccione segun Corresponda:</p>
      
      <div class="tipo_requerimiento">
        <div class="form-check">
          <h6>Tipo de Requerimiento: </h6>
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"checked>
          <label class="form-check-label" for="flexRadioDefault1">
            Presupuestado
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
          <label class="form-check-label" for="flexRadioDefault2">
            No Presupuestado
          </label>
        </div>
      </div>
      <br>
      <div class="categoria">
        <div class="form-check">
          <h6>Categoria: </h6>
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
          <label class="form-check-label" for="flexCheckDefault">
            Presupuestado
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
          <label class="form-check-label" for="flexCheckChecked">
            Semi-Urgente
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
          <label class="form-check-label" for="flexCheckChecked">
            Urgente
          </label>
        </div>
      </div>
      <br>
      <div class="clase">
        <div class="form-check">
          <h6>Clase </h6>
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
          <label class="form-check-label" for="flexCheckDefault">
            Presupuestado
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
          <label class="form-check-label" for="flexCheckChecked">
            Capex
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"  >
          <label class="form-check-label" for="flexCheckChecked">
            NON-Capex
          </label>
        </div>
      </div>

        </div>
      </div>
    </div>
    </div>
 


    
    
  </section>

<br>
<br>
<br>  
<!-- Seccion  Estado de las solicitudes -->
<section class="consular_solicitud">
  <div class="titulo_consultar">
    <br>
    <h4>Consultar Solicitudes de Compras</h4>
    <br>
  </div>
  <br>
  <br>

  <div class="d-flex aling-content-center flex-row justify-content-center">
    <div class="contenedor8">
      <form action="">
        <br>
        <label for="disabledTextInput" class="form-label numero_solicitud">Numero de Solicitud</label>
        <input type="text" id="disabledTextInput" class="form-control" placeholder="Solicitud N001">
        <br>
        <input type="submit" value="Enviar">
        </p>
      </form>
    </div>
  </div>
 
  <div class="d-flex aling-content-center flex-row justify-content-center">
    <div class="contenedor9">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Numero Solicitud</th>
            <th scope="col">Fecha de Creacion</th>
            <th scope="col">Usuario</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Tipo</th>
            <th scope="col">Categoria</th>
            <th scope="col">Clase</th>
            <th scope="col">Estado</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">N001</th>
            <td>11/07/2023</td>
            <td>Luisa</td>
            <td>Solicitud Menaje</td>
            <td>Presupuestado</td>
            <td>Presupuestado</td>
            <td>Presupuestado</td>
            <td>En Cotizacion</td>
          </tr>
          <tr>
            <th scope="row">N002</th>
            <td>12/07/2023</td>
            <td>Sara</td>
            <td>Solicitud Equipos</td>
            <td>Presupuestado</td>
            <td>Semi-Urgente</td>
            <td>NON-Capex</td>
            <td>Comparativo</td>
          </tr>
          <tr>
            <th scope="row">N003</th>
            <td>15/07/2023</td>
            <td>Adrian</td>
            <td>Solicitud Locativos</td>
            <td>NO Presupuestado</td>
            <td>Semi-Urgente</td>
            <td>Presupuestado</td>
            <td>Aprobacion Comparativo</td>
          </tr>
          <tr>
            <th scope="row">N004</th>
            <td>16/07/2023</td>
            <td>Felipe</td>
            <td>Solicitud Vehicular</td>
            <td>No Presupuestado</td>
            <td>Urgente</td>
            <td>NON-Capex</td>
            <td>Compra</td>
          </tr>
          <tr>
            <th scope="row">N005</th>
            <td>17/07/2023</td>
            <td>Alex</td>
            <td>Solicitud Equipos</td>
            <td>Presupuestado</td>
            <td>Semi-Urgente</td>
            <td>NON-Capex</td>
            <td>Comparativo</td>
          </tr>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>

</body>

</html>
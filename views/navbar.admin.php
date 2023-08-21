  <!-- Barra de navegacion -->
  <section>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
          <div class="container-fluid">
              <a class="navbar-brand logogate" href="inicio.view.php"><img src="../img/Logo_Gategourmet.png" alt="Logo_Gategourmet" class="Logo_Navbar"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Solicitudes
                          </a>
                          <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="solicitudes.view.php">Crear Nueva Solicitud</a></li>
                              <li><a class="dropdown-item" href="./solicitudes.php">Estado de la solicitud</a></li>
                          </ul>
                      </li>
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="./cotizaciones.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                          <a class="nav-link dropdown-toggle" href="./gestion.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Administracion
                          </a>
                          <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="./administracion/administracion.php">Roles</a></li>
                              <li><a class="dropdown-item" href="administracion.view.php">Usuarios</a></li>
                              <li><a class="dropdown-item" href="./administracion/administracion.php">Proveedores</a></li>
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
                          <img src="../img/usuario_dark.jpg" alt="Usuario" class="usuario">
                      </a>
                      <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="../logout.php">Cerrar Sesion</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li>
                              <hr class="dropdown-divider">
                          </li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                      </ul>
                  </ul>
              </div>
          </div>
      </nav>

  </section>
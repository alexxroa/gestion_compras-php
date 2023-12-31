<?php
include("navbar.admin.php");

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
  <title>Sistema de Compras</title>


</head>

<body>

  <!-- carrousel -->

  <Section class="seccion1">

    <div id="carouselExampleFade" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="imagen" src="../img/tamaño/img1.jpg" class="d-block w-100" alt="Imagen 1">
        </div>
        <div class="carousel-item ">
          <img class="imagen" src="../img/tamaño/img2.jpg" class="d-block w-100" alt="Imagen 2">
        </div>
        <div class="carousel-item ">
          <img class="imagen" src="../img/tamaño/img3.jpg" class="d-block w-100" alt="Imagen 3">
        </div>
        <div class="carousel-item ">
          <img class="imagen" src="../img/tamaño/img4.jpg" class="d-block w-100" alt="Imagen 3">
        </div>
        <div class="carousel-item ">
          <img class="imagen" src="../img/tamaño/img5.jpg" class="d-block w-100" alt="Imagen 3">
        </div>
        <div class="carousel-item ">
          <img class="imagen" src="../img/tamaño/img6.jpg" class="d-block w-100" alt="Imagen 3">
        </div>
        <div class="carousel-item ">
          <img class="imagen" src="../img/tamaño/img7.jpg" class="d-block w-100" alt="Imagen 3">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

  </Section>

  <!-- Video  y texto-->

  <section class="bg-dark bg-gradient">
    <br>
    <h4 class="titulo2">Quien es Gate gourmet?</h4>

    <div class="d-flex aling-content-center flex-row justify-content-center">

      <div class="contenedor3">
        <iframe class="video" width="640" height="360" src="https://www.youtube.com/embed/MfPAdY_MFzI" title="Workday and gategroup" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>

      <div class="contenedor4">

        <p class="parrafo3">Lorem ipsum dolor sit amet consectetur adipisicing elit. In rerum nobis libero architecto
          iure eos dolore a, autem atque distinctio? Tenetur, corrupti vitae, molestiae aperiam dolor eveniet voluptatum
          quam, quae iure enim et eaque vel magni deserunt ad tempora repellendus nobis totam esse! Explicabo hic vitae
          quisquam. Iure architecto omnis placeat mollitia corrupti itaque quasi possimus at, quos, corporis neque et
          minus ullam enim saepe expedita. Vitae explicabo tenetur libero quos mollitia assumenda nemo quae sint
          voluptates nobis a, sit necessitatibus velit praesentium cupiditate amet aut officia repellendus perspiciatis
          repudiandae dolorum in labore magnam impedit? Maiores quidem cupiditate ab blanditiis.</p>
        <div class="boton">
          <a class="btn btn-light" href="https://gategroup.com/" role="button">Mas informacion</a>
        </div>

      </div>

    </div>




    <!--  <iframe class="video" width="640" height="360" src="https://www.powtoon.com/embed/cZkGxbJoQCh/" frameborder="0"
        allowfullscreen></iframe>
      -->



  </section>

  <!-- Footer -->

  <footer class="bg-dark bg-gradient">
    <div class="d-flex aling-content-center flex-row justify-content-center">
      <div class="contenedor1">
        <h3 class="titulo3">Conozca el Proceso de Compras</h3>

        <p class="parrafo2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officiis praesentium omnis minima
          sint labore modi
          aliquam, ratione illo aliquid odit repellat ipsam dolores, minus cumque reiciendis veniam? Laudantium
          accusantium nostrum, reiciendis eligendi quas tenetur aspernatur excepturi? Iure quibusdam iste temporibus
          quas. Assumenda quod quae sequi. Odio dolorem ratione reiciendis illum, assumenda sed officiis exercitationem
          modi, fugiat rerum deserunt voluptate hic iusto maxime aliquid facilis repellendus sit praesentium cumque
          consectetur sequi?</p>
      </div>

      <div class="contenedor2">
        <form class="formulario" action="">
          <h3>Tiene dudas del proceso? </h3>
          <h5>por favor Diligenciar el siguiente formulario de contacto: </h5>
          <br>
          <p>Nombre:<input type="text" name="nombre" size="40" required placeholder="Escriba su nombre"></p>
          <p>Area:<input type="text" name="area" size="40" required placeholder="Area a la que pertenece"></p>
          <p>Tipo de Usuario:
            <input type="radio" name="hm" value="h">Nuevo Usuario
            <input type="radio" name="hm" value="h">Usuario frecuente
          </p>
          <p>Correo Electronico corporativo:<input type="text" name="area" size="40" required placeholder="escriba su correo corporativo"></p>
          <h5>Por favor adjunte el documento o proceso con el que tiene duda:</h5>
          <p>
            Documento: <input type="file" name="archivo">
          </p>
          <h5>Por Favor Describa su duda en el siguiente espacio</h5>
          <p>
            <textarea name="texto" cols="40" rows="4"></textarea>
            <input type="submit" value="Enviar">
          </p>
        </form>
      </div>

    </div>

  </footer>

  <!-- Link boostrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>

</html>
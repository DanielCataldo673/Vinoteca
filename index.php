<?php
//incluir las clases

require_once "functions/autoload.php";

$miObjetoVariedad = new Variedad();
$variedad = $miObjetoVariedad->lista_completa();

$secciones_validas = [
  "inicio" => [
    "titulo" => "Inicio"
  ],
  "contacto" => [
    "titulo" => "Contacto"
  ],
  "developers" => [
    "titulo" => "Developers"
  ],
  "familia" => [
    "titulo" => "Familia"
  ],
  "fincas" => [
    "titulo" => "Fincas"
  ],
  "vinos" => [
    "titulo" => "Vinos en venta"
  ],
  "vino" => [
    "titulo" => "Detalles de vinos"
  ],
  "ofertas" => [
    "titulo" => "Ofertas"
  ],
  "visitanos" => [
    "titulo" => "Visitanos"
  ],
  "finca_piedra_infinita" => [
    "titulo" => "Finca Piedra Infinita"
  ],
  "finca_canal_uco" => [
    "titulo" => "Finca Canal Uco"
  ],
  "finca_los_membrillos" => [
    "titulo" => "Finca Los Membrillos"
  ],
  "finca_las_cuchillas" => [
    "titulo" => "Finca Las Cuchillas"
  ],
  "finca_las_cerrilladas" => [
    "titulo" => "Finca Las Cerrilladas"
  ],
  "finca_agua_de_las_jarillas" => [
    "titulo" => "Finca Agua de Las Jarillas"
  ],
  "glosario" => [
    "titulo" => "Glosario"
  ],
  "promociones" => [
    "titulo" => "Promociones"
  ],
  "menu" => [
    "titulo" => "Menú"
  ]

];

$seccion = $_GET['sec'] ?? "inicio";/* Si la seccion es valida vuelve al inicio El método GET envía la información codificada del usuario en el encabezado de la solicitud HTTP DE forma visible ,Los valores enviados por get van a figurar en la variable superglobal $_GET*/


/* Buscar si existe el indice del array */
if (!array_key_exists($seccion, $secciones_validas)) {
  $vista = "404";
  $titulo = "404- Pagina no encontrada";
} else {
  $vista = $seccion;
  $titulo = $secciones_validas[$seccion]['titulo'];
}


    
?>

<!doctype html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $titulo  ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <!-- vincular estilos -->
  <link rel="stylesheet" href="css/estilos.css">

  <!-- FontAwesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />



</head>

<body>


  <!-- Navegacion -->
  <nav class="navbar sticky-top navbar-expand-lg" style="background-color:#000000" data-bs-theme="dark"><!-- div class="sticky-top">.parte superior pegajosa
..</div> -->

    <div class="container-fluid">
    
    <a class="navbar-brand" href="index.php?sec=inicio">Piedra Infinita <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-activity" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M6 2a.5.5 0 0 1 .47.33L10 12.036l1.53-4.208A.5.5 0 0 1 12 7.5h3.5a.5.5 0 0 1 0 1h-3.15l-1.88 5.17a.5.5 0 0 1-.94 0L6 3.964 4.47 8.171A.5.5 0 0 1 4 8.5H.5a.5.5 0 0 1 0-1h3.15l1.88-5.17A.5.5 0 0 1 6 2Z" />
        </svg></a>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" href="index.php?sec=inicio">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="index.php?sec=familia">Familia</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="index.php?sec=fincas">Fincas</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Vinos de Montaña
            </a>
            <ul class="dropdown-menu">
              <?php foreach ($variedad as $V) { ?>
                <li><a class="dropdown-item" href="index.php?sec=vinos&pj=<?= $V->getId() ?>"> <?= $V->getNombre()  ?></a></li>
              <?php } ?>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="index.php?sec=visitanos">Visitanos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active " href="index.php?sec=contacto">Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="index.php?sec=glosario">Glosario</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="index.php?sec=developers">Developers</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>

  <!-- Main -->
  <main class="container">
    <?php
    require file_exists("views/$vista.php") ? "views/$vista.php" : "views/404.php";
    /* La palabra clave required nos permite hacer que un input de un formulario sea obligatorio. */
    ?>
  </main>


  <div class="d-flex justify-content-between mt-4 me-3 ms-3"><!-- sticky-bottom /botones fijos -->
    <!-- Pagina anterior -->
    <a onClick="history.go(-1)"><i class="fa-solid fa-circle-arrow-left fa-2xl" style="color: #000;"></i></a>
    <!--Home -->
    <a href="index.php"><i class="fa-solid fa-house fa-2xl" style="color: #000;"></i></a>
    <!-- Inicio de Pagina -->

    <a class="btn btn-outline-light me-4" href="#"><i class="fa-solid fa-circle-arrow-up fa-2xl" style="color: #000;"></i></a>

  </div>

  <!-- pagos -->
  <div class="d-flex justify-content-center mt-4">
    <a class="me-4" href="index.php?sec=promociones"><i class="fa-solid fa-credit-card fa-2xl" style="color: #0c0d0d;"></i></a>
    <a href="index.php?sec=promociones"><i class="fa-solid fa-truck-moving fa-2xl" style="color: #0f0f0f;"></i></a>
  </div>
  <div class="d-flex justify-content-center mt-3 ">
    <p class="fw-bold fs-5">Visa, Master y Amex de todos los bancos, envío a todo el país.</p>
  </div>

  <!-- barra animada -->
  <p class="placeholder-wave">
    <span class="bg-black placeholder col-12"></span>
  </p>

  <!-- footer (pie de pagina promo) -->
  <footer style="background-color:#423F3E">

    <form class="mt-3" action="cumpleaños.php" method="POST">
      <div class="d-flex justify-content-between text-dark ">
        <div class="col-auto mt-1 ms-3">
          <p class=" fs-5 text-center text-decoration-underline fst-italic text-white">Suscríbete a nuestro newsletter </p>
          <p class="text-white">Recibí 10% OFF en tu primera compra, ¡Suscribite y enteráte de las ofertas y lanzamientos antes que nadie!</p>
        </div>
       
        <div class="col-auto mt-4">
          <input type="text" class="form-control p-2 flex-fill border rounded-2" name="email" id="email" placeholder="Ingresa tu e-mail" aria-label="Ingresa tu e-mail" aria-describedby="basic-addon2" required>
        </div>
        <div class="col-auto mt-4 text-white">
          
            Fecha de cumpleaños
            <input type="date" name="cumpleanio" id="cumpleanio" required>
          

        </div>
        <div class="mt-4 me-3"><input class="text-white border rounded-2" style="background-color:#423F3E" type="submit" value="Enviar"></div>
      </div>
    </form>

  </footer>

  <!-- footer (pie de pagina) -->
  <footer class="text-white text-center" style="background-color:#000000">


    <marquee behaviour="scroll" scrolldelay="" class="text-white mt-4" style="background-color:#423F3E" loop="">Todos los derechos reservados - PIEDRA INFINITA - Copyright &copy; -2023 - Valle de Uco Mendoza - Argentina - Beber con moderación - Prohibida su venta para menores de 18 años</marquee>

    <div class=" d-flex flex-column align-items-center mt-3">


      <!-- ICONOS -->
      <!-- Telefono y e-mail -->
      <p class="text-center fst-italic fs-5">
        Para consultas, por favor contactarse al +54-9-2624563212 <a href="https://outlook.live.com/owa/" class="link-light link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover" target="_blank"><i class="fa-solid fa-phone fa-lg" style="color: #f7f9fc;"></i> vino@piedrainfinita.com <i class="fa-solid fa-envelope fa-lg" style="color: #fcfcfd;"></i></a></p>

    </div>

    <div class="d-flex justify-content-between mt-4 me-3 ms-3">
    <div>
      <img src="img/QRamdelco.webp" width="100px" height="100px" alt="">
    </div>

    <div class="p-5">
      <!-- whatsapp -->
      <a href="https://web.whatsapp.com/" target="_blank"><i class="fa-brands fa-whatsapp fa-2xl" style="color: #f8f9fc;"></i></a>
      <!--facebook-->
      <a href="https://es-la.facebook.com/" target="_blank"><i class="fa-brands fa-facebook fa-2xl" style="color: #fcfcfd;"></i></a>

      <!--linkedin  -->
      <a href="https://ar.linkedin.com/?original_referer=https%3A%2F%2Fwww.google.com%2F" target="_blank"><i class="fa-brands fa-linkedin fa-2xl" style="color: #f4f5f5;"></i></a>

      <!-- twitter -->
      <a href="https://twitter.com/" target="_blank"><i class="fa-brands fa-x-twitter fa-2xl" style="color: #ffffff;"></i></a>

      <!--instagram  -->
      <a href="https://www.instagram.com/" target="_blank">
        <i class="fa-brands fa-instagram fa-2xl" style="color: #fdfcfc;"></i> </a>
    </div>

        <div>
      <img src="img/QRmio.webp" width="100px" height="100px" alt="">
    </div>
</div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>
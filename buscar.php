 <?php
  require_once "functions/autoload.php";

  $miObjetoVariedad = new Variedad();
  $variedad = $miObjetoVariedad->lista_completa();


  $keywords = isset($_GET['search']) ? $_GET['search'] : '';



  $miObjetoVino = new Vino();

  $productos = $miObjetoVino->buscarVinos($keywords);




  ?>

 <!doctype html>
 <html lang="es">

 <head>

   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Buscar</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

   <!-- FontAwesome CDN -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 </head>

 <body>
   <!-- Navegacion -->
   <nav class="navbar sticky-top navbar-expand-lg" style="background-color:#000000" data-bs-theme="dark">

     <div class="container-fluid">
       <a class="navbar-brand" href="index.php?sec=inicio">Piedra Infinita <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-activity" viewBox="0 0 16 16">
           <path fill-rule="evenodd" d="M6 2a.5.5 0 0 1 .47.33L10 12.036l1.53-4.208A.5.5 0 0 1 12 7.5h3.5a.5.5 0 0 1 0 1h-3.15l-1.88 5.17a.5.5 0 0 1-.94 0L6 3.964 4.47 8.171A.5.5 0 0 1 4 8.5H.5a.5.5 0 0 1 0-1h3.15l1.88-5.17A.5.5 0 0 1 6 2Z" />
         </svg></a>
       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
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
             <a class="nav-link active" href="index.php?sec=alumno">Alumno</a>
           </li>
         </ul>

       </div>
     </div>
   </nav>


   <div class="container">
     <header>
       <h1 class="text-center my-5 text-decoration-underline fst-italic">Resultado de Busqueda</h1>
     </header>

     <main>
       <div class="row">

         <?PHP if (count($productos)) { ?>
           <?PHP foreach ($productos as $vino) { ?>
             <div class="col-md-4">
               <div class="card mb-3 border-dark border-1 shadow-lg">
                 <img src="img/<?= $vino->getImagen(); ?>" class="card-img-top" alt="">
                 <div class="card-body">


                   <p class="card-text" style="height: 50px;">
                     <?= rtrim(substr($vino->getCaracteristicas(), 0, 40)) . (strlen($vino->getCaracteristicas()) > 40 ? '...' : '') ?>
                   </p>
                 </div>
                 <ul class="list-group list-group-flush" style="height: 50px;">
                   <li class="list-group-item"><span class="fw-bold"></span> <?= $vino->getMarca(); ?></li>
                 </ul>

                 <div class="card-body">
                   <div class="fs-3 mb-3 fw-bold text-center text-danger">$<?= $vino->precio_formateado(); ?></div>
                   <a href="index.php?sec=vino&id=<?= $vino->getId(); ?>" class="btn btn-danger w-100 fw-bold">VER MÁS</a>
                 </div>

               </div>

             </div>

           <?PHP } ?>



         <?PHP } else { ?>
           <div class="col">
             <h2 class="text-center mb-5">No se encontraron productos.</h2>
           </div>

         <?PHP } ?>

       </div>
   </div>
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
           <form method="post" action="/send/">
             Fecha de cumpleaños
             <input type="date" value="" required>
           </form>

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
     <!-- QR AMDELCO -->
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
       <!-- QR MIO -->
       <div>
         <img src="img/QRmio.webp" width="100px" height="100px" alt="">
       </div>
     </div>
   </footer>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
 </body>

 </html>
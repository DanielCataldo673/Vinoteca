<?php
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $mail = $_POST['mail'];
    
    echo "<br>";

    echo "<h1>$nombre $apellido</h1>";
    
    echo "<br>";

    echo "<h3>Con Email $mail</h3>";
    ?>



<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gracias</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <!-- FontAwesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="text-center">
  <img class="mx-auto d-block mt-4" height="350px" width="700px" src="img/muchas-gracias-1.webp" alt="">
  <header>
  <h1 class="text-center  fst-italic fw-bold fs-2 mt-4 "> Por Elegirnos<br>¡Es un gusto ayudarte!<br>Tu consulta se envió correctamente, en breve nos comunicaremos contigo.</h1>
  </header>
  <!--Home -->
  <div class="mb-4 mt-4">
  <a href="index.php"><i class="fa-solid fa-house fa-2xl" style="color: #000;"></i></a>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>
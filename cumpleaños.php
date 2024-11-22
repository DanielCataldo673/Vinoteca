<?php
    
    $email = $_POST['email'];
    $cumpleanio = $_POST['cumpleanio'];

    // Cambiar el formato de la fecha
    $cumpleanioFormateado = date('d-m-Y', strtotime($cumpleanio));
    
    echo "<br>";

    echo "<h1><font color=\"white\">$email</font></h1>";
    
    echo "<br>";

    // Mostrar la fecha de nacimiento en el nuevo formato
    echo "<h1><font color=\"white\">Fecha de nacimiento : $cumpleanioFormateado</font></h1>";
    
    echo "<br>";

   
    
    ?>


<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cumpleaños</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <!-- FontAwesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="text-center" style="background-color:#423F3E">

  <main>
     <header>
      <h1 class="text-center text-white fst-italic fw-bold p-4 mt-4" style="background-color:#798777">¡Gracias por suscribirte!</h1>
      </header>

    <img class=" btn-outline-light mt-4 mx-auto d-block" height="400px" width="700px" src="img/feliz-cumpleaños-minions.gif">

    <h2 class="text-center text-white fst-italic fs-1 mb-4 fw-bold p-4 mt-4" style="background-color:#798777">¡Espera sorpresas para tu Cumpleaños!</h2>
    
    <!--Home -->
    <div class="mb-4">
    <a class="mt-4" href="index.php"><i class="fa-solid fa-house fa-2xl" style="color: #000;"></i></a>
    </div>

  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>
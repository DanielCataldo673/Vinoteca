<?php

//incluir las clases 
require_once "../functions/autoload.php";


$secciones_validas = [
    "login"=> [
        "titulo" => "Inicio de Sessión",
        "restringido" => FALSE
    ],
    "dashboard"=> [
        "titulo" => "Panel de Control",
        "restringido" => TRUE
    ],
    "admin_variedad" =>[
        "titulo" => "Administracion de variedad",
        "restringido" => TRUE
    ],
    "add_variedad" =>[
        "titulo" => "Administracion de variedad",
        "restringido" => TRUE
    ],
    "edit_variedad" =>[
        "titulo" => "Administracion de variedad",
        "restringido" => TRUE
    ],
    "delete_variedad"=>[
        "titulo" => "Administracion de variedad",
        "restringido" => TRUE
    ],
    "admin_vinos"=>[
        "titulo" => "Administracion de vinos",
        "restringido" => TRUE
    ],
    "add_vino"=>[
        "titulo" => "Administracion de vinos",
        "restringido" => TRUE
    ],
    "edit_vino"=>[
        "titulo" => "Administracion de vinos",
        "restringido" => TRUE
    ],
    "delete_vino"=>[
        "titulo" => "Administracion de vinos",
        "restringido" => TRUE
    ],

    
    
    

];


$seccion = $_GET['sec'] ?? "dashboard";


/* buscar si existe el  Indice del array ahora   */
if(!array_key_exists($seccion, $secciones_validas)){
    $vista = "404";
    $titulo = "404 - Pagina no encontrada";
}else {
    $vista = $seccion;

    if($secciones_validas[$seccion]['restringido']){
        (new Autenticacion())->verify();
    }

    $titulo = $secciones_validas[$seccion]['titulo'];
}


$userData= $_SESSION['loggedIn'] ?? FALSE;

?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piedra Infinita ::  <?= $titulo ?> </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    
</head>

<body>
    

<nav class="navbar navbar-expand-lg navbar-light bg-info border border-dark border-2 shadow-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Administracion</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link fw-bold <?= $userData ?  "" : "d-none"  ?> " href="index.php?sec=dashboard">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold <?= $userData ?  "" : "d-none"  ?>" href="index.php?sec=admin_vinos">Administracion de Vinos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold <?= $userData ?  "" : "d-none"  ?>" href="index.php?sec=admin_variedad">Administracion de Variedad</a>
                    </li>

                    <li class="nav-item fw-bold <?= $userData ?  "d-none" : ""  ?>">
                        <a class="nav-link active" href="index.php?sec=login">Login</a>
                    </li>

                    <li class="nav-item fw-bold <?= $userData ?  "" : "d-none"  ?>">
                        <a class="nav-link active" href="actions/auth_logout.php">Logout</a>
                    </li>
                   
                    
                   
                   
                    
                    
                </ul>
            </div>
        </div>
    </nav>
    <main class="container">

  

    <?php 

    require file_exists("views/$vista.php") ? "views/$vista.php" : "views/404.php";
      

    ?>

        
    </main>
    <footer class="bg-info fw-bold fs-4 text-dark text-center p-4 border border-dark border-2 shadow-lg">
        Derechos Reservados - 2023
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
<?php
$variedad = (new Variedad())->lista_completa();




?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Variedad</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>

    <header>
        <h1 class="mt-5 ms-3 text-decoration-underline fst-italic text-center">Listado de Variedades</h1>
    </header>
    <div class="container">



        <div class="row mt-4 " >
        <div>
        <?= (new Alerta())->get_alertas() ?>
        </div>
       <div class="col-md-4 mx-auto">
            <table class="table table-info table-striped border border-dark border-2 shadow-lg">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Acciones</th>
                   
                </tr>
                <?php foreach ($variedad as $var) {  ?>
                    <tr>
                        <th scope="row"><?= $var->getId() ?></th>
                        <td class="fw-bold"><?= $var->getNombre(); ?></td>
                        <td>
                        <a class="btn btn-outline-info btn-sm fw-bold mx-2" href="index.php?sec=edit_variedad&id=<?= $var->getId() ?>">Editar</a>

                            <a class="btn btn-outline-danger btn-sm fw-bold" href="index.php?sec=delete_variedad&id=<?= $var->getId() ?>">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
            <a class="btn btn-info mt-2 mb-3 d-block fw-bold mx-auto border border-dark border-2 rounded-pill shadow-lg" href="index.php?sec=add_variedad">Cargar Nueva Variedad</a>
            </div>
            
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
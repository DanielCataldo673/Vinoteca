<?php
$id = $_GET['id'] ?? false;

$variedad = (new Variedad())->get_x_id($id);


?><div class="row my-5 g-3">
    <h1 class="text-center mb-5 fw-bold text-decoration-underline fst-italic">¿Está seguro que desea eliminar la Variedad?</h1>


    

    <div class="mx-auto col-md-3">
        <h2 class="text-center text-decoration-underline fst-italic">Nombre</h2>
        <p class="fs-3 text-center fst-italic fw-bold"><?= $variedad->getNombre()?></p>

       

        <a class="btn btn-outline-danger d-block mt-4 fs-5 fw-bold rounded-pill" href="actions/delete_variedad_acc.php?id=<?= $variedad->getId() ?>">Eliminar</a>

    </div>

</div>


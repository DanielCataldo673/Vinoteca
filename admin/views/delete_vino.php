<?php
$id = $_GET['id'] ?? false;

$vino = (new Vino())->producto_x_id($id);


?>
<div class="row my-5 g-3">
    <h1 class="text-center mb-5 fw-bold text-decoration-underline fst-italic">¿Está seguro que desea eliminar el Vino?</h1>
   <div class="col-md-7 mx-auto">
    <img class=" rounded-4 border border-dark border-2 shadow-sm d-block mx-auto" width="250px" src="../img/<?= $vino->getImagen()?>" alt="">
    
    <h2 class="text-center mt-4 fst-italic fw-bold fs-3"> <?= $vino->getMarca()?></h2>

   
    <a class="btn btn-outline-danger d-block mt-4 fs-5 fw-bold rounded-pill" href="actions/delete_vino_acc.php?id=<?= $vino->getId() ?>">Eliminar</a>
    </div>


        

    

</div>
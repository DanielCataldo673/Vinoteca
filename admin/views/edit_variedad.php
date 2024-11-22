<?php
$id= $_GET['id'] ?? FALSE;

$variedad = (new Variedad())->get_x_id($id);




?>

<div class="row my-5">
    <div class="col">
    <h1 class="text-decoration-underline fst-italic text-center mb-5 fw-bold">Edición de datos de Variedad :
            <span class="danger" style="color: #39A7FF;"><?= $variedad->getNombre()?></span>
        </h1>
       

        <div class="row mb-5 d-flex align-items-center">
            <form class="row g-3" action="actions/edit_variedad_acc.php?id=<?= $variedad->getId()  ?>" method="POST" enctype="multipart/form-data">
                <!-- enctype poder cargar imagenes al servidor -->
            
            <div class="col-md-3 mx-auto">
                <div class="text-center">
                <label for="nombre" class="form-label fw-bold fs-2 fst-italic text-center ">Nombre</label>
                </div>
                <input type="text" class="form-control border border-dark border-2 rounded-pill shadow-lg text-center fs-4" id="nombre" name="nombre" value="<?=$variedad->getNombre()?>" required>
            
                <div class="text-center">
                <button type="submit" class="btn btn-lg btn-info fw-bold mx-auto mt-3 border border-dark border-2 rounded-pill shadow-lg">Editar</button>
                </div>
            </div>

           
                
            </form>
        </div>
    </div>
</div>
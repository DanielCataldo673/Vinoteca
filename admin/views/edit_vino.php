<?php
$id= $_GET['id'] ?? FALSE;

$vino = (new Vino())->producto_x_id($id);

$variedad = (new Variedad())->lista_completa();



?>

<div class="row my-5">
<div class="col">
        <h1 class="text-decoration-underline fst-italic text-center mb-5 fw-bold">Edición de datos de :
            <span class="danger" style="color: #39A7FF;"><?= $vino->nombre_completo()?></span>
        </h1>
        <div class="row mb-5 d-flex align-items-center">
            <form class="row g-3" action="actions/edit_vino_acc.php?id=<?=$vino->getId()?>" method="POST" enctype="multipart/form-data">
                <!-- enctype poder cargar imagenes al servidor -->
            
            <div class="col-md-4 mb-3 text-center">
                <label for="titulo" class="form-label text-decoration-underline form-label fw-bold fs-5 fst-italic">Titulo</label>
                <input type="text" class="form-control border border-dark border-2 rounded-pill shadow-lg text-center fw-bold" id="titulo" name="titulo"  value="<?= $vino->getTitulo() ?>" required>
            </div>
         
           
            <div class="col-md-4 mb-3 text-center">
                <label for="marca" class="form-label text-decoration-underline form-label fw-bold fs-5 fst-italic">Marca</label>
                <input type="text" class="form-control border border-dark border-2 rounded-pill shadow-lg text-center fw-bold" id="marca" name="marca" value="<?= $vino->getMarca()?>" required>
            </div>

            <div class="col-md-4 mb-3 text-center">
                <label for="cosecha" class="form-label text-decoration-underline form-label fw-bold fs-5 fst-italic">Cosecha</label>
                <input type="text" class="form-control border border-dark border-2 rounded-pill shadow-lg text-center fw-bold" id="cosecha" name="cosecha" value="<?= $vino->getCosecha()?>" required>
            </div>

            <div class="col-md-12 mb-3 text-center">
                <label for="caracteristicas" class="form-label text-decoration-underline form-label fw-bold fs-5 fst-italic">Caracteristicas</label>
                <textarea class="form-control border border-dark border-2 rounded-2 shadow-lg text-center fw-bold" name="caracteristicas" id="caracteristicas"><?= $vino->getCaracteristicas()?>"</textarea>
            </div>

            

            <div class="col-md-4 mb-3 text-center">
                <label for="alcohol" class="form-label text-decoration-underline form-label fw-bold fs-5 fst-italic">Alcohol</label>
                <input type="text" class="form-control border border-dark border-2 rounded-pill shadow-lg text-center fw-bold" id="alcohol" name="alcohol" value="<?= $vino->getAlcohol()?>" required>
            </div>

            <div class="col-md-4 mb-3 text-center">
                <label for="acidez_total" class="form-label text-decoration-underline form-label fw-bold fs-5 fst-italic">Acidez Total</label>
                <input type="text" class="form-control border border-dark border-2 rounded-pill shadow-lg text-center fw-bold" id="acidez_total" name="acidez_total" value="<?= $vino->getAcidez_total()?>" required>
            </div>

            <div class="col-md-4 mb-3 text-center">
                <label for="azucar_residual" class="form-label text-decoration-underline form-label fw-bold fs-5 fst-italic">Azucar Residual</label>
                <input type="text" class="form-control border border-dark border-2 rounded-pill shadow-lg text-center fw-bold" id="azucar_residual" name="azucar_residual" value="<?= $vino->getAzucar_residual()?>" required>
            </div>


            <div class="col-md-6 mb-3 text-center">
                <label for="imagen_og" class="text-decoration-underline form-label fw-bold fs-5 fst-italic">Imagen Actual</label>
                <img class="img-fluid rounded-4 shadow-sm d-block border border-dark border-2 mx-auto" width="250px" src="../img/<?= $vino->getImagen()?>" alt="">
                <input type="hidden" class="form-control border border-dark border-2 rounded-pill shadow-lg" id="imagen_og" name="imagen_og" value="<?= $vino->getImagen()?>">

            </div>

            <div class="col-md-6 mb-3 text-center">
                <label for="imagen" class="form-label text-decoration-underline form-label fw-bold fs-5 fst-italic">Reemplazar Imagen</label>
                <input type="file" class="form-control fw-bold border border-dark border-2 rounded-pill shadow-lg" id="imagen" name="imagen">

            </div>

            

            <div class="col-md-6 mb-3 text-center">
                <label for="precio" class="form-label text-decoration-underline form-label fw-bold fs-5 fst-italic">Precio</label>
                <input type="number" class="form-control text-center fw-bold border border-dark border-2 rounded-pill shadow-lg" id="precio" name="precio" value="<?= $vino->getPrecio()?>" required>
            </div>

            
            <div class="col-md-6 mb-3 text-center">
                <label for="variedad_id" class="form-label  text-decoration-underline form-label fw-bold fs-5 fst-italic">Variedad</label>
                <select class="form-select border border-dark border-2 rounded-pill shadow-lg" name="variedad_id" id="variedad_id" require> 
                    <option class="fw-bold fs-5" value="">Elija una opción</option>

                    <?php foreach ($variedad as $V) { ?>
                        <option class="text-center fw-bold" value="<?= $V->getId() ?>" <?=  $V->getId() ==$vino->getVariedad()->getId() ? "selected" : ""  ?>  ><?= $V->getNombre() ?></option>
                    <?php }?>    

                </select>

            </div>

            
                
            </div>
             <div class="text-center">
                <button type="submit" class="btn btn-info btn-lg fw-bold mx-auto border border-dark border-2 rounded-pill shadow-sm"><marquee behaviour="scroll" scrolldelay="180" class="fs-4" style="color:#000" loop="">EDITAR</marquee></button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
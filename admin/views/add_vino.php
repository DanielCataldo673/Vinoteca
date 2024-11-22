<?php

$variedad = (new Variedad())->lista_completa();






?>

<div class="row my-5">
    <div class="col">
        <h1 class="text-decoration-underline fst-italic text-center mb-5 fw-bold">Agregar Nuevo Vino</h1>

        <div class="row mb-5 d-flex align-items-center">
            <form class="row g-3" action="actions/add_vino_acc.php" method="POST" enctype="multipart/form-data">
                <!-- enctype poder cargar imagenes al servidor -->

                <div class="col-md-4 mb-3 text-center">
                <label for="titulo" class="form-label text-decoration-underline form-label fw-bold fs-5 fst-italic">Titulo</label>
                <input type="text" class="form-control border border-dark border-2 rounded-pill shadow-lg text-center fw-bold" id="titulo" name="titulo" required>
            </div>
            
            <div class="col-md-4 mb-3 text-center">
                <label for="marca" class="form-label text-decoration-underline form-label fw-bold fs-5 fst-italic">Marca</label>
                <input type="text" class="form-control border border-dark border-2 rounded-pill shadow-lg text-center fw-bold" id="marca" name="marca" required>
            </div>


            <div class="col-md-4 mb-3 text-center">
                <label for="cosecha" class="form-label text-decoration-underline form-label fw-bold fs-5 fst-italic">Cosecha</label>
                <input type="text" class="form-control border border-dark border-2 rounded-pill shadow-lg text-center fw-bold" id="cosecha" name="cosecha" required>
            </div>
            
            <div class="col-md-12 mb-3 text-center">
                <label for="caracteristicas" class="form-label text-decoration-underline form-label fw-bold fs-5 fst-italic">Caracteristicas</label>
                <textarea class="form-control border border-dark border-2 rounded-2 shadow-lg text-center fw-bold" name="caracteristicas" id="caracteristicas"></textarea>
            </div>



            <div class="col-md-4 mb-3 text-center">
                <label for="alcohol" class="form-label text-decoration-underline form-label fw-bold fs-5 fst-italic">Alcohol</label>
                <input type="text" class="form-control border border-dark border-2 rounded-pill shadow-lg text-center fw-bold" id="alcohol" name="alcohol" required>
            </div>

            <div class="col-md-4 mb-3 text-center">
                <label for="imagen" class="form-label text-decoration-underline form-label fw-bold fs-5 fst-italic">Imagen</label>
                <input type="file" class="form-control border border-dark border-2 rounded-pill shadow-lg text-center fw-bold" id="imagen" name="imagen" required>

            </div>
            <div class="col-md-4 mb-3 text-center">
                <label for="acidez_total" class="form-label text-decoration-underline form-label fw-bold fs-5 fst-italic">Acidez Total</label>
                <input type="text" class="form-control border border-dark border-2 rounded-pill shadow-lg text-center fw-bold" id="acidez_total" name="acidez_total" required>
            </div>

           
                <div class="col-md-4 mb-3 text-center">
                <label for="azucar_residual" class="form-label text-decoration-underline form-label fw-bold fs-5 fst-italic">Azucar Residual</label>
                <input type="text" class="form-control border border-dark border-2 rounded-pill shadow-lg text-center fw-bold" id="azucar_residual" name="azucar_residual" required>
            </div>

            <div class="col-md-4 mb-3 text-center">
                <label for="precio" class="form-label text-decoration-underline form-label fw-bold fs-5 fst-italic">Precio</label>
                <input type="number" class="form-control border border-dark border-2 rounded-pill shadow-lg text-center fw-bold" id="precio" name="precio" required>
            </div>

            <div class="col-md-4 mb-3 text-center">
                <label for="variedad_id" class="form-label text-decoration-underline form-label fw-bold fs-5 fst-italic">Variedad</label>
                <select class="form-select border border-dark border-2 rounded-pill shadow-lg text-center fw-bold" name="variedad_id" id="variedad_id" require> 
                    <option class="text-center fw-bold fs-4" value="">Elija una opción</option>

                    <?php foreach ($variedad as $V) { ?>
                        <option value="<?= $V->getId() ?>"><?= $V->getNombre() ?></option>
                    <?php }?>    

                </select>

            </div>
                
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-info btn-lg fw-bold mx-auto border border-dark border-2 rounded-pill shadow-sm">Cargar</button>
                </div>
            </form>
        </div>
    </div>
</div>
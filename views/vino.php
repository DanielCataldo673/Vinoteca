 <?php
    $id = $_GET['id'] ?? FALSE;
    $miObjetoVino = new Vino();
    $vino = $miObjetoVino->producto_x_id($id)


?>

<?php if(isset($vino)){  ?><!-- Determina si una variable está definida y no es NULL --> 
     <h1 class="text-center my-5 text-decoration-underline fst-italic"><?= $vino->getMarca() ;  ?></h1>

     <div class="col">
        <div class="card mb-4 border-dark border-1 shadow-lg">
            <div class="row">
                <div class="col-5">
                    <img class="card-img-fluid" src="img/<?= $vino->getImagen() ; ?>" alt="">
                </div>
                <div class="col-7">
                    <div class="card-body">
                       <h2 class="card-text text-decoration-underline text-center fs-3"><?= $vino->nombre_completo() ; ?></h2>


                        <p class="fs-5 fst-italic text-center mt-4"><?= $vino->getMarca() ; ?></p>

                        <p class="card-text"><span class="text-decoration-underline">Características</span> 
                        <br><?= $vino->getCaracteristicas() ; ?></p>
                        <p class="card-text"><span class="text-decoration-underline">Cosecha</span> 
                        <br>
                        <?= $vino->getCosecha() ; ?></p>
                        <p class="card-text"><span class="text-decoration-underline">Alcohol</span>: <?= $vino->getAlcohol() ; ?> % vol</p>
                        <p class="card-text"><span class="text-decoration-underline">Acidez Total</span>: <?= $vino->getAcidez_total() ; ?> %</p>
                        <p class="card-text"><span class="text-decoration-underline">Azúcar Residual</span>: <?= $vino->getAzucar_residual() ; ?> g/l</p>
                        </div>
                    
                    <div class="card-body mt-auto">
                            <div class="fs-3 mb-3 fw-bold text-center text-dark">$ <?= number_format($vino->getPrecio(),3, ".", ",") ?></div>

                            <a href="index.php?sec=contacto"  class="btn btn-dark w-100 fw-bold">Comprar</a>


                    </div>
                </div>

            </div>

        </div>
     </div>
     
<?php } ?> 
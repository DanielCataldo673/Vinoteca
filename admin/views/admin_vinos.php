<?php
$vinos = (new Vino())->catalogo_completo();



/* echo "<pre>";
print_r($vinos);

echo "</pre>";
 */


?>




    <header>
        <h1 class="mt-5 ms-3 text-decoration-underline fst-italic text-center">Administración de Vinos</h1>

        <div>
        <?= (new Alerta())->get_alertas() ?>
        </div>
    </header>
    <div class="container">

        <div class="row mt-4">

            <table class="table table-info table-striped border border-dark border-2 shadow-lg">
                <tr class="text-center">
                    <th scope="col" width="15%">Imagen</th>
                    <th scope="col" width="15%">Nombre</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Caracteristicas</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Cosecha</th>
                    <th scope="col">Alcohol</th>
                    <th scope="col">Acidez Total</th>
                    <th scope="col">Azucar Residual</th> 
                    <th scope="col">Precio</th>
                    <th scope="col">Variedad</th>
                    <th scope="col">Acciones</th>
                    
                </tr>
                <?php foreach ($vinos as $V) {  ?>
                    <tr>
                        <td><img src="../img/<?= $V->getImagen(); ?>" alt="" class="img-fluid rounred shadow-sm border border-dark border-2"></td>
                        <th scope="row"><?= $V->nombre_completo() ?></th>
                        <td class="fw-bold"><?= $V->getTitulo(); ?></td>
                        <td class="fw-bold">
                            <?= rtrim(substr($V->getCaracteristicas(), 0, 30)) . (strlen($V->getCaracteristicas()) > 30 ? '...' : '') ?>
                        </td>
                        <td class="fw-bold"><?= $V->getMarca(); ?></td>
                        <td class="fw-bold"><?= $V->getCosecha(); ?></td>
                        <td class="fw-bold"><?= $V->getAlcohol(); ?></td>
                        <td class="fw-bold"><?= $V->getAcidez_total(); ?></td>
                        <td class="fw-bold"><?= $V->getAzucar_residual(); ?></td>
                        <td class="fw-bold"><?= $V->getPrecio(); ?></td>
                        <td class="fw-bold"><?= $V->nombre_completo(); ?></td>
                        <td>
                            <a class="btn btn-outline-info btn-sm fw-bold" href="index.php?sec=edit_vino&id=<?= $V->getId() ?>">Editar</a>

                            <a class="btn btn-outline-danger btn-sm mt-2 fw-bold" href="index.php?sec=delete_vino&id=<?= $V->getId() ?>">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
            <a class="btn btn-info mt-2 mb-4 fw-bold mx-auto border border-dark border-2 rounded-pill shadow-lg" href="index.php?sec=add_vino">Cargar Nuevo Vino</a>
        </div>
    </div>


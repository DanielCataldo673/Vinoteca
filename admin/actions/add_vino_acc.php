<?php
require_once "../../functions/autoload.php";


$postData = $_POST;
$fileData = $_FILES['imagen'];



try {
    $vino = new Vino();

    $imagen = (new Imagen())->subirImagen(__DIR__."/../../img",$fileData);

    $idVino = $vino->insert(
        $postData['titulo'],
        $postData['marca'],
        $postData['cosecha'],
        $postData['caracteristicas'],
        $postData['alcohol'],
        $postData['acidez_total'],
        $postData['azucar_residual'],
        $imagen,
        $postData['precio'],
        $postData['variedad_id'],
       
       

    );

    (new Alerta())->add_alerta("success", "El vino se cargo correctamente");

    header('Location: ../index.php?sec=admin_vinos');
} catch (\Exception $e) {
    die("No se pudo cargar el Vino " . $e);
}





?>
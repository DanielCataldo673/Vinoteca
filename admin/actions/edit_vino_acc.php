<?php
require_once "../../functions/autoload.php";


$postData = $_POST;
$fileData = $_FILES['imagen'] ?? FALSE;

$id = $_GET['id'] ?? false;


echo "<pre>";
print_r($postData);

echo "</pre>";


try {
     $vino = new Vino();

     if (!empty($fileData['tmp_name'])) {
        if (!empty($postData['imagen_og'])) {
            (new Imagen())->borrarImagen(__DIR__."/../../img/".$postData['imagen_og'] );
        }
        $imagen = (new Imagen())->subirImagen(__DIR__."/../../img",$fileData);

        $vino->reemplazar_imagen($imagen, $id);
     }
    




    $vino->edit(
        $postData['titulo'],
        $postData['marca'],
        $postData['cosecha'],
        $postData['caracteristicas'],
        $postData['alcohol'],
        $postData['acidez_total'],
        $postData['azucar_residual'],
        $postData['precio'],
        $postData['variedad_id'],
        $id );

       
    (new Alerta())->add_alerta("warning", "El vino se edito correctamente");
    

    header('Location: ../index.php?sec=admin_vinos');
} catch (\Exception $e) {

    echo $e->getMessage();
    die("No se pudo editar el Vino");
}





?>
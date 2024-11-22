<?php
require_once "../../functions/autoload.php";
 $id = $_GET['id'] ?? FALSE;

 $vino = (new Vino())->producto_x_id($id);

 try {
    if (!empty($vino->getImagen())) {
        (new Imagen())->borrarImagen(__DIR__."/../../img/".$vino->getImagen() );
    }

    $vino->delete();
    (new Alerta())->add_alerta("danger", "El vino se eliminó correctamente");

    header('Location: ../index.php?sec=admin_vinos');


 } catch (\Exception $e) {
    die("No se pudo eliminar el Vino");
 }


 
?>
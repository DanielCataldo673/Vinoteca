<?php
require_once "../../functions/autoload.php";

$postData = $_POST;
$id = $_GET['id'] ?? false;

try {
    $variedad = new Variedad();
    $variedad->edit($postData['nombre'], $id);
    (new Alerta())->add_alerta("warning", "La Variedad se edito correctamente");
    header('Location: ../index.php?sec=admin_variedad');
} catch (\Exception $e) {
    echo $e->getMessage();
    die("No se pudo editar la Variedad");
}
?>

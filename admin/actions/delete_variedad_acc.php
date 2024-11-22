<?php
require_once "../../functions/autoload.php";

$id = $_GET['id'] ?? FALSE;

$variedad = (new Variedad())->get_x_id($id);

try {
    $variedad->delete();
    (new Alerta())->add_alerta("danger", "La variedad se eliminó correctamente");
    header('Location: ../index.php?sec=admin_variedad');
} catch (\Exception $e) {
    die("No se pudo eliminar la variedad". $e);
}
?>

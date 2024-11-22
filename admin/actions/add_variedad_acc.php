 <?php
require_once "../../functions/autoload.php";


$postData = $_POST;




try {
    

    (new Variedad())->insert($postData['nombre']);

    (new Alerta())->add_alerta("success", "La Variedad se cargo correctamente");

    header('Location: ../index.php?sec=admin_variedad');
} catch (\Exception $e) {
    die("No se pudo cargar la Variedad");
}


?>




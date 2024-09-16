<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once './controllers/ProductosController.php';

$action = isset($_GET['action']) ? htmlspecialchars($_GET['action']) : "";
$id = isset($_GET['id']) ? intval($_GET['id']) : ""; 

$controller = new ProductosController();

// Mostrar errores para debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

switch ($action) {
    case 'create':
        $controller->create();
        break;
    case 'edit':
        if ($id) {
            $controller->edit($id);
        } else {
            $controller->index();
        }
        break;
    case 'delete':
        if ($id) {
            $controller->delete($id); 
        } else {
            $controller->index();
        }
        break;
    default:
        $controller->index();
        break;
}
?>

<?php

// quiero ver los errores de php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
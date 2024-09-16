<?php
require_once(dirname(__FILE__)."/../config/database.php");
require_once(dirname(__FILE__)."/../models/Productos.php");



class ProductosController {
    private $db;
    private $producto;

    public function __construct(){
        $database = new Database();
        $this->db = $database->getConnection();
        $this->producto = new Productos($this->db);
    }
    

    public function index() {
        $result = $this->producto->get_products();
        $productos = $result->fetchAll(PDO::FETCH_ASSOC);

        include(dirname(__FILE__) . '/../views/productos.php');
    }

    public function create() {
        if ($_POST) {
            $this->producto->name = $_POST["name"];
            $this->producto->description = $_POST["description"];
            $this->producto->categorie = $_POST["categorie"];

            header("Location: index.php");
            return $this->producto->create(); 
        }

        include(dirname(__FILE__) . '/../views/create.php');
    }

    public function edit($id) {
        $this->producto->id = $id;
        $this->producto->get_product_by_id();

        if ($_POST) {
            $this->producto->id = $_POST["id"];
            $this->producto->name = $_POST["name"];
            $this->producto->description = $_POST["description"];
            $this->producto->categorie = $_POST["categorie"];

            header("Location: index.php");
            return $this->producto->update(); 
        }

        include(dirname(__FILE__) . '/../views/update.php');
    }

    public function delete($id) {
        $this->producto->id = $id;

        header("Location: index.php");
        return $this->producto->delete(); 
    }
}

?>
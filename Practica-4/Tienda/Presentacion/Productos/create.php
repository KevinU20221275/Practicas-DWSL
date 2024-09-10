<?php
require_once "Negocio/categorias.php";
require_once "Negocio/productos.php";


$productos = new Productos();
$categorias = new Categorias();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>

<div class="card m-auto mt-5 p-3 bg-secondary text-white" style="width: 600p;">
    <h3 class="text-center">Agregar Producto</h3>
    <form action="" method="post">
        <div class="row justify-content-center mt-4">
            <div class="col-12 col-md-6">
                <label for="">Nombre</label>
                <input type="text" class="form-control bg-dark text-white" name="name" value="">
            </div>
            <div class="col-12 col-md-6">
                <label for="">Descripción</label>
                <input type="text" class="form-control bg-dark text-white" name="description" value="">
            </div>
            <div class="col-12 col-md-6 mt-2">
                <label for="">Categoría</label>
                <select class="form-select bg-dark text-white" name="categorie">
                    <?php foreach ($categorias->list_categories() as $cat) {
                        echo 'Esto es  cat'.$cat;
                        ?>
                        <option value="<?= $cat['id'] ?>">
                            <?= $cat['name']?>
                        </option>
                        <?php } ?>
                </select>
            </div>
            <div class="col-12 col-md-6 mt-2"></div>
        </div>
        <div class="d-flex justify-content-around mt-4">
            <div>
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>
            <div>
                <button type="button" onclick="location.replace('index.php?mod=&form=li');" class="btn btn-danger">Cancelar</button>
            </div>
        </div>
    </form>
</div>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $productos->name = $_POST['name'];
    $productos->description = $_POST['description'];
    $productos->categorie = $_POST['categorie'];

    if ($productos->add()){
        echo "<script>location.replace('index.php?mod=&form=li')</script>";
    } else {
        echo 'Error al agregar el producto';
    }
}

?>
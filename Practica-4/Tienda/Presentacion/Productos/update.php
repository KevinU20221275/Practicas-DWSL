<?php
require_once "Negocio/categorias.php";
require_once "Negocio/productos.php";


$productos = new Productos();
$categorias = new Categorias();

$producto = $productos->get_producto($_GET['id']);

?>

<div class="card m-auto mt-5 p-3 bg-secondary text-white" style="width: 600p;">
    <h3 class="text-center">Editar Producto</h3>
    <form action="" method="post">
        <div class="row justify-content-center mt-4">
            <div class="col-12 col-md-6">
                <label for="">Nombre</label>
                <input type="text" class="form-control bg-dark text-white" name="name" value="<?= $producto['name']?>">
            </div>
            <div class="col-12 col-md-6">
                <label for="">Descripción</label>
                <input type="text" class="form-control bg-dark text-white" name="description" value="<?= $producto['description']?>">
            </div>
            <div class="col-12 col-md-6 mt-3">
                <label for="">Categoría</label>
                <select class="form-select bg-dark text-white" name="categorie">
                    <?php foreach ($categorias->list_categories() as $cat) {
                        if ($cat['id'] == $producto['id_categorie']) {
                            echo '<option selected value="'.$cat['id'].'">'. $cat['name'].'</option>';
                        } else {
                            echo '<option value="'.$cat['id'].'">'. $cat['name'].'</option>';
                        }
                    }?>
                </select>
            </div>
            <div class="col-12 col-md-6 mt-3"></div>
        </div>
        <div class="d-flex justify-content-around mt-4">
            <div>
                <button type="submit" class="btn btn-success">Actualizar</button>
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

    if ($productos->update($_GET['id'])){
        echo "<script>location.replace('index.php?mod=&form=li')</script>";
    } else {
        echo 'Error al actualizar el producto';
    }
}

?>
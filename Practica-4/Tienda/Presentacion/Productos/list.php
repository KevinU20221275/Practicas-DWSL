<?php
require_once "Negocio/categorias.php";
require_once "Negocio/productos.php";


$productos = new Productos();
$categorias = new Categorias();


?>


<div class="card m-auto p-3 mt-3 bg-secondary text-white" style="width: 800px;">
    <div class="d-flex justify-content-between">
        <h2>Listado de Productos</h2>
        <button class="btn btn-success" onclick="location.replace('index.php?mod=&form=ad')">Agregar</button>
    </div>
    <table class="table table-striped table-bordered table-hover table-dark mt-2">
        <thead class="thead-dark text-center">
            <tr>
                <th>Producto</th>
                <th>Precio</th>
                <th>Categoría</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $lista_productos = $productos->list_products();
            if (count($lista_productos) > 0) {
                foreach ($lista_productos as $prod) {
                ?>
                <tr>
                    <td><?php echo $prod['name']?></td>
                    <td><?php echo $prod['description']?></td>
                    <td><?php echo $prod['categoryName']?></td>
                    <td>
                        <button onclick="editar(<?= $prod['id']; ?>)" class="btn btn-info">
                            Editar
                        </button>
                        <button onclick="eliminar(<?= $prod['id'];?>)" class="btn btn-danger">
                            Eliminar
                        </button>
                    </td>
                </tr>
            <?php }
            } else {?>
            <tr>
                <td>No hay registros</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php }?>
            </tbody>
    </table>
</div>


<script>
    function editar(id){
        document.location.replace('index.php?mod=&form=up&id=' + id);
    }

    function eliminar(id){
        document.location.replace('index.php?mod=&form=del&id=' + id)
    }
</script>
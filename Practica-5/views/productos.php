<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<body class="bg-dark">
    <div class="container bg-secondary rounded">
        <div class="card m-auto mt-5 p-4 bg-secondary rounded text-white">
            <div class="row my-2">
                <h2 class="col-md-9">Lista de productos</h2>
                <div class="col-md-3">
                    <a href="index.php?action=create" type="button" class="btn btn-success">Agregar</a>
                </div>
            </div>
            <table class="table table-striped table-bordered table-hover table-dark">
                <thead class="thead-dark text-center">
                    <tr>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Categoría</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($productos as $producto) : 
                       ?>
                        <tr>
                            <td><?php echo htmlspecialchars($producto['name']); ?></td>
                            <td><?php echo htmlspecialchars($producto['description']); ?></td>
                            <td><?php echo htmlspecialchars($producto['categorie']); ?></td>
                            <td>
                                <a href="index.php?action=edit&id=<?= $producto['id']; ?>" class="btn btn-primary">Editar</a>
                                <a href="index.php?action=delete&id=<?= $producto['id']; ?>" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

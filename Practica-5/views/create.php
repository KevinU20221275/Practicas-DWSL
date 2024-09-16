<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<body class="bg-dark">
    <div class="container bg-secondary p-4 mt-5 rounded">
        <form action="" method="post" name="frmCreate">
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" class="form-control bg-dark text-white"" id="name" name="name">
            </div>
            <div class="form-group mt-2">
                <label for="description">Descripción:</label>
                <textarea class="form-control bg-dark text-white"" id="description" name="description"></textarea>
            </div>
            <div class="form-group mt-2">
                <label for="categorie">Categoría:</label>
                <input type="text" name="categorie" class="form-control bg-dark text-white"">
            </div>
            <div class="form-group mt-2 p-2 d-flex justify-content-center gap-2">
                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="index.php" class="btn btn-danger">Cancelar</a>
            </div>
        </form>
    </div>
</body>
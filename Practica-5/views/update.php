<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<body class="bg-dark h-100">
    <div class="container bg-secondary p-4 rounded mt-5">
        <form action="" method="post" name="frmCreate">  
            <input type="hidden" name="id" value="<?php echo $this->producto->id;?>" />   <!-- Para actualizar un producto -->
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" class="form-control bg-dark text-white" id="name" name="name" 
                value="<?= htmlspecialchars($this->producto->name); ?>">
            </div>
            <div class="form-group mt-2">
                <label for="description">Descripción:</label>
                <textarea class="form-control bg-dark text-white"" id="description" name="description"><?= htmlspecialchars($this->producto->description); ?></textarea>
            </div>
            <div class="form-group mt-2">
                <label for="categorie">Categoría:</label>
                <input type="text" name="categorie" class="form-control bg-dark text-white"" 
                value="<?= htmlspecialchars($this->producto->categorie); ?>"> 
            </div>
            <div class="form-group p-2 mt-2 d-flex gap-2 justify-content-center">
                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="index.php" class="btn btn-danger">Cancelar</a>
            </div>
        </form>
    </div>
</body>
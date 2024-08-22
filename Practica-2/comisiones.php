<?php
$comision = "";
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombreEmpleado = isset($_POST['nombre']) ? $_POST['nombre'] : "";
    $cantidadVendida = isset($_POST['cantidad']) ? $_POST['cantidad'] : "";

    if ($nombre !== "" && $cantidadVendida !== "" && floatval($cantidadVendida)) {
        if ($cantidadVendida >= 10000 && $cantidadVendida < 12000) {
            $comision = $cantidadVendida * 0.03;
        } else if ($cantidadVendida >= 12000 && $cantidadVendida < 15000) {
            $comision = $cantidadVendida * 0.05;
        } else if ($cantidadVendida >= 15000) {
            $comision = $cantidadVendida * 0.10;
        } else {
            $comision = "Sin comision";
        }
    } else {
        $message = "Error <br> Debe LLenar todos los campos <br>
        Por favor Revise los datos Ingresados";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Galardon de Empleados</title>
</head>
<style>
    body {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #f8f9fa;
    }

    .result {
        height: 130px;
        background-color: #fff;
        border-radius: 5px;
    }
</style>

<body>
    <div class="container">
        <div class="result mb-2 p-2">
            <h2 class="text-center">Galardones Segun años en la Empresa</h2>
            <p>Empleado:
                <strong><?php echo $nombreEmpleado ?></strong>
            </p>
            <p>
                Comision:
                <strong>$<?php echo $comision ?></strong>
            </p>
        </div>
        <form action="comisiones.php" method="post">
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="nombre" class="form-label">Ingrese el nombre del empleado</label>
                    <input type="text" class="form-control" id="" name="nombre">
                </div>
                <div class="mb-3 col-md-6">
                    <label for="cantidad" class="form-label">Ingrese el monto vendido</label>
                    <input type="text" class="form-control" id="" name="cantidad">
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        <p class="text-danger text-center"><?php echo $message ?></p>
    </div>
</body>

</html>
<?php
$years = isset($_POST['years']) ? $_POST['years'] : "";

if ($years !== "") {
    $galardonCorrespondiente = "";
    if ($years == 2){
        $galardonCorrespondiente = "El empleado ha ganado un galardón de $500.00";
    } else if ($years >= 3 && $years < 5){
        $galardonCorrespondiente = "El empleado ha ganado un galardón de $700.00";
    } else if ($years >= 5 && $years < 10){
        $galardonCorrespondiente = "El empleado ha ganado un galardón de $1000.00";
    } else if ($years >= 10){
        $galardonCorrespondiente = "El empleado ha ganado un galardón de $2000.00";
    } else {
        $galardonCorrespondiente = "El empleado no ha ganado un galardón";
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
        height: 100px;
        background-color: #fff;
        border-radius: 5px;
    }
</style>

<body>
    <div class="container">
        <div class="result mb-2 p-2">
            <h2 class="text-center">Galardones Segun años en la Empresa</h2>
            <p class="text-primary pt-2"><?php echo $galardonCorrespondiente ?></p>
        </div>
        <form action="galardonEmpleados.php" method="post">
            <div class="row">
                <div class="mb-3">
                    <label for="years" class="form-label">Ingrese el numero de años que el empleado lleva en la empresa</label>
                    <input type="number" class="form-control" id="" name="years">
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>
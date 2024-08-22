<?php
$dia = isset($_POST['dia']) ? $_POST['dia'] : "";

if ($dia !== "") {
    $diaCorrespondiente = "";
    switch ($dia) {
        case 1:
            $diaCorrespondiente = "El día $dia es Lunes";
            break;
        case 2:
            $diaCorrespondiente = "El día $dia es Martes";
            break;
        case 3:
            $diaCorrespondiente = "El día $dia es Miercoles";
            break;
        case 4:
            $diaCorrespondiente = "El día $dia es Jueves";
            break;
        case 5:
            $diaCorrespondiente = "El día $dia es Viernes";
            break;
        case 6:
            $diaCorrespondiente = "El día $dia es Sabado";
            break;
        case 7:
            $diaCorrespondiente = "El día $dia es Domingo";
            break;
        default:
            $diaCorrespondiente = "El día ingresado no es válido";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>tabla de Multiplicar</title>
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
            <h2 class="text-center">Dias de la Semana</h2>
            <p class="text-primary pt-2"><?php echo $diaCorrespondiente ?></p>
        </div>
        <form action="diaSemana.php" method="post">
            <div class="row">
                <div class="mb-3">
                    <label for="dia" class="form-label">Ingrese un numero para mostrar el dia correspondiente</label>
                    <input type="number" min="1"  max="7" class="form-control" id="" name="dia">
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>
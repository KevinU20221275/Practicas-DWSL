<?php
$num1 = isset($_POST['num1']) ? $_POST['num1'] : "";

if ($num1 !== "") {
    $tablaMultiplicar = "";
    for ($i = 1; $i <= 10; $i++) {
        $tablaMultiplicar .= "
            <tr>
                <td>$num1</td>
                <td>x</td>
                <td>$i</td>
                <td> = </td>
                <td class='text-success'>" . ($num1 * $i) . "</td>
            </tr>";
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
        height: 300px;
        background-color: #fff;
        border-radius: 5px;
    }
</style>

<body>
    <div class="container">
        <div class="mb-2 p-2">
            <h2 class="text-center">Tabla de Multiplicar</h2>
        </div>
        <form action="tablaMultiplicar.php" method="post">
            <div class="row">
                <div class="mb-3">
                    <label for="num1" class="form-label">Ingrese el numero para generar la tabla</label>
                    <input type="number" class="form-control" id="" name="num1">
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        <div class="result mt-2">
            <?php
            if(isset($tablaMultiplicar)){
                echo "<h4 class='text-center pt-2'>Tabla de Multiplicar del $num1</h4>";
            }
            ?>
            <table class="mx-auto">
                <?php echo $tablaMultiplicar ?>
            </table>
        </div>
    </div>
</body>

</html>
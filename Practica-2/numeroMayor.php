<?php
$message = "";
$text_class = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = isset($_POST['num1']) ? $_POST['num1'] : "";
    $num2 = isset($_POST['num2']) ? $_POST['num2'] : "";
    $num3 = isset($_POST['num3']) ? $_POST['num3'] : "";
    if ($num1 !== "" && $num2 !== "" && $num3 !== "") {
        $text_class = "text-primary";
        if ($num1 > $num2 && $num1 > $num3) {
            $message = "El primer numero es el Mayor";
        } else if ($num2 > $num1 && $num2 > $num3) {
            $message = "El segundo numero es el Mayor";
        } else if ($num3 > $num1 && $num3 > $num2) {
            $message = "El tercer numero es el Mayor";
        } else {
            $message = "Los numeros son iguales";
        }
    } else {
        $text_class = "text-danger";
        $message = "Por favor ingrese los tres numeros";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Numero Mayor</title>
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
            <h2 class="text-center">¿Cual Numero es Mayor?</h2>
            <?php
            if (!empty($message)) {
                echo "<p class='text-center $text_class'>
                        $message
                    </p>";
            }
            ?>
        </div>
        <form action="numeroMayor.php" method="post">
            <div class="row">
                <div class="mb-3 col-md-4">
                    <label for="num1" class="form-label">Ingrese el primer numero</label>
                    <input type="number" class="form-control" id="" name="num1">
                </div>
                <div class="mb-3 col-md-4">
                    <label for="num2" class="form-label">Ingrese el segundo numero</label>
                    <input type="number" class="form-control" id="" name="num2">
                </div>
                <div class="mb-3 col-md-4">
                    <label for="num3" class="form-label">Ingrese el tercer numero</label>
                    <input type="number" class="form-control" id="" name="num3">
                </div>
            </div>
            <div class="d-flex justify-content-center">

                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>
<?php
$message = "";
$text_class = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lado1 = isset($_POST['lado1']) ? $_POST['lado1'] : "";
    $lado2 = isset($_POST['lado2']) ? $_POST['lado2'] : "";
    $lado3 = isset($_POST['lado3']) ? $_POST['lado3'] : "";

    if ($lado1 !== "" && $lado2 !== "" && $lado3 !== "") {
        $text_class = "text-primary";
        if ($lado1 == $lado2 && $lado1 == $lado3) {
            $message = "El triángulo es Equilátero";
        } else if ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
            $message = "El triángulo es Isósceles";
        } else {
            $message = "El triángulo es Escaleno";
        }
    } else {
        $text_class = "text-danger";
        $message = "Por favor ingrese los tres lados del triángulo";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Tipos de triangulos</title>
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
            <h2 class="text-center">¿Que tipo de Triangulo es?</h2>
            <?php
            if (!empty($message)) {
                echo "<p class='text-center $text_class'>
                        $message
                    </p>";
            }
            ?>
        </div>
        <form action="triangulos.php" method="post">
            <div class="row">
                <div class="mb-3 col-md-4">
                    <label for="lado1" class="form-label">Ingrese la longitud del lado</label>
                    <input type="text" class="form-control" id="" name="lado1">
                </div>
                <div class="mb-3 col-md-4">
                    <label for="lado2" class="form-label">Ingrese la longitud del segundo lado</label>
                    <input type="text" class="form-control" id="" name="lado2">
                </div>
                <div class="mb-3 col-md-4">
                    <label for="lado3" class="form-label">Ingrese la longitud del tercer lado</label>
                    <input type="text" class="form-control" id="" name="lado3">
                </div>
            </div>
            <div class="d-flex justify-content-center">

                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>
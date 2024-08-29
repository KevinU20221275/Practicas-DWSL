<?php
$filas = isset($_POST['filas']) ? $_POST['filas'] : "";
$columnas = isset($_POST['columnas']) ? $_POST['columnas'] : "";
$cells = "";

if (!empty($filas) && !empty($columnas)) {
    $cells = $filas * $columnas;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajedres</title>
</head>
<style>
    * {
        box-sizing: border-box;
        padding: 0;
        margin: 0;
    }

    body {
        background-color: #eee;
    }

    .black {
        background-color: #000;
    }

    .white {
        background-color: #fff;
    }

    .board {
        display: grid;
        width: max-content;
        background-color: #eee;
        margin: 0 auto;

        & .cell {
            width: 100px;
            height: 100px;
            border: 1px solid #000;
        }
    }

    form {
        max-width: 400px;
        margin: 20px auto;
        padding-top: 0.4rem;
        background-color: #fff;
        border-radius: 0.4rem;

        h3 {
            text-align: center;
        }

        fieldset {
            display: grid;
            grid-template-columns: 75px 1fr;
            place-content: center;
            border: none;
            padding: 0.8rem 0.5rem;

            label {
                padding: 0.3rem 0;
                vertical-align: middle;
            }

            input {
                padding: 0.3rem;
            }

            input[type='submit'] {
                padding: 0.5rem 1rem;
                background-color: #333;
                border-radius: 0.3rem;
                color: #fff;
                border: none;
                cursor: pointer;
                transition: background-color 0.3s ease;

                &:hover {
                    background-color: #555;
                }
            }
        }

        & .field-btn {
            display: flex;
            justify-content: center;
        }
    }
</style>

<body>
    <form action="ajedrez.php" method="post">
        <h3>Generar Tablero de Ajedrez</h3>
        <fieldset>
            <label for="filas">Filas:</label>
            <input type="number" name="filas" placeholder="ingrese el numero de filas">
        </fieldset>
        <fieldset>
            <label for="columnas">Columnas:</label>
            <input type="number" name="columnas" placeholder="ingrese el numero de columnas">
        </fieldset>
        <fieldset class="field-btn">
            <input type="submit" value="Generar Tablero">
        </fieldset>
    </form>

    <section class="board" style="grid-template-columns: repeat(<?= isset($columnas) ? $columnas : 0 ?>, 1fr);">
        <?php

        if (!empty($cells)) {
            $color = 'black';
            for ($i = 1; $i <= $cells; $i++) {
                echo "<div class='cell $color'></div>";

                if ($i % $columnas != 0) {
                    $color = ($color == 'black') ? 'white' : 'black';
                } else {
                    if ($columnas % 2 != 0) {
                        $color = ($color == 'black') ? 'white' : 'black';
                    }
                }
            }
        }

        ?>

    </section>

</body>

</html>
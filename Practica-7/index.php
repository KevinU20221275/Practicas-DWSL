<?php
$conn = mysqli_connect(hostname:'localhost', username: 'root', password: '', database: 'alumnos');
if ($conn->connect_error){
    die("Error de conexion: ". mysqli_connect_error());
}

$query = "SELECT * FROM departamentos";
$departamentos = $conn->query($query);

$conn->close();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulario</title>
</head>
<body>
    <form action="" id="form">
        <label for="nombres">Nombre:</label>
        <input type="text" id="nombres" name="nombres" required><br><br>

        <label for="apellidos">Apellido:</label>
        <input type="text" id="apellidos" name="apellidos" required><br><br>

        <label for="departamento">Departamento:</label>
        <select id="departamento" name="departamento" required>
            <option>-- Seleccione --</option>
        <?php
            if ($departamentos->num_rows > 0){
                while($departamento = $departamentos->fetch_assoc()){
                    echo "<option value='". $departamento['id']. "'>". $departamento['nombre']. "</option>";
                }
            }
        ?>
        </select><br><br>

        <label for="municipio">Municipio: </label>
        <select name="municipio" id="municipio">
            <option>-- Seleccione --</option>
        </select><br><br>

        <div class="genero">
            <label for="genero">Genero </label>
            <div class="grid">
                <input type="radio" id="masculino" name="genero" value="M" required>
                <label for="masculino">Masculino</label>
                <input type="radio" id="femenino" name="genero" value="F">
                <label for="femenino">Femenino</label>
            </div>
        </div>

        <input type="submit" value="Enviar">
    </form>

    <script src="script.js"></script>
</body>
</html>
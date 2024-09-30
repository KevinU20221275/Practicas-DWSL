<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $departamento = $_POST['departamento'];
    $id_municipio = $_POST['municipio'];
    $genero = $_POST['genero'];

    $conn = mysqli_connect(hostname:'localhost', username: 'root', password: '', database: 'alumnos');
    $query = "INSERT INTO alumnos (nombres, apellidos, genero, id_municipio) VALUES ('$nombres', '$apellidos', '$genero', $id_municipio)";

    if ($conn->query($query)){
        echo "Alumno agregado exitosamente";
    } else {
        echo "Error al agregar alumno";
    }

    $conn->close();
} else {
    echo "No se recibieron datos";
}

?>
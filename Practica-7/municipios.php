<?php
$conn = mysqli_connect(hostname:'localhost', username: 'root', password: '', database: 'alumnos');

$query = "SELECT * FROM municipios WHERE id_departamento = " . $_GET['id'];
$result = $conn->query($query);

while ($row = $result->fetch_assoc()){
    $municipios[] = $row;
}


echo Json_encode($municipios);

$conn->close();


?>
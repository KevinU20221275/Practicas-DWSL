<?php
require_once('dompdf/autoload.inc.php');

// reference the Dompdf namespace
use Dompdf\Dompdf;


$html = "
    <!DOCTYPE html>
<html>
<head>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: solid 1px #000;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Reporte de Productos</h1>
    <table>
        <thead>
            <th>Nombre</th>
            <th>Cantidad</th>
            <th>Precio</th>
        </thead>
        <tbody>
            <tr>
                <td>Cigarros</td>
                <td>10</td>
                <td>$1.50</td>
            </tr>
            <tr>
                <td>Pilsener</td>
                <td>50</td>
                <td>$1.60</td>
            </tr>
            <tr>
                <td>Coca Cola</td>
                <td>4</td>
                <td>$1.00</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
";

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream(filename: "reporte_de_productos.pdf");

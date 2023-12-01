<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TAREA N° 8</title>
  </head>
  <body>

    <h1>Tienda de ropa</h1>

  <button type="submit"><a href="buzo.php">Buzos</a></button>
  <button type="submit"><a href="nike.php">Nike</a></button>
  <button type="submit"><a href="caros.php">Precio mayor a $500</a></button>

    <h2>Lista de ropa</h2>
    <p>La siguiente lista muestra los datos de la ropa actualmente en stock.</p>
    <table border="1">
    <tr>
        <th>ID</th>
        <th>TIPO DE PRENDA</th>
        <th>MARCA</th>
        <th>TALLE</th>
        <th>PRECIO</th>
    </tr>


<?php

// 1) Conexion
$conexion = mysqli_connect("127.0.0.1", "root", "");
mysqli_select_db($conexion, "tienda");

// 2) Preparar la orden SQL
// Sintaxis SQL SELECT
// SELECT * FROM nombre_tabla
// => Selecciona todos los campos de la siguiente tabla
// SELECT campos_tabla FROM nombre_tabla
// => Selecciona los siguientes campos de la siguiente tabla
    $consulta1='SELECT * FROM ropa';

// 3) Ejecutar la orden y obtenemos los registros
$datos= mysqli_query($conexion, $consulta1);


// 4) Mostrar los datos del registro
while ($reg = mysqli_fetch_array($datos)) { ?>
    <tr>
    <td><?php echo $reg['id']; ?></td>
    <td><?php echo $reg['prenda']; ?></td>
    <td><?php echo $reg['marca']; ?></td>
    <td><?php echo $reg['talle']; ?></td>
    <td><?php echo $reg['precio']; ?></td>
    </tr>

        <?php } ?>

  </body>
</html>

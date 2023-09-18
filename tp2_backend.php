<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h1>TRABAJO PRÁCTICO 2</h1>

<?php

echo "<h1>EJERCICIO 1</h1>";
echo "<br>";

  $variable1=25;

  if ($variable1>0) {
    echo "Es un número positivo";
}

echo "<h1>EJERCICIO 2</h1>";
echo "<br>";

  $variable2=7;

  if ($variable2>0 & $variable2<10) {
    echo "Es un número mayor a 0 y menor que 10";
}

echo "<h1>EJERCICIO 3</h1>";
echo "<br>";

  $variable3=13;

  if ($variable3>10 || $variable3<2) {
    echo "Cumple la condición de ser mayor a 10 o menor que 2";
}

echo "<h1>EJERCICIO 4</h1>";
echo "<br>";

$numero1=2;
$numero2=7;

  if ($numero1>$numero2) {

    $suma=$numero1+$numero2;
      echo "$suma";
      echo "<br>";
    $resta=$numero1-$numero2;
      echo "$resta";
      echo "<br>";

  } elseif ($numero2>$numero1) {

    $multiplicacion=$numero2*$numero1;
      echo "$multiplicacion";
      echo "<br>";
    $division=ceil($numero2/$numero1)-$numero2%$numero1;
      echo "$division";
      echo "<br>";
    $resto=$numero2%$numero1;
      echo "$resto";
      echo "<br>";

  }  else {
      echo "Los números ingresados son iguales";
}


 ?>

  </body>
</html>

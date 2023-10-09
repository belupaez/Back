<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<h1>TRABAJO PRÁCTICO 4</h1>

<?php

echo "<br>";
echo "<h1>EJERCICIO 1</h1>";

  $i=1;

  while ($i <= 100) {
    print "<p>$i</p>\n";
    $i++;
  }

echo "<br>";
echo "<h1>EJERCICIO 2</h1>";

  $i=100;

  do {
    print "<p>$i</p>\n";
    $i--;
  } while ($i>=1);

echo "<br>";
echo "<h1>EJERCICIO 3</h1>";

  for ($i=2; $i <=100 ; $i+=2) {
    print "<p>$i</p>\n";
  }

echo "<br>";
echo "<h1>EJERCICIO 4</h1>";

  for ($i=1; $i <=100 ; $i+=2) {
    print "<p>$i</p>\n";
  }

echo "<br>";
echo "<h1>EJERCICIO 5</h1>";

  $suma=0;
  for ($i=1; $i <=20 ; $i++) {
    $suma+=$i;

    print "<p>La suma parcial es $suma</p>\n";
}
    echo "<br>";
    print "<p>LA SUMA DE LOS NÚMEROS DEL 1 AL 20 ES $suma<p/>\n";

echo "<br>";
echo "<h1>EJERCICIO 6</h1>";

$sumapares=0;

for ($i=0; $i <= 20 ; $i++) {
  if ($i%2==0) {
  $sumapares+=$i;
  }
}

  print "<p>LA SUMA DE LOS NÚMEROS PARES DEL 1 AL 20 ES $sumapares</p>\n";




 ?>

  </body>
</html>

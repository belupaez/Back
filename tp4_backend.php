<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h1>TRABAJO PRÁCTICO 4</h1>

<?php

print "<pre>\n";
echo "<br>";
  echo "<h1>EJERCICIO 1</h1>";

  $ejercicio1 = ["2",
                "4",
                "6",
                "8",
                "10",
                "12",
                "14",
                "16",
                "18",
                "20",
              ];

print "<pre>\n";
  print ($ejercicio1[0]);

print "<pre>\n";
  print ($ejercicio1[1]);

print "<pre>\n";
  print ($ejercicio1[2]);

print "<pre>\n";
  print ($ejercicio1[3]);

print "<pre>\n";
  print ($ejercicio1[4]);

print "<pre>\n";
  print ($ejercicio1[5]);

  print "<pre>\n";
    print ($ejercicio1[6]);

  print "<pre>\n";
    print ($ejercicio1[7]);

  print "<pre>\n";
    print ($ejercicio1[8]);

  print "<pre>\n";
    print ($ejercicio1[9]);

print "<pre>\n";


echo "<br>";
  echo "<h1>EJERCICIO 2</h1>";

  $ejercicio2 = ["Pedro",
                "Ana",
                "34",
                "1",
              ];

print "<pre>\n";

  print_r ($ejercicio2);

print "<pre>\n";


echo "<br>";
  echo "<h1>EJERCICIO 3</h1>";

  $ejercicio3 = [
              "Nombre"=>"Pedro",
              "Apellido"=>"Torres",
              "Dirección"=>"Av. Mayor 3703",
              "Teléfono"=>"1122334455"
            ];

print "<pre>\n";


echo "<br>";
  echo "<h1>EJERCICIO 4</h1>";

  $ejercicio4 = [
                "Madrid",
                "Barcelona",
                "Londres",
                "New York",
                "Los Ángeles",
                "Chicago",
              ];

print "<pre>\n";

  print_r ($ejercicio4);

print "<pre>\n";

  foreach ($ejercicio4 as $indice => $valor) {
    print "<p>La ciudad con el índice $indice tiene el nombre de $valor </p>\n";
  }


echo "<br>";
  echo "<h1>EJERCICIO 5</h1>";

  $ejercicio5 = [
                "MD"=>"Madrid",
                "BCL"=>"Barcelona",
                "LD"=>"Londres",
                "NY"=>"New York",
                "LA"=>"Los Ángeles",
                "CCG"=>"Chicago",
              ];

print "<pre>\n";

  print_r ($ejercicio5);

print "<pre>\n";

  foreach ($ejercicio5 as $indice => $valor) {
    print "<p>El índice de $valor es $indice </p>\n";
  }

 ?>

  </body>
</html>

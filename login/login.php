<?php

$usuario=$_POST ["Usuario"];
$contrasenia=$_POST ["Contraseña"];

$ckusuario="belen";
$ckcontrasenia=1234;

if ($usuario==$ckusuario && $contrasenia==$ckcontrasenia) {
  header ("location:https://www.potrerodigital.org/donar-ahora?gclid=CjwKCAjwgsqoBhBNEiwAwe5w0_rHy9f8YeJMwqNOC3OVKTB_2aRtF_LK79Rb701JYp0p-Y0qmtYJ1RoCsjcQAvD_BwE");
} else {
  header ("location:https://dribbble.com/errorpage");
}

 ?>

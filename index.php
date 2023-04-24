<?php
$valor = "Título de la página";
$cadena = "Texto con valores puros doble comilla";
$conca = "Texto de valor unico";
$conca .= " nuevo valor";
$fstring = "$valor concatendo con $cadena concatenado con $conca";

$entero = 21;
$nombre = "Roberto";
$apellido = "Chambi";


// Definición de una constante
define("PI", 3.1416);
define("CARGO", "Desarrollador Web");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HOLA MUNDO</title>
</head>
<body>
  <h1><?php echo $valor; ?></h1>
  <p><?php echo $cadena; ?></p>
  <p><?php echo $conca; ?></p>
  <p><?php echo $fstring; ?></p>

  <h4><?php echo "El nombre es $nombre su edad es $entero y su apellido es $apellido"; ?></h4>

  <!-- Cadenas con ' ' -->
  <h4><?php echo 'El nombre es $nombre su edad es $entero y su apellido es $apellido';?></h4>

  <!-- Cadenas con " " -->
  <h4><?php echo "Nombre 'Roberto' usando '' Edad:$entero "; ?></h4>

  <!-- Constantes -->
  <h3><?php echo PI; ?></h3>
  <h3><?php echo CARGO; ?></h3>
</body>
</html>
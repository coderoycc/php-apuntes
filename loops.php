<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOOPS</title>
</head>
<body>
  <h1>Estructuras repetitivas</h1>
  <!-- Ciclo FOR -->
  <?php
    echo "<h2>Ciclo FOR</h2>";
    for ($i=0; $i < 2; $i++) { 
      echo "<p>El valor de i es: $i </p>";
    }

    echo "<h2>Ciclo DO WHILE</h2>";
    $n = 0;
    do {
      echo "<p>El valor de <b>n</b> es: $n </p>";
      $n++;
    } while ($n < 3);

    echo "<h2>Ciclo WHILE</h2>";
    $m = 0;
    while ($m < 2) {
      echo "<p>El valor de <b>m</b> es: $m </p>";
      $m++;
    }

    echo "<h2>Ciclo FOREACH</h2>";
    $array = array("Roberto", "Chambi", "Desarrollador Web");
    foreach ($array as $key => $value) {
      echo "<p>El valor de <b>$key</b> es: $value </p>";
    }

    echo "<h4>Otra manera</h4>";
    foreach ($array as $value) {
      echo "<p>El valor es: $value </p>";
    }

    $obj = (object) [
      "nombre" => "Roberto",
      "apellido" => "Chambi",
      "cargo" => "Desarrollador Web"
    ];

    echo "<h2>Ciclo FOREACH con objetos</h2>";
    foreach ($obj as $key => $value) {
      echo "<p>El valor de <b>$key</b> es: $value </p>";
    }

    // Iteracion de un array asociativo
    $arrayAsociativo = array(
      "nombre" => "Roberto",
      "apellido" => "Chambi",
      "cargo" => "Desarrollador Web"
    );
    echo "<h2>Ciclo FOREACH con array asociativo</h2>";
    foreach ($arrayAsociativo as $key => $value) {
      echo "<p>El valor de <b>$key</b> es: $value </p>";
    }

    // Iteracion de un array multidimensional
    $arrayMultidimensional = array(
      array("Roberto", "Chambi", "Desarrollador Web"),
      array("Juan", "Perez", "Desarrollador Web"),
      array("Maria", "Gomez", "Desarrollador Web")
    );
    echo "<h2>Ciclo FOREACH con array multidimensional</h2>";
    foreach ($arrayMultidimensional as $key => $value) {
      echo "<p>El valor de <b>$key</b> es: $value[0] $value[1] $value[2] </p>";
    }

    // Iteracion de un array multidimensional con foreach anidado
    echo "<h2>Ciclo FOREACH con array multidimensional con foreach anidado</h2>";
    foreach ($arrayMultidimensional as $key => $values) {
      echo "<p>El valor de <b>$key</b> es: ";
      foreach ($values as $value) {
        echo "$value ";
      }
      echo "</p>";
    }
  ?>
</body>
</html>
<?php
// Manejo de JSON con php
// Crear un array
$datos = array(
  'nombre' => 'Juan',
  'apellido' => 'Perez',
  'edad' => 30
);
// Convertir el array en JSON
$json = json_encode($datos);
echo $json;

// Decodificar un JSON
$json = '[{"nombre":"Juan","apellido":"Perez","edad":30},{"nombre":"Juan","apellido":"CALIZAYA","edad":23}]';
// Convertir el JSON en un array
$datos = json_decode($json);

// Mostrar el contenido del array
foreach ($datos as $dato) {
  echo $dato->nombre . ' ' . $dato->apellido . '<br>';
}

?>
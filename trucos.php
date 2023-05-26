<?php
# funcion que recibe parametros ilimitados
function saludo(){
  $args = func_get_args();
  print_r($args);
}
saludo('Hola', 'mundo', 'desde', 'PHP');

# funcion para obtener archivos de un tipo especifico
$files = glob('*.php');
$files_todo = glob('*.{png,php,txt}', GLOB_BRACE);
print_r($files);
print_r($files_todo);

# guardar archivos en texto plano (serialize)
$datos = array(
  'nombre' => 'Juan',
  'apellido' => 'Perez',
  'edad' => 20
);
$contenido = serialize($datos);

# ver los archivos serializados
$cont = unserialize($contenido);



?>
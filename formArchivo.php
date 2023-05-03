<?php

if(isset($_POST['enviar'])){
  echo "LLEGO";
  print_r($_FILES['imagen']);

  // Guardar la foto en el servidor
  $nombre = $_FILES['imagen']['name'];

  // Nombre temporal del archivo
  $archivo = $_FILES['imagen']['tmp_name'];
  echo "<br>Nombre: ".$nombre;
  echo "<br>Archivo: ".$archivo;
  $ruta = "./".$nombre;
  // Lo guardamos con su nombre original
  move_uploaded_file($archivo,$ruta);

}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario</title>
</head>
<body>
  <h3>Enviar un archivo</h3>
  <form action="formArchivo.php" enctype="multipart/form-data" method="post">
    <input type="file" name="imagen" id="">
    <br>
    <input type="submit" name='enviar' value="ENVIAR">
  </form>
</body>
</html>
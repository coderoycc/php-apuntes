<?php
#Una cookie es una variable que se guarda temporalmente en el navegador del usuario
if(isset($_POST['enviar'])){
  // $user = htmlentities($_POST['user']);
  $user = $_POST['user'];
  // configurar la cookie
  setcookie('user', $user, time() + 60 * 60 * 24 * 30, '/');
  header('Location: verifica.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cookies con php</title>
</head>
<body>
  <h1>Cookies para PHP</h1>
  <form action="" method="POST">
    <input type="text" name="user" placeholder="ingresa tu usuario">
    <input type="submit" value="ENVIAR" name="enviar">
  </form>
</body>
</html>
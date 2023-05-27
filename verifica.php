<?php
  if(isset($_COOKIE['user'])){
    echo '<h1>La cookie existe</h1>';
    echo '<h2>El valor de la cookie es: ' . $_COOKIE['user'] . '</h2>';
  }
?>
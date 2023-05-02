<?php
muestraNombre();
parametros("Roberto");
function muestraNombre(){
  echo "Mi nombre es Juan";
}
function parametros($nombre, $apellido=""){
  echo "Mi nombre es $nombre $apellido";
}

// Funciones matemáticas
echo "\nRaíz cuadrada de 10: ".sqrt(10);
echo "\nNúmero aleatorio entre 10 y 40: ".rand(10,40);
echo "\nNúmero pi: ".pi();
echo "\nRedondear: ".round(7.891234,2);
echo "\nValor absoluto: ".abs(-7.891234);
echo "\nPotencia: ".pow(5,3);
echo "\nMayusculas: ".strtoupper("holiwi");
echo "\nMinusculas: ".strtolower("HOLIWI");
?>

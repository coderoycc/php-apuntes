# DIFERENCIAS ENTRE INCLUDE y REQUIRE
En PHP, tanto `require` como `include` son constructos que permiten incorporar el contenido de un archivo dentro de otro archivo PHP. Sin embargo, tienen algunas diferencias importantes en cuanto a su comportamiento y manejo de errores:

1. `require`:
   - Es más estricto que `include`.
   - Si el archivo especificado en `require` no se encuentra o tiene errores de sintaxis, se producirá un error fatal y el script se detendrá inmediatamente. En este caso, se mostrará un mensaje de error al usuario y no se ejecutará ninguna parte del script que se encuentra después de la instrucción `require`.
   - Se utiliza cuando el archivo que se está incluyendo es esencial para el funcionamiento del script y su ausencia debería interrumpir la ejecución.

Ejemplo de `require`:

```php
<?php
require 'archivo_importante.php';
echo 'Esta línea solo se ejecutará si "archivo_importante.php" se incluye correctamente.';
?>
```

2. `include`:
   - Es menos estricto que `require`.
   - Si el archivo especificado en `include` no se encuentra o tiene errores de sintaxis, se mostrará una advertencia, pero el script continuará su ejecución.
   - Se utiliza cuando el archivo que se está incluyendo es opcional o no es crítico para el funcionamiento del script, y se desea que el script continúe aunque el archivo no se encuentre.

Ejemplo de `include`:

```php
<?php
include 'archivo_opcional.php';
echo 'Esta línea se ejecutará incluso si "archivo_opcional.php" no se incluye correctamente.';
?>
```

En resumen, si necesitas que un archivo sea incluido de manera obligatoria y su ausencia pueda causar problemas graves en el funcionamiento del script, utiliza `require`. Si el archivo es opcional y su ausencia no debe detener la ejecución, opta por `include`. Además, si no estás seguro de cuál usar, es recomendable utilizar `require`, ya que garantiza que los archivos esenciales estén presentes antes de continuar con la ejecución del script.

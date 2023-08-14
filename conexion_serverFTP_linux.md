# Ingrear a un servidor FTP desde la consola de linux.

Para conectarte a un servidor FTP desde una máquina Linux, puedes utilizar la línea de comandos y el cliente FTP incorporado llamado "ftp". Aquí te explico cómo hacerlo paso a paso:

1. Abre una terminal en tu sistema Linux.

2. En la terminal, ingresa el siguiente comando para iniciar el cliente FTP y conectarte al servidor:

   ```
   ftp direccion_del_servidor
   ```

   Reemplaza "direccion_del_servidor" con la dirección IP o el nombre de dominio del servidor FTP al que deseas conectarte.

3. Te pedirá que ingreses un nombre de usuario y contraseña. Ingresa las credenciales proporcionadas por el administrador del servidor FTP.

4. Una vez que hayas ingresado las credenciales, estarás conectado al servidor FTP y verás un indicador de que estás en el modo FTP interactivo. Puedes usar varios comandos para interactuar con el servidor FTP:

   - `ls`: Lista el contenido del directorio remoto.
   - `cd`: Cambia de directorio en el servidor remoto.
   - `get`: Descarga un archivo desde el servidor remoto.
   - `put`: Sube un archivo al servidor remoto.
   - `quit` o `bye`: Cierra la conexión FTP y sale del cliente.

5. Después de haber realizado las acciones necesarias en el servidor FTP, puedes usar el comando `quit` para cerrar la conexión y salir del cliente.

Si se esta trabajando con datos sensibles es mejor usar SFTP (SSH File Transfer Protocol) o FTPS (FTP seguro) que proporcionan capas de seguridad adicionales en la transferencia de datos.

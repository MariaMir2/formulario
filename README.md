# Formulario

Creación de un formulario mediante php, en el cual se deben introducir tres campos (nombre, apellidos, email) e insertarlos en una base de datos, llamada 'usuario'. 

Para llevarlo a cabo, se han utilizado dos maneras:
  1)  Utilización únicamente de php: Se ha creado un archivo formulario.php, que contiene la estructura del formulario (HTML), junto con la llamada (action=post.php) al archivo post.php, dónde se establece la conexión con la base de datos y el envío de los datos recogidos.
  2)  Utilización de javaScript, HTML, y php: Se ha creado un archivo formulario.html, que contiene la estructura del formulario, un archivo formulario.js, que se encarga de recoger los datos, y, mediante una llamada ajax, establecer conexión con el archivo post.php, para gestionar el envío de los datos recogidos.

*Ambos códigos utilizan el mismo archivo css para determinar el formato del formulario.

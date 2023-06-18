<!DOCTYPE html>
<html>
<head>
    <title>Formulario</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="form">
        <h1>Formulario de Registro</h1>

        <form id="formulario" method="POST" action="post.php">
            <label for="nombre">Nombre: </label><br>
            <input type="text" class="formI" name="nombre" placeholder="requerido" required><br>

            <label for="apellido">Apellido: </label><br>
            <input type="text" class="formI" name="apellido" placeholder="requerido" required><br>

            <label for="email">Email: </label><br>
            <input type="email" class="formI" name="email" placeholder="requerido" required><br><br>

            <input name="submit" class="formB" type="submit" value="Enviar"><br>

        </form>
    </div>
</body>
</html>

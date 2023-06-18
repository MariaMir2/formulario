<?php

if($_POST){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];

//Conexión PDO
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cursosql";

//Creamos la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

//Comprobamos la conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//Query para añadir al nuevo usuario
$sql = "INSERT INTO usuario (nombre, apellido, email)
VALUES ('$nombre', '$apellido', '$email')";

//Comprobamos que se ha añadido correctamente
if($conn->query($sql) === TRUE){
    echo "New record created succesfully";
} else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

//Cerramos la conexión
$conn->close();

}

?>

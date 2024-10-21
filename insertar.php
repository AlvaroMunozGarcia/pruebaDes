<?php
$servername="localhost";
$username="bor";
$password="bor";
$dbname="prueba";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Error en la conexion: " . $conn->connect_error);

}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $sql="INSERT INTO Nombre (nombre, edad) VALUES ('$nombre','$edad')";
    if($conn->query($sql) ===TRUE){
        echo "Datos insertados correctamente";
    }else{

        echo "Error: " . $sql ."<br>" . $conn->error;

    }
}
$conn->close();

?>

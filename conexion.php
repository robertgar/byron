<?php
$servername = "localhost";
$database = "inmueble";
$username = "root";
$password = "";
$con = mysqli_connect($servername, $username, $password, $database);
if (!$con) {
    die("Erro en la conexion: " . mysqli_connect_error());
}
//echo "conexion satisfacotria";
//mysqli_close($con);

?>
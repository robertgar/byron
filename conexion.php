<?php
$servername = "mysql7001.site4now.net";
$database = "db_a3f5e0_bdlamch";
$username = "a3f5e0_bdlamch";
$password = "lamchay2019";
$con = mysqli_connect($servername, $username, $password, $database);
if (!$con) {
    die("Erro en la conexion: " . mysqli_connect_error());
}
//echo "conexion satisfacotria";
//mysqli_close($con);

?>

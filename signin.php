<?php
require_once 'conexion.php';
 
	$username = $_POST['username'];
	$password = $_POST['password'];
 
	$query = mysqli_query($con, "SELECT * FROM tbl_usuarios WHERE usuariotbl = '$username' AND passwordtbl = '$password'") or die(mysqli_error());
	$row = mysqli_num_rows($query);
 
	if($row > 0){

		while($row1 = mysqli_fetch_array($query))
 {
 	session_start();
 	$_SESSION["use"] = $row1["id"];
 }
		echo "success";
		
	}else{
		echo "error";
	}
?>
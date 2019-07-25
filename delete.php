<?php
require_once 'conexion.php';
$v=$_POST['varlor'];
$query= 'DELETE FROM inmueble WHERE inmueble.id_in='.$v.';';
if(mysqli_query($con,$query)){
echo "Eliminado";
}else{
	  echo 0; 
}

?>
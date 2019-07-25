<?php
require_once 'conexion.php';

$sql_query = 'SELECT * FROM inmueble';
if (mysqli_query($con,$sql_query)) {
	$result = mysqli_query($con,$sql_query);
 while($row = mysqli_fetch_array($result))
 {
  $data["codigo_db"] = $row["codigo_db"];
  $data["tip_in_fk"] = $row["tip_in_fk"];
  $data["metraje_db"] = $row["metraje_db"];
  $data["est_fk"] = $row["est_fk"];
  $data["est_fk1"] = $row["est_fk"];
  $data["est_fk2"] = $row["est_fk"];
 

 }
 echo json_encode($data);.
}else{
	echo "eror";
}
 

					
?>
<?php
require_once 'conexion.php';


  $c=$_POST['cod'];
 $t=$_POST['tp'];
 $m=$_POST['met'];
 $d=$_POST['dor'];
 $u=$_POST['ub'];
 $p=$_POST['par'];
 $e=$_POST['Estado'];
 $de=$_POST['desc'];
 $b=$_POST['ban'];
 $f1=$_POST['im'];
 $f2=$_POST['im2'];
 $f3=$_POST['im3'];
 $f4=$_POST['im4'];
$query="INSERT INTO inmueble(codigo_db, metraje_db, zona_db, ndorm_db, n_ban_db, n_par_db, tip_in_fk, est_fk, derscri_db, im1, im2, im3, im4) VALUES ('$c','$m', '$u', '$d', '$b', '$p', '$t', '$e','$de','$f1', '$f2', '$f3', '$f4')";



if(mysqli_query($con,$query)){

      echo "corecto";
} else{
    echo "ERROR: Could not able to execute sql. ". mysqli_error($con);
}

?>

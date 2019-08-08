<?php
require_once 'conexion.php';

$v=$_POST['varlor'];
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

$query="UPDATE inmueble SET codigo_db='$c',`metraje_db`='$m',`zona_db`='$u',`ndorm_db`='$d',`n_ban_db`='$b',`n_par_db`='$p',`tip_in_fk`='$t',`est_fk`='$e',`derscri_db`='$de',`im1`='$f1',`im2`='$f2',`im3`='$f3',`im4`='$f4' WHERE id_in=".$v;



if(mysqli_query($con,$query)){

      echo "corecto";
} else{
    echo "ERROR: Could not able to execute sql. ". mysqli_error($con);
}

?>
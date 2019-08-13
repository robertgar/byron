<?php   session_start();   
 if (!isset($_SESSION['use'])&& $_SESSION['use']==null) {
        header("location: login.php");
    } ?>
    <?php
require_once 'conexion.php';

$sql_query = "SELECT id_in,codigo_db,tipo_inmueble.descripcion as a, metraje_db, im1, im2, im3, im4, tipo_estado.descripcion as b FROM inmueble 
INNER JOIN tipo_inmueble
ON inmueble.tip_in_fk = tipo_inmueble.id_tipo
INNER JOIN tipo_estado
ON inmueble.est_fk = tipo_estado.id_esta";
  ?>
<!DOCTYPE html>
<html>
<head>
   <title> Inmuebles</title> 
        <!-- add icon link -->
        <link rel = "icon" href ="im/logo.jpeg" type = "image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="jquery.paginate.css" rel="stylesheet" type="text/css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<style>
body {margin: 0;}

ul.topnav {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

ul.topnav li {float: left;}

ul.topnav li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

ul.topnav li a:hover:not(.active) {background-color: #111;}

ul.topnav li a.active {background-color: #4CAF50;}

ul.topnav li.right {float: right;}

@media screen and (max-width: 600px) {
  ul.topnav li.right, 
  ul.topnav li {float: none;}
}
 .timg{
        width: 60px; height: 60px;
      }
#carga{
   display: block;
  margin-left: auto;
  margin-right: auto;
}
</style>
</head>
<body>

<ul class="topnav">
  <li><a class="active" href="#home">Bienvenido <?php echo $_SESSION['use']; ?></a></li>
  <li><a href="resgist.php">Registar</a></li>
  <li class="right"><a onclick="logut()">Cerrar Sesion</a></li>
 
</ul>
<br><br><br>
<div style="padding:0 16px;" id="resultado1">
 <table class="table ">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tipo Inmueble</th>
      <th scope="col">Metraje</th>
      <th scope="col">Imagen</th>
      <th scope="col">Estado</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
      <?php
        if (mysqli_query($con,$sql_query)) {
  $result = mysqli_query($con,$sql_query);
   $count = mysqli_num_rows($result);

 if ($count == 0) {
echo "<br />". "No hay datos." . "<br />";

 } else{
 while($row = mysqli_fetch_array($result))
 {
        ?>
    <tr id="<?php echo $row["id_in"];?>">
      <th scope="row"><?php echo $row["codigo_db"];?></th>
      <td><?php echo $row["a"];?></td>
      <td><?php echo $row["metraje_db"]; ?></td>
      <td><img src="<?php echo "im/".$row["im1"]; ?>" class="timg">&nbsp&nbsp<img src="<?php echo "im/".$row["im2"]; ?>" class="timg">&nbsp&nbsp<img src="<?php echo "im/".$row["im3"]; ?>" class="timg">&nbsp&nbsp<img src="<?php echo "im/".$row["im4"]; ?>" class="timg"></td>
      <td><?php echo $row["b"]; ?></td>

      <td>

        <a class="btn btn-danger" onclick="myFunction(<?php echo $row["id_in"];?>)"><span class="glyphicon glyphicon-trash"></span></a>


        <a class="btn btn-default" href="actua.php?id=<?php echo $row["id_in"];?>"><span class="glyphicon glyphicon-edit"></span></a>
        </td>
    </tr>
<?php
}
}
}else{
  echo "error". mysqli_error($con);
}
?>

  </tbody>
</table>
</div>
<div id="resultado"></div>
</body>
</html>

<script type="text/javascript">
    function myFunction(x){
        var parametros = {
      "varlor" : x
        };
        $.ajax({
            type: "POST",
            url: "delete.php",
            data: parametros,
            beforeSend: function(){
                          //imagen de carga
                  
                          $("#" + x ).fadeIn(1000).html("<img src='im/log.gif' class='timg'/>");

                    },timeout:200000,
            success: function(response) {            
               if (response != 0) {
                    alert('Eliminado ');
                    $("#" + x ).remove();
                } else {
                    alert('Error');
                }
            }
        });

    }

   
</script>
 <script src="jquery.paginate.js"></script>
<script>
$(document).ready(function () {
    $('table').paginate({
        'elemsPerPage': 15,
            'maxButtons': 16
    });
});
</script>

<script type="text/javascript">
    function logut(){
        var parametros;
        $.ajax({
            type: "POST",
            url: "logout.php",
            data: parametros, beforeSend: function(){
                          //imagen de carga
             $("#resultado1" ).fadeIn(90000).html("<img src='im/log.gif' id='carga'/>");

                    },timeout:9000000,
            success: function(response) {            
               if (response =="cerrar") {
                  window.location = 'login.php'; 
                } else {
                    alert('Error');
                }
            }
        });

    }
</script>


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
<html lang="en">
<head>
  <title>Registro</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="jquery.paginate.css" rel="stylesheet" type="text/css">

    <style>
body {margin: 0;}

ul.sidenav {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 25%;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

ul.sidenav li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}
 
ul.sidenav li a.active {
  background-color: #4CAF50;
  color: white;
}

ul.sidenav li a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 25%;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 900px) {
  ul.sidenav {
    width: 100%;
    height: auto;
    position: relative;
  }
  
  ul.sidenav li a {
    float: left;
    padding: 15px;
  }
  
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  ul.sidenav li a {
    text-align: center;
    float: none;
  }
}
      img{
        width: 60px; height: 60px;
      }
    </style>
</head>
<body>
<ul class="sidenav">
  <li><a class="active" href="#home">Bienvenido <?php echo $_SESSION['use']; ?></a></li>
  <li><a href="#news">Registar</a></li>
  <li><a onclick="logut()">Cerrar Sesion</a></li>
</ul>
<div class="container-fluid">

  <div class="row">
    <div class="col-sm-3 col-md-6 col-lg-4">
    
    </div>
    <div class="col-sm-9 col-md-6 col-lg-8" >
     
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
      <td><img src="<?php echo "im/".$row["im1"]; ?>">&nbsp&nbsp<img src="<?php echo "im/".$row["im2"]; ?>">&nbsp&nbsp<img src="<?php echo "im/".$row["im3"]; ?>">&nbsp&nbsp<img src="<?php echo "im/".$row["im4"]; ?>"></td>
      <td><?php echo $row["b"]; ?></td>

      <td>

        <a class="btn btn-danger" onclick="myFunction(<?php echo $row["id_in"];?>)"><span class="glyphicon glyphicon-trash"></span></a>

        <button type="button" class="btn btn-default">
          <span class="glyphicon glyphicon-edit"></span> Edit
        </button></td>
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
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
    function myFunction(x){
        var parametros = {
      "varlor" : x
        };
        $.ajax({
            type: "POST",
            url: "delete.php",
            data: parametros,
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
        'elemsPerPage': 5,
            'maxButtons': 6
    });
});
</script>
</body>
</html>
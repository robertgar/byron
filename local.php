<?php
require_once 'conexion.php';

$sql_query = "SELECT id_in,codigo_db,  im1,`zona_db`, tipo_estado.descripcion as b FROM inmueble 
INNER JOIN tipo_estado
ON inmueble.est_fk = tipo_estado.id_esta WHERE `tip_in_fk`=3";
  ?>
<!DOCTYPE html>
<html>
<head>
   <title> Inmuebles</title> 
        <!-- add icon link -->
        <link rel = "icon" href ="im/logo.jpeg" type = "image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>      
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <style type="text/css">
    .col-md-3{
  display: inline-block;
  margin-left:-4px;
}
.col-md-3 img{
  width:100%;
  height:auto;
}
body .carousel-indicators li{
  background-color:#EAF80A;
}
body .carousel-indicators{
  bottom: 0;
}
body .carousel-control-prev-icon,
body .carousel-control-next-icon{
  background-color:#EAF80A;
}

body .no-padding{
  padding-left: 0;
  padding-right: 0;
   }
/* Winona */
.button--winona {
  background-color: rgba(63, 81, 181, 0.1);
 }
.button--winona:hover {
  border-color: #009900;
}


body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
 /* background-color: #050505;*/
 background-color: white;
}

.topnav a {
  float: left;
  display: block;
 /* color: #ffffff;*/
 color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;

}

.topnav a:hover {
  background-color: #2098f5;
color: black;

}

.topnav a.active {
  background-color: #2098f5;
 /* color: white;*/
 color: black;
}


.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
h1, p,legend{
color: #ffffff;  
}
body{
 background: #333;   
}
footer{
   background-color: #050505;
}
  .contact1 {
  background: #5A5858;
  border-radius: 20px;
  margin: 35px;
  padding: 40px 90px 30px 28px;
}
.redondeado {
  border-radius: 50px;
}
h2, span{
  color: #FFFFFF;
}
#m1{
  width: 50px;
  height: 50px;
}

.img-contenedor{
  background-image: url("im/logo.jpeg"); 
   width: 60px;
  height: 60px;
    overflow:hidden;
}
.img-contenedor img {
    -webkit-transition:all 1.9s ease; /* Safari y Chrome */
    -moz-transition:all 1.9s ease; /* Firefox */
    -o-transition:all 1.9s ease; /* IE 9 */
    -ms-transition:all 1.9s ease; /* Opera */
    width:100%;
}
.img-contenedor:hover img {
    -webkit-transform:scale(1.5);
    -moz-transform:scale(1.5);
    -ms-transform:scale(1.5);
    -o-transform:scale(1.5);
    transform:scale(1.5);
}
</style>
</head>
<body>

<div class="topnav" id="myTopnav">
  <a class="img-contenedor"><img src="im/logo.jpeg" id="m1"></a>
  <a href="index.php">Inicio</a>
  <a href="quienes.php">Quiénes Somos</a>
    <a href="apart.php">Apartamentos</a>
  <a href="casa.php" >Casas</a>
    <a href="local.php" class="active">Locales comerciales</a>
  <a href="bodeg.php">Bodegas</a>
  <a href="terre.php">Terrenos</a>
  <a href="contacto.php">Contacto</a>
  <a href="" onclick=" window.open('login.php');"  style="float:right">Inciar sesión</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<section id="content">
  <br><br><br>
<div class="container">    
 <?php
        if (mysqli_query($con,$sql_query)) {
  $result = mysqli_query($con,$sql_query);
   $count = mysqli_num_rows($result);

 if ($count == 0) {
echo "<div class='alert alert-danger'>En este momento no hay locales</div>";

 } else{
 while($row = mysqli_fetch_array($result))
 {

        ?>

  <div class="row contact1">
    <div class="col-sm-6">
<img src="<?php echo "im/".$row["im1"]; ?>" height="250" width="400">
    </div>
    <div class="col-sm-6">
    <h2><?php echo $row["codigo_db"];?></h2>
    <br>
    <span class="glyphicon glyphicon-map-marker" style="font-size:28px;"><i><?php echo $row["zona_db"]; ?></i></span>
<br><br>
    <button class="btn btn-success btn-lg btn-block redondeado" onClick="window.location.href='verca2.php?cod=<?php echo $row["id_in"]; ?>'">Ver</button>
    <br>
    <?php
if ($row["b"]=="Disponible") {
  ?>
  <div class="alert alert-success redondeado">
  <strong><?php echo $row["b"]; ?>!</strong>
</div>
  <?php
} else if ($row["b"]=="En Proceso") {
  ?>
  <div class="alert alert-warning redondeado">
  <strong><?php echo $row["b"]; ?>!</strong>
</div>
   <?php
} else {
  ?>
  <div class="alert alert-danger redondeado">
  <strong><?php echo $row["b"]; ?>!</strong>
</div>
 <?php 
}

    ?>
  </div>
  </div>



<?php
}
}
}else{
  echo "error". mysqli_error($con);
}
?>

</div> 
</section> 

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
<footer class="container-fluid bg-4 text-center">
   <p>© 2019 Copy Right</p>
        <p>Website indelsur.com by <a href="http://www.indelsur.operaciones@gmail.com/" target="_blank" rel="nofollow" class="link">www.gualipramos@gmail.com</a></p>
</footer>  
</body>
</html>

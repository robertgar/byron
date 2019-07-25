<?php

?>


<!DOCTYPE html>
<html>
<head>
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
  background-color: #050505;
}

.topnav a {
  float: left;
  display: block;
  color: #ffffff;
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
  color: white;
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
h1, p{
color: #ffffff;  
}
body{
 background: #333;   
}
footer{
   background-color: #050505;
}
.btn-primary{
  border-radius: 40px;
}
</style>
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="incio.php" class="active">Inicio</a>
  <a href="quienes.php">Quienes Somos</a>
  <a href="apart.php">Apartamentos</a>
  <a href="casa.php">Casas</a>
    <a href="local.php">Locales comerciales</a>
  <a href="bodeg.php">Bodegas</a>
  <a href="terre.php">Terrenos</a>
  <a href="contacto.php">Contacto</a>
  <a href="login.php" style="float:right">Inciar sesion</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<!--
<div style="padding-left:16px">
-->
<section id="content">
  <br><br>
 <br>
<?php
include 'caruselapar.php';
?>
</section>
<section id="content">
  <br><br>
 <br>
<?php
include 'caruselcasa.php';
?>
</section> 
<section id="content">
  <br><br>
 <br>
<?php
include 'carusellocal.php';
?>
</section>
<section id="content">
  <br><br>
 <br>
<?php
include 'caruselbode.php';
?>
</section> 
<section id="content">
  <br><br>
 <br>
<?php
include 'caruselterr.php';
?>
</sectio



<!--
</div>
-->
<br><br><br>
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
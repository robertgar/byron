<?php

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
.par{ 
  font-size: 30px;
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
  <a href="index.php">Incio</a>
  <a href="quienes.php"  class="active">Quiénes Somos</a>
  <a href="apart.php">Apartamentos</a>
  <a href="casa.php">Casas</a>
     <a href="local.php">Locales comerciales</a>
  <a href="bodeg.php">Bodegas</a>
  <a href="terre.php">Terrenos</a>
  <a href="contacto.php">Contacto</a>
  <a href="" onclick=" window.open('login.php');"  style="float:right">Inciar sesión</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<br><br><br>

<div class="container">
  <div class="row">
    <div class="col-sm-6">
   <fieldset class="well the-fieldset">
        <legend class="the-legend par"><strong>Visión</strong></legend>
        <p align="justify" class="par">Ser la mejor opción en la prestación de servicios inmobiliarios superando las expectativas de nuestros clientes, innovando y generando calidad en lo que hacemos.</p>
    </fieldset>
    </div>
    <div class="col-sm-6">
     <fieldset class="well the-fieldset">
        <legend class="the-legend par" ><strong>Misión</strong></legend>
        <p align="justify" class="par">Somos una empresa dedicada a adquirir, construir  y desarrollar inmuebles para su posterior arrendamiento, en cualquier parte del territorio de Guatemala, ofreciendo a nuestros clientes un servicio personalizado, que les satisfaga sus necesidades tanto comerciales como habitacionales.</p>
    </fieldset>
    </div>
  </div>
</div>



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
  <p>© 2019 Copyright</p>
        <p>
southsystems@outlook.es</p>
</footer> 
</body>
</html>

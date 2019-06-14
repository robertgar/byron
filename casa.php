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
</style>
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="incio.php">Inicio</a>
  <a href="q1.php">Quienes Somos</a>
  <a href="casa.php" class="active">Casas</a>
  <a href="#about">Bodegas</a>
  <a href="#contact">Apartamentos</a>
  <a href="#about">Terrenos</a>
  <a href="contacto.php">Contacto</a>
  <a href="#about" style="float:right">Inciar sesion</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<section id="content">
  <br><br><br>
<div class="container">    


  <div class="row contact1">
    <div class="col-sm-6">
<img src="http://www.tmagazine.es/app/uploads/2017/09/mejor_casa_del_mundo_11.jpeg" height="250" width="400">
    </div>
    <div class="col-sm-6">
    <h2>Nombre</h2>
    <br>
    <span class="glyphicon glyphicon-map-marker" style="font-size:28px;"><i>Ubicacion</i></span>
<br><br>
    <button class="btn btn-success btn-lg btn-block redondeado">Ver</button>
    <br>
<div class="alert alert-success redondeado">
  <strong>Disponible!</strong>
</div>
  </div>
  </div>

  <div class="row contact1">
    <div class="col-sm-6">
<img src="https://images.homify.com/c_fill,f_auto,h_500,q_auto,w_1280/v1511305692/p/photo/image/2329514/791a61bb-d176-4207-9676-41b26d04277c.jpg" height="250" width="400">
    </div>
    <div class="col-sm-6">
    <h2>Nombre</h2>
    <br>
    <span class="glyphicon glyphicon-map-marker" style="font-size:28px;"><i>Ubicacion</i></span>
<br><br>
    <button class="btn btn-success btn-lg btn-block redondeado">Ver</button>
    <br>
<div class="alert alert-warning redondeado">
  <strong>En proceso!</strong>
</div>
  </div>
  </div>
  <div class="row contact1">
    <div class="col-sm-6">
<img src="https://www.lamudi.com.mx/static/media/bm9uZS9ub25l/2x2x2x380x244/146e1e6ea05966.jpg" height="250" width="400">
    </div>
    <div class="col-sm-6">
    <h2>Nombre</h2>
    <br>
    <span class="glyphicon glyphicon-map-marker" style="font-size:28px;"><i>Ubicacion</i></span>
<br><br>
    <button class="btn btn-success btn-lg btn-block redondeado">Ver</button>
    <br>
<div class="alert alert-danger redondeado">
  <strong>vendido!</strong>
</div>
  </div>
  </div>


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

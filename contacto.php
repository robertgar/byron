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
footer{
  min-height: 70px;
  width: 100%;
  position: absolute;
  clear: both;
  margin-top: 0px;
  padding-top: 0px;
  overflow: visible;
  top:93%;
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
h1, p,legend, label,h2,dl {
color: #ffffff;  
}
body{
 background: #333;   
}
footer{
   background-color: #050505;
}
#comment, #nom,#email,#sel,#cod{
background-color: #050505;
  border: 0;
  border-radius: 40px;
  color: #FFFFFF;
}
#bt{
   border-radius: 30px;
}
img{
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
img-contenedor
</style>
</head>
<body>

<div class="topnav" id="myTopnav">
  <a class="img-contenedor"><img src="im/logo.jpeg"></a>
  <a href="index.php">Inicio</a>
  <a href="quienes.php">Quienes Somos</a>
  <a href="apart.php">Apartamentos</a>
  <a href="casa.php">Casas</a>
    <a href="local.php">Locales comerciales</a>
  <a href="bodeg.php">Bodegas</a>
  <a href="terre.php">Terrenos</a>
  <a href="contacto.php">Contacto</a>
 <a href="" onclick=" window.open('login.php');" style="float:right">Inciar sesion</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<br><br><br>

<div class="container">
 
  <div class="row">
    <div class="col-sm-6">
     <h2 class="p3">Contactos</h2>
            <dl>
                <dt class="color-1 p2"><strong>Dirección: 7ª. Calle prolongación 1-57 zona 02 Mazatenango,<br>Suchitepequez.</strong></dt>
                <dd><span>Telefono:</span>+502 7872-2126 +502 7872-3581</dd>
                
                <dd><span>E-mail:</span><a href="#" class="link">indelsur.admon@gmail.com</a></dd>
            </dl>
             <h1>Sigueme en las redes sociales:</h1>


      <i onclick=" window.open('https://twitter.com/');" class="fa fa-twitter-square" style="font-size:48px;color:#00D2FF"></i>
&nbsp&nbsp
        <i onclick=" window.open('https://api.whatsapp.com/send?phone=50251173235');" class="fa fa-whatsapp" style="font-size:48px;color:#00FF00"></i>
        &nbsp&nbsp
          <i onclick=" window.open('https://www.facebook.com/');"class="fa fa-facebook-square" style="font-size:48px;color:#1908FF"></i>
    </div>
    <div class="col-sm-6">
 
         <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15448.559047283408!2d-91.5079196!3d14.5339971!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb042e9854d0b4861!2sPinturas%20Volc%C3%A1n!5e0!3m2!1ses!2sgt!4v1568476181749!5m2!1ses!2sgt" width="530" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
         
        </div>
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
 


<footer class="footer">
    <div class="container bg-4 text-center">
        <p>© 2019 Copy Right</p>
        <p>Website indelsur.com by <a href="http://www.indelsur.operaciones@gmail.com/" target="_blank" rel="nofollow" class="link">www.gualipramos@gmail.com</a></p>
    </div>
</footer>
</body>
</htm

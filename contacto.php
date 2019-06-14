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
</style>
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="index.php">Inicio</a>
  <a href="q1.php">Quienes Somos</a>
  <a href="casa.php">Casas</a>
  <a href="#about">Bodegas</a>
  <a href="#contact">Apartamentos</a>
  <a href="#about">Terrenos</a>
  <a href="contacto.php" class="active">Contacto</a>
  <a href="#about" style="float:right">Inciar sesion</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<br><br><br>



<div class="container">
 
  <div class="row">
    <div class="col-sm-8">
      <form >
    <div class="form-group">
      <label for="email"><strong>E-mail:</strong></label>
      <input type="email" class="form-control" id="email" placeholder="E-mail" name="email">
    </div>
    <div class="form-group">
      <label for="pwd"><strong>Nombre:</strong></label>
      <input type="text" class="form-control" id="nom" placeholder="Nombre" name="nom">
    </div>
   <div class="form-group">
  <label for="comment"><strong>Mensaje:</strong></label>
  <textarea class="form-control" rows="5" id="comment" ></textarea>
</div>
    <button type="submit" class="btn btn-primary btn-lg btn-block" id="bt">Enviar</button>
  </form>
    </div>
    <div class="col-sm-4">
  
      
        
            <h2 class="top-1 p3">Detalles del Inmueble</h2>
                   <div class="form-group">
      <label for="usr">Tipo inmueble:</label>
        <select name="select" class="form-control" id="sel">
                        <option>Inmueble</option>
                        <option>Casa</option>
                        <option>Terreno</option>
                        <option>Apartamento</option>
                        <option>Bodega</option>
                    </select>
    </div>
    <div class="form-group">
      <label for="pwd">Codigo:</label>
      <input type="text" class="form-control" id="cod">
    </div> 
            <h2 class="p3">Contactos</h2>
            <dl>
                <dt class="color-1 p2"><strong>Dirección: 7ª. Calle prolongación 1-57 zona 02 Mazatenango,<br>Suchitepequez.</strong></dt>
                <dd><span>Telefono:</span>+502 7872-2126</dd>
                <dd><span>Fax:</span>+502 7872-3581</dd>
                <dd><span>E-mail:</span><a href="#" class="link">indelsur.admon@gmail.com</a></dd>
            </dl>
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
  <p>© 2019 Copy Right</p>
        <p>Website indelsur.com by <a href="http://www.indelsur.operaciones@gmail.com/" target="_blank" rel="nofollow" class="link">www.gualipramos@gmail.com</a></p>
</footer>  
</body>
</html>

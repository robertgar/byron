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
  <a href="index.php" class="active">Inicio</a>
  <a href="q1.php">Quienes Somos</a>
  <a href="casa.php">Casas</a>
  <a href="#about">Bodegas</a>
  <a href="#contact">Apartamentos</a>
  <a href="#about">Terrenos</a>
  <a href="contacto.php">Contacto</a>
  <a href="#about" style="float:right">Inciar sesion</a>
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

<div class="container">
  <div class="row">
    <div class="col-sm-6">
    <h1 >Casas</h1>
    </div>
    <div class="col-sm-6">
      <button type="button" class="btn btn-primary" style="float:right" onClick="window.location.href='casa.php'">Ver Todos</button>
    </div>
  </div>
</div>
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="container carousel-inner no-padding">
    <div class="carousel-item active">
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="https://images.homify.com/c_fill,f_auto,h_500,q_auto,w_1280/v1511305692/p/photo/image/2329514/791a61bb-d176-4207-9676-41b26d04277c.jpg">
          <div class="carousel-caption">
          <button type="button" class="btn btn-success button--winona" onClick="window.location.href='verca.php'">Ver</button>
        </div>
      </div>    
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="https://www.lamudi.com.mx/static/media/bm9uZS9ub25l/2x2x2x380x244/146e1e6ea05966.jpg">
         <div class="carousel-caption">
          <button type="button" class="btn btn-success button--winona">Ver</button>
        </div>
      </div>   
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="http://www.tmagazine.es/app/uploads/2017/09/mejor_casa_del_mundo_11.jpeg">
           <div class="carousel-caption">
          <button type="button" class="btn btn-success button--winona">Ver</button>
        </div>
      </div> 
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="https://static.elcomercio.es/www/multimedia/201807/20/media/cmi-casa-feria.jpg">
        <div class="carousel-caption">
          <button type="button" class="btn btn-success button--winona">Ver</button>
        </div>
          </div>
    </div>
    <div class="carousel-item">
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="https://static.elcomercio.es/www/multimedia/201807/20/media/cmi-casa-feria.jpg">
         <div class="carousel-caption">
          <button type="button" class="btn btn-success button--winona">Ver</button>
        </div>
      </div>    
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="https://static.elcomercio.es/www/multimedia/201807/20/media/cmi-casa-feria.jpg">
         <div class="carousel-caption">
          <button type="button" class="btn btn-success button--winona">Ver</button>
        </div>
      </div>   
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="https://static.elcomercio.es/www/multimedia/201807/20/media/cmi-casa-feria.jpg">
         <div class="carousel-caption">
          <button type="button" class="btn btn-success button--winona">Ver</button>
        </div>
      </div>   
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="https://static.elcomercio.es/www/multimedia/201807/20/media/cmi-casa-feria.jpg">
         <div class="carousel-caption">
          <button type="button" class="btn btn-success button--winona">Ver</button>
        </div>
      </div>  
    </div>
    <div class="carousel-item">
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="https://static.elcomercio.es/www/multimedia/201807/20/media/cmi-casa-feria.jpg">
         <div class="carousel-caption">
          <button type="button" class="btn btn-success button--winona">Ver</button>
        </div>
      </div>    
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="https://static.elcomercio.es/www/multimedia/201807/20/media/cmi-casa-feria.jpg">
         <div class="carousel-caption">
          <button type="button" class="btn btn-success button--winona">Ver</button>
        </div>
      </div>   
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="https://static.elcomercio.es/www/multimedia/201807/20/media/cmi-casa-feria.jpg">
         <div class="carousel-caption">
          <button type="button" class="btn btn-success button--winona">Ver</button>
        </div>
      </div>   
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="https://static.elcomercio.es/www/multimedia/201807/20/media/cmi-casa-feria.jpg">
         <div class="carousel-caption">
          <button type="button" class="btn btn-success button--winona">Ver</button>
        </div>
      </div>  
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
   <span class="carousel-control-next-icon"></span>
  </a>
</div>

</section> 



<section id="content">

 <br><br>
 <br>
<div class="container">
  <div class="row">
    <div class="col-sm-6">
    <h1 >Bodegas</h1>
    </div>
    <div class="col-sm-6">
      <button type="button" class="btn btn-primary" style="float:right">Ver Todos</button>
    </div>
  </div>
</div>
<div id="demo1" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo1" data-slide-to="0" class="active"></li>
    <li data-target="#demo1" data-slide-to="1"></li>
    <li data-target="#demo1" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="container carousel-inner no-padding">
    <div class="carousel-item active">
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="im/Image000014.jpg">
          <div class="carousel-caption">
          <button type="button" class="btn btn-success button--winona">Ver</button>
        </div>
      </div>    
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="im/b46536ae3325746a2515ddeed2e9c371.jpg">
         <div class="carousel-caption">
          <button type="button" class="btn btn-success button--winona">Ver</button>
        </div>
      </div>   
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="im/bodega-industrial-en-renta-en-parque-industrial-cartagena-tultitlan-24831.jpg">
           <div class="carousel-caption">
          <button type="button" class="btn btn-success button--winona">Ver</button>
        </div>
      </div> 
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="im/1519094921_BODEGA%20.png">
        <div class="carousel-caption">
          <button type="button" class="btn btn-success button--winona">Ver</button>
        </div>
          </div>
    </div>
    <div class="carousel-item">
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="im/1519094921_BODEGA%20.png">
         <div class="carousel-caption">
          <button type="button" class="btn btn-success button--winona">Ver</button>
        </div>
      </div>    
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="im/1519094921_BODEGA%20.png">
         <div class="carousel-caption">
          <button type="button" class="btn btn-success button--winona">Ver</button>
        </div>
      </div>   
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="im/1519094921_BODEGA%20.png">
         <div class="carousel-caption">
          <button type="button" class="btn btn-success button--winona">Ver</button>
        </div>
      </div>   
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="im/1519094921_BODEGA%20.png">
         <div class="carousel-caption">
          <button type="button" class="btn btn-success button--winona">Ver</button>
        </div>
      </div>  
    </div>
    <div class="carousel-item">
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="im/1519094921_BODEGA%20.png">
         <div class="carousel-caption">
          <button type="button" class="btn btn-success button--winona">Ver</button>
        </div>
      </div>    
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="im/1519094921_BODEGA%20.png">
         <div class="carousel-caption">
          <button type="button" class="btn btn-success button--winona">Ver</button>
        </div>
      </div>   
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="im/1519094921_BODEGA%20.png">
         <div class="carousel-caption">
          <button type="button" class="btn btn-success button--winona">Ver</button>
        </div>
      </div>   
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="im/1519094921_BODEGA%20.png">
         <div class="carousel-caption">
          <button type="button" class="btn btn-success button--winona">Ver</button>
        </div>
      </div>  
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo1" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo1" data-slide="next">
   <span class="carousel-control-next-icon"></span>
  </a>
</div>
</section>

<section id="content">
  <br><br>
 <br>
 <div class="container">
  <div class="row">
    <div class="col-sm-6">
    <h1 >Apartamentos</h1>
    </div>
    <div class="col-sm-6">
      <button type="button" class="btn btn-primary" style="float:right">Ver Todos</button>
    </div>
  </div>
</div>
<div id="demo2" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo2" data-slide-to="0" class="active"></li>
    <li data-target="#demo2" data-slide-to="1"></li>
    <li data-target="#demo2" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="container carousel-inner no-padding">
    <div class="carousel-item active">
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="https://www.cadiz4rentals.com/alquiler/fotos/2/152794648191d509eeadd977d43ed491d9eb5b28f2/152899309256804145f4ac611906f43565cf2b87f8.jpg">
          <div class="carousel-caption">
          <button type="button" class="btn btn-success button--winona">Ver</button>
        </div>
      </div>    
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="https://t-ec.bstatic.com/images/hotel/max1024x768/900/90031001.jpg">
         <div class="carousel-caption">
          <button type="button" class="btn btn-success button--winona">Ver</button>
        </div>
      </div>   
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="https://www.inloftleon.com/wp-content/uploads/2016/11/Apartamentos-inloft-leon-Nordic-9.jpg">
           <div class="carousel-caption">
          <button type="button" class="btn btn-success button--winona">Ver</button>
        </div>
      </div> 
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="http://www.vivare.co/images/other_images/vivare-apartamentos-big-5.jpg">
        <div class="carousel-caption">
          <button type="button" class="btn btn-success button--winona">Ver</button>
        </div>
          </div>
    </div>
    <div class="carousel-item">
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="http://www.vivare.co/images/other_images/vivare-apartamentos-big-5.jpg">
         <div class="carousel-caption">
          <button type="button" class="btn btn-success button--winona">Ver</button>
        </div>
      </div>    
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="https://www.lamudi.com.co/static/media/bm9uZS9ub25l/2x2x2x380x244/ed7ad47b72406c.jpg">
         <div class="carousel-caption">
          <button type="button" class="btn btn-success button--winona">Ver</button>
        </div>
      </div>   
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="https://www.lamudi.com.co/static/media/bm9uZS9ub25l/2x2x2x380x244/ed7ad47b72406c.jpg">
         <div class="carousel-caption">
          <button type="button" class="btn btn-success button--winona">Ver</button>
        </div>
      </div>   
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="https://www.lamudi.com.co/static/media/bm9uZS9ub25l/2x2x2x380x244/ed7ad47b72406c.jpg">
         <div class="carousel-caption">
          <button type="button" class="btn btn-success button--winona">Ver</button>
        </div>
      </div>  
    </div>
    <div class="carousel-item">
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="https://www.lamudi.com.co/static/media/bm9uZS9ub25l/2x2x2x380x244/ed7ad47b72406c.jpg">
         <div class="carousel-caption">
          <button type="button" class="btn btn-success button--winona">Ver</button>
        </div>
      </div>    
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="https://www.lamudi.com.co/static/media/bm9uZS9ub25l/2x2x2x380x244/ed7ad47b72406c.jpg">
         <div class="carousel-caption">
          <button type="button" class="btn btn-success button--winona">Ver</button>
        </div>
      </div>   
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="https://www.lamudi.com.co/static/media/bm9uZS9ub25l/2x2x2x380x244/ed7ad47b72406c.jpg">
         <div class="carousel-caption">
          <button type="button" class="btn btn-success button--winona">Ver</button>
        </div>
      </div>   
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="https://www.lamudi.com.co/static/media/bm9uZS9ub25l/2x2x2x380x244/ed7ad47b72406c.jpg">
         <div class="carousel-caption">
          <button type="button" class="btn btn-success button--winona">Ver</button>
        </div>
      </div>  
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo2" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo2" data-slide="next">
   <span class="carousel-control-next-icon"></span>
  </a>
</div>
</section>

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

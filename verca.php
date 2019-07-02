<?php

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <!-- Add jQuery library -->
  <script type="text/javascript" src="lib/jquery-1.10.1.min.js"></script>



  <!-- Add fancyBox main JS and CSS files -->
  <script type="text/javascript" src="source/jquery.fancybox.js?v=2.1.5"></script>
  <link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.5" media="screen" />

  

  <!-- Add Thumbnail helper (this is optional) -->
  <link rel="stylesheet" type="text/css" href="source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
  <script type="text/javascript" src="source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
<style type="text/css">
    h4{
        color: #FFFFFF;
    }
    span{
        color: #FFFFFF;
    }
    .im {
  border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;
}


@media only screen and (min-device-width: 350px) {
  .im  { 
      height: auto;
max-width: 100%
  }
}
.box img{
  width: 100%;
  height: auto;
}
@supports(object-fit: cover){
    .box img{
      height: 100%;
      object-fit: cover;
      object-position: center center;
    }
}

  .inner  { 
     -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
  }
.uli{ 
display: grid;
grid-gap: 1rem;
grid-template-columns: 150px 150px 150px;
grid-template-rows: 100px 100px 100px;
 max-width:800px;
}
.uli,.ulii{
  float: left;
}
.res{ 
   border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;
  width: 150px;
  
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

    h4{
       -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    }
</style>
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="index.php">Inicio</a>
  <a href="q1.php"  >Quienes Somos</a>
  <a href="casa.php" class="active" >Casas</a>
  <a href="#about">Bodegas</a>
  <a href="#contact">Apartamentos</a>
  <a href="#about">Terrenos</a>
  <a href="contacto.php" >Contacto</a>
  <a href="#about" style="float:right">Inciar sesion</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<br><br><br>
<section id="content">
<div class="container">
  <div class="row">
    <div class="col-sm-6 box" >
     <img  class="im"src="https://images.homify.com/c_fill,f_auto,h_500,q_auto,w_1280/v1511305692/p/photo/image/2329514/791a61bb-d176-4207-9676-41b26d04277c.jpg">
    </div>
    <div class="col-sm-6">
       <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group row">
                   <span>
<span class="material-icons inner" style="font-size:36px">hotel</span><span style="font-size:35px">Dormitorio</span></span>
<h4>3</h4>
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group row">       
        <span>
<span class="glyphicon glyphicon-map-marker inner" style="font-size:46px"></span><span style="font-size:35px">Ubicacion</span></span>
      <h4>Mazatenango</h4>
                </div>
            </div>

        </div>
<br><br><br><br>

   <div class="row">
 
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group row">
                   <span>
<span class="material-icons inner"  style="font-size:36px">zoom_out_map</span><span style="font-size:35px">Metraje</span></span>
      <h4>256.00</h4>
                </div>
            </div>

             <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group row">
                           <span>
<span class="fa fa-automobile inner" style="font-size:36px"></span><span style="font-size:35px">Parqueo</span></span>
      <h4>2</h4>
                </div>
            </div>
        </div>

        <br><br><br><br>

   <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group row ">
                  
                  <span class="glyphicon glyphicon-log-in inner"style="font-size:36px"></span><span style="font-size:35px"> Baños</span></span>
    <h4>2</h4>
                </div>
            </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group row">
                           <span>
<span class="glyphicon glyphicon-qrcode" style="font-size:36px"></span><span style="font-size:35px"> Codigo</span></span>
      <h4>2</h4>
                </div>
            </div>

        </div>

    </div>
  </div>
</div>

   <div class="container">
  <div class="row">
    <div class="col-sm-6 " >
        <div class="form-group row">
                   <ul class="uli">
                        <li class="ulii"><a  class="fancybox-thumbs" data-fancybox-group="thumb" href="https://images.homify.com/c_fill,f_auto,h_500,q_auto,w_1280/v1511305692/p/photo/image/2329514/791a61bb-d176-4207-9676-41b26d04277c.jpg"><i href="https://images.homify.com/c_fill,f_auto,h_500,q_auto,w_1280/v1511305692/p/photo/image/2329514/791a61bb-d176-4207-9676-41b26d04277c.jpg"><img  class="res" src="https://images.homify.com/c_fill,f_auto,h_500,q_auto,w_1280/v1511305692/p/photo/image/2329514/791a61bb-d176-4207-9676-41b26d04277c.jpg" height="100" width="150"></i></a></li>

                        <li class="ulii"><a class="fancybox-thumbs" data-fancybox-group="thumb" href="http://casaa.site/wp-content/uploads/2019/02/Casa-Moderna-Peque%C3%B1a_Casa-Peque%C3%B1a-20190207-11.jpg"><i href="http://casaa.site/wp-content/uploads/2019/02/Casa-Moderna-Peque%C3%B1a_Casa-Peque%C3%B1a-20190207-11.jpg"><img class="res" src="http://casaa.site/wp-content/uploads/2019/02/Casa-Moderna-Peque%C3%B1a_Casa-Peque%C3%B1a-20190207-11.jpg" height="100" width="150"></a></li>

                        <li class="ulii"><a class="fancybox-thumbs" data-fancybox-group="thumb" href="http://www.tmagazine.es/app/uploads/2017/09/mejor_casa_del_mundo_11.jpeg"><i href="http://www.tmagazine.es/app/uploads/2017/09/mejor_casa_del_mundo_11.jpeg"><img  class="res" src="http://www.tmagazine.es/app/uploads/2017/09/mejor_casa_del_mundo_11.jpeg" height="100" width="150"></a></li>
                      </ul> 
                </div>
    </div>
           
    </div>
    <div class="col-sm-6" >
 <h1>
  Descripcion
</h1>
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
<script type="text/javascript">
    $(document).ready(function() {
    
      /*
       *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
       */

      $('.fancybox-thumbs').fancybox({
        prevEffect : 'none',
        nextEffect : 'none',

        closeBtn  : false,
        arrows    : false,
        nextClick : true,

        helpers : {
          thumbs : {
            width  : 50,
            height : 50
          }
        }
      });

      $("#fancybox-manual-c").click(function() {
        $.fancybox.open([
          {
            href : 'https://images.homify.com/c_fill,f_auto,h_500,q_auto,w_1280/v1511305692/p/photo/image/2329514/791a61bb-d176-4207-9676-41b26d04277c.jpg',
            title : 'My title'
          }, {
            href : 'http://casaa.site/wp-content/uploads/2019/02/Casa-Moderna-Peque%C3%B1a_Casa-Peque%C3%B1a-20190207-11.jpg',
            title : '2nd title'
          }, {
            href : 'http://www.tmagazine.es/app/uploads/2017/09/mejor_casa_del_mundo_11.jpeg'
          }
        ], {
          helpers : {
            thumbs : {
              width: 75,
              height: 50
            }
          }
        });
      });


    });

  </script>
<footer class="container-fluid bg-4 text-center">
  <p>© 2019 Copy Right</p>
        <p>Website indelsur.com by <a href="http://www.indelsur.operaciones@gmail.com/" target="_blank" rel="nofollow" class="link">www.gualipramos@gmail.com</a></p>
</footer>  
</body>
</html>

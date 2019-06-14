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
  
<style type="text/css">
    h4{
        color: #FFFFFF;
    }
    span{
        color: #FFFFFF;
    }
    .im {
  border: 2px solid white;
}

.uli{ 
display: grid;
grid-gap: 1rem;
grid-template-columns: 150px 150px 150px;
grid-template-rows: 100px 100px 100px;
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
     <br><br><br>
<div class="container">
<div class="row">
  <div class="col-sm-6">
   <img  class="im"src="https://images.homify.com/c_fill,f_auto,h_500,q_auto,w_1280/v1511305692/p/photo/image/2329514/791a61bb-d176-4207-9676-41b26d04277c.jpg" height="500" width="500">
  </div>
 <div class="col-sm-6">
   <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group row">
                   <span>
<span class="material-icons" style="font-size:36px">hotel</span><span style="font-size:35px">Dormitorio</span></span>
<h4>3</h4>
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group row">       
        <span>
<span class="glyphicon glyphicon-map-marker" style="font-size:36px"></span><span style="font-size:35px">Ubicacion</span></span>
      <h4>Mazatenango</h4>
                </div>
            </div>

        </div>
<br><br><br><br>
        <div class="row">

            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group row">
                   <span>
<span class="material-icons"  style="font-size:36px">zoom_out_map</span><span style="font-size:35px">Metraje</span></span>
      <h4>256.00</h4>
                </div>
            </div>

             <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group row">
                           <span>
<span class="fa fa-automobile" style="font-size:36px"></span><span style="font-size:35px">Parqueo</span></span>
      <h4>2</h4>
                </div>
            </div>
        </div>

        <br><br><br><br>
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group row">
                  
                  <span class="glyphicon glyphicon-log-in"style="font-size:36px"></span><span style="font-size:35px"> Baños</span></span>
    <h4>2</h4>
                </div>
            </div>

        </div>


  </div>
</div>
<br><br><br><br>

  <div class="row">

            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group row">
                   <ul class="uli">
                        <li class="ulii"><i href="https://images.homify.com/c_fill,f_auto,h_500,q_auto,w_1280/v1511305692/p/photo/image/2329514/791a61bb-d176-4207-9676-41b26d04277c.jpg"><img  class="res" src="https://images.homify.com/c_fill,f_auto,h_500,q_auto,w_1280/v1511305692/p/photo/image/2329514/791a61bb-d176-4207-9676-41b26d04277c.jpg" height="100" width="150"></i></li>

                        <li class="ulii"><i href="https://images.homify.com/c_fill,f_auto,h_500,q_auto,w_1280/v1511305692/p/photo/image/2329514/791a61bb-d176-4207-9676-41b26d04277c.jpg"><img class="res" src="https://images.homify.com/c_fill,f_auto,h_500,q_auto,w_1280/v1511305692/p/photo/image/2329514/791a61bb-d176-4207-9676-41b26d04277c.jpg" height="100" width="150"></li>

                        <li class="ulii"><i href="https://images.homify.com/c_fill,f_auto,h_500,q_auto,w_1280/v1511305692/p/photo/image/2329514/791a61bb-d176-4207-9676-41b26d04277c.jpg"><img  class="res" src="https://images.homify.com/c_fill,f_auto,h_500,q_auto,w_1280/v1511305692/p/photo/image/2329514/791a61bb-d176-4207-9676-41b26d04277c.jpg" height="100" width="150"></li>
                      </ul> 
                </div>
            </div>

             <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group row">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61793.78112065851!2d-91.53742143929901!3d14.535624549938445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x858ec26918dae5ef%3A0x2abee866a65576aa!2sMazatenango!5e0!3m2!1ses!2sgt!4v1560045212863!5m2!1ses!2sgt" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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

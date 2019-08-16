<?php   session_start();   
 if (!isset($_SESSION['use'])&& $_SESSION['use']==null) {
        header("location: login.php");
    } ?>
<?php
require_once 'conexion.php';
$id=$_GET['id'];
$sql_query = "SELECT * FROM `inmueble` WHERE id_in=".$id;
              
        if (mysqli_query($con,$sql_query)) {
  $result = mysqli_query($con,$sql_query);
   $count = mysqli_num_rows($result);

 if ($count == 0) {
echo "<br />". "No hay datos." . "<br />";

 } else{
 while($row = mysqli_fetch_array($result))
 {

        ?>
<!DOCTYPE html>
<html>
<head>
     <title> Inmuebles</title> 
        <!-- add icon link -->
        <link rel = "icon" href ="im/logo.jpeg" type = "image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
      .error{
  border: 1.5px solid red;
}

.correcto {
  border: 1.5px solid green;
}
body {margin: 0;}

ul.topnav {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

ul.topnav li {float: left;}

ul.topnav li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

ul.topnav li a:hover:not(.active) {background-color: #111;}

ul.topnav li a.active {background-color: #4CAF50;}

ul.topnav li.right {float: right;}

@media screen and (max-width: 600px) {
  ul.topnav li.right, 
  ul.topnav li {float: none;}
}
 .previ {
  border:1px solid #ddd;
  padding:5px;
  border-radius:2px;
  background:#fff;
  max-width:200px;
border-width: 2px;
border-style: dashed;
}


#preview img {width:100%;display:block;
background: url('<?php echo "im/".$row["im1"]; ?>'); }
#preview2 img {width:100%;display:block;}
#preview3 img {width:100%;display:block;}
#preview4 img {width:100%;display:block;}
.redondeado {
  border-radius: 20px;
}
</style>
</head>
<body>

<ul class="topnav">
 <li><a  href="home1.php">Bienvenido <?php echo $_SESSION['use']; ?></a></li>
  <li><a class="active" href="">Registar</a></li>
  <li class="right"><a  href="" onclick="logut()">Cerrar Sesion</a></li>
 
</ul>

<div style="padding:0 16px;">
 <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                 
                        <div class="panel-title">       
                            <a href="home1.php">
          <span class="glyphicon glyphicon-arrow-left" style="font-size:36px"></span>
        </a><h3><strong>Registro inmueble</strong></h3>
    </div>
             
                    </div>     

                    <div style="padding-top:20px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form  method="POST" id="form1">
                
                            <div style="margin-bottom: 25px" >
                                        <label class="input-group">Nombre</label>
                                        <input  type="text" class="redondeado form-control" name="cod" placeholder="Nombre" id="cod1" value="<?php echo $row["codigo_db"];?>"> 
                                        <div id="rcod1"></div>    
                                </div>


                                    <div id="c1">
                                    <div style="margin-bottom: 25px" >
                               <label class="input-group">No. Dormitorio</label>
                                       <input type="text" name="dor" class=" redondeado form-control" id="dor1" value="<?php echo $row["ndorm_db"];?>"> 

                                 <div id="rdor1"></div> 
                                </div> 
                              
                           
                                <div style="margin-bottom: 25px" >
                                        <label class="input-group">No. Baños</label>
                                     <input type="text" name="ban" class="redondeado form-control" id="ban1" value="<?php echo $row["n_ban_db"];?>"> 
                                    <div id="rban1"></div> 
                                </div>
                               

                                <div style="margin-bottom: 25px" >
                                        <label class="input-group">Parqueo</label>
                                     <input type="text" name="par" class="redondeado form-control " id="par1" value="<?php echo $row["n_par_db"];?>" > 
                                     <div id="rpar1"></div>
                                         </div>  
                                          </div>

                                <div style="margin-bottom: 25px" >
                                        <label class="input-group">Tipo Inmueble</label>
                                        <select class="redondeado form-control" id="tip1" name="tp" onchange="capturar()">
                                         <?php
if($row["tip_in_fk"]=="5"){
?>
<option value="5">Terreno</option>
<option value="1">Apartamento</option>
<option value="2">Casa</option>
<option value="3">Locales Comerciales</option>
<option value="4">Bodega</option>
<script>
 document.getElementById('c1').style.display = 'none';
</script>
  <?php
}elseif ($row["tip_in_fk"]=="4") {
  ?>
<option value="4">Bodega</option>
<option value="1">Apartamento</option>
<option value="2">Casa</option>
<option value="3">Locales Comerciales</option>
<option value="5">Terreno</option>
<script>
 document.getElementById('c1').style.display = 'none';
</script>
<?php
}elseif ($row["tip_in_fk"]=="3") {
  ?>
<option value="3">Locales Comerciales</option>
<option value="1">Apartamento</option>
<option value="2">Casa</option>
<option value="4">Bodega</option>
<option value="5">Terreno</option>
<script>
 document.getElementById('c1').style.display = 'none';
</script>
<?php
}elseif ($row["tip_in_fk"]=="1") {
  ?>
<option value="1">Apartamento</option>
<option value="2">Casa</option>
<option value="3">Locales Comerciales</option>
<option value="4">Bodega</option>
<option value="5">Terreno</option>
<script>
 document.getElementById('c1').style.display = 'inline';
</script>
<?php 
}else{
?>
<option value="2">Casa</option>
<option value="1">Apartamento</option>
<option value="3">Locales Comerciales</option>
<option value="4">Bodega</option>
<option value="5">Terreno</option>
<script>
 document.getElementById('c1').style.display = 'inline';
</script>
<?php
}
?>
                                        </select>    
                                </div>
                                <div style="margin-bottom: 25px" >
                                        <label class="input-group">Metraje</label>
                                        <input  type="text" class=" redondeado form-control" name="met" placeholder="Metraje" id="met1" value="<?php echo $row["metraje_db"];?>"> 
                                        <div id="rmet1"></div>    
                                </div>
                                  <div style="margin-bottom: 25px" >
                                        <label class="input-group">Ubicacion</label>
                                     <input type="text" name="ub" class=" redondeado form-control" id="ub1" value="<?php echo $row["zona_db"];?>">  
                                     <div id="rub1"></div> 
                                         </div> 


                              



                                 <div style="margin-bottom: 25px" >
                                        <label class="input-group">Estado</label>
                                      <select class="redondeado form-control" id="Estado" name="Estado">
                                        <?php
if($row["est_fk"]=="2"){
?>
 <option value="2">Disponible</option>
<option value="1">En Proceso</option>
  <option value="3">Ocupado</option>
  <?php
}elseif($row["est_fk"]=="1"){
  ?>
 <option value="1">En Proceso</option>
<option value="2">Disponible</option>
<option value="3">Ocupado</option>
   <?php
}else{
  ?>
                                       <option value="3">Ocupado</option>   
   <option value="1">En Proceso</option>
<option value="2">Disponible</option>
                                 
                                       
    <?php
}
  ?>                                     
                                       
                                        </select> 
                                </div>
                                <div style="margin-bottom: 25px" >
                                        <label class="input-group">Descripcion</label>
                                        <textarea name="desc" class="redondeado form-control" id="desc1"><?php echo $row["derscri_db"];?></textarea >
                                       <div id="rdesc1"></div>
                                </div>

                                 <div style="margin-bottom: 25px" class="input-group">
                                     <div class="input-group">
                        <div id="preview" class="previ">
                          <img src="<?php echo "im/".$row["im1"];?>" name="m1">
                        </div>
                            <br>
                            <input type="file" class="form-control-file" name="image" id="image" accept="image/x-png,image/gif,image/jpeg" />
                     
                     </div>   
                                </div>
                        <div style="margin-bottom: 25px" class="input-group">
                        <div class="input-group">
                               <div id="preview2" class="previ">  <img src="<?php echo "im/".$row["im2"]; ?>" name="m2">
                        </div>
                                                 <br>
                        <input type="file" class="form-control-file" name="image2" id="image2" accept="image/x-png,image/gif,image/jpeg"/>
                  </div>
                     </div>
                     <div style="margin-bottom: 25px" class="input-group">
                        <div class="input-group">
                               <div id="preview3" class="previ">  <img src="<?php echo "im/".$row["im3"]; ?>" name="m3">
                        </div>
                              <br>
                              <input type="file" class="form-control-file" name="image3" id="image3" accept="image/x-png,image/gif,image/jpeg"/>
                  </div>
                     </div>
                     <div style="margin-bottom: 25px" class="input-group">
                        <div class="input-group">
                             <div id="preview4" class="previ">  <img src="<?php echo "im/".$row["im4"]; ?>" name="m4">
                        </div>
                            <br>
                            <input type="file" class="form-control-file" name="image4" id="image4" accept="image/x-png,image/gif,image/jpeg" />
                     </div>
                     </div>
                         
  

                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                   
                                    <input type="button" class="redondeado btn btn-info btn-lg btn-block upload" value="Actualizar" onclick="guardar(<?php echo $id;?>)">
                                   
                                    </div>
                                </div>


                                  
                            </form>     
          <?php

         
}
}
}else{
  echo "error". mysqli_error($con);
}
?>


                        </div>                     
                    </div>  
        </div>
    
    </div>
<div id="myDiv"></div>
<script type="text/javascript">
  
  function capturar()
    {

var combo = document.getElementById("tip1");
var selected = combo.options[combo.selectedIndex].text;

if(selected=='Terreno'){
    document.getElementById('c1').style.display = 'none';

    }else if(selected=='Bodega'){
         document.getElementById('c1').style.display = 'none';
       }else if(selected=='Locales Comerciales'){
         document.getElementById('c1').style.display = 'none';

}else{
     document.getElementById('c1').style.display = 'inline';

}

}

document.getElementById("image").onchange = function(e) {
    let reader = new FileReader();
  reader.onload = function(){
    let preview = document.getElementById('preview'),
            image = document.createElement('img');
    image.src = reader.result;
    preview.innerHTML = '';
    preview.append(image);
  };
  reader.readAsDataURL(e.target.files[0]);
}
document.getElementById("image2").onchange = function(e) {
    let reader = new FileReader();
  reader.onload = function(){
    let preview = document.getElementById('preview2'),
            image = document.createElement('img');
    image.src = reader.result;
    preview.innerHTML = '';
    preview.append(image);
  };
  reader.readAsDataURL(e.target.files[0]);
}
document.getElementById("image3").onchange = function(e) {
    let reader = new FileReader();
  reader.onload = function(){
    let preview = document.getElementById('preview3'),
            image = document.createElement('img');
    image.src = reader.result;
    preview.innerHTML = '';
    preview.append(image);
  };
  reader.readAsDataURL(e.target.files[0]);
}

document.getElementById("image4").onchange = function(e) {
    let reader = new FileReader();
  reader.onload = function(){
    let preview = document.getElementById('preview4'),
            image = document.createElement('img');
    image.src = reader.result;
    preview.innerHTML = '';
    preview.append(image);
  };
  reader.readAsDataURL(e.target.files[0]);
}

function guardar(b){
  var combo = document.getElementById("tip1");
var selected = combo.options[combo.selectedIndex].text;

if(selected=='Terreno'){
     
  var ids = ["cod1","met1","ub1","desc1"];
 var po=document.getElementsByName("cod")[0].value;
  var p2=document.getElementsByName("met")[0].value;
  var p4=document.getElementsByName("ub")[0].value;
  var p7=document.getElementsByName("desc")[0].value;

//var vv=$("#cod1").val().length;

 if (po == ''|p2 == ''| p4 == ''| p7 == '' ) {
    
var i;
for (i = 0; i < 4; i++) {
  if(ids.hasOwnProperty(i)){
    id = ids[i];
    //Si no hay input, no lo podemos validar
   if($("#"+id).val().length < 1){
$("#"+id).addClass("error");
var warning = $("<div class='alert alert-danger'><label>*Campo obligatorio</label></div>");
 $('#r'+id).append(warning);
    }else{
   $("#"+id).addClass("correcto");
 
    }
  }
    
}
 alert("Varios campos vacios");
  
} else {
  
  var a;
 var a2;
 var a3;
 var a4;
   var po=document.getElementsByName("cod")[0].value;
  var p1=document.getElementsByName("tp")[0].value;
  var p2=document.getElementsByName("met")[0].value;
  var p3=document.getElementsByName("dor")[0].value;
  var p4=document.getElementsByName("ub")[0].value;
  var p5=document.getElementsByName("par")[0].value;
  var p6=document.getElementsByName("Estado")[0].value;
  var p7=document.getElementsByName("desc")[0].value;
  var p8=document.getElementsByName("ban")[0].value;
   var x1 = document.getElementById("image").value;
   var x2 = document.getElementById("image2").value;
   var x3 = document.getElementById("image3").value;
   var x4 = document.getElementById("image4").value;
  



  if(x1==''){
    var ruta = document.m1.src;
 a1 = ruta.split('\\').pop().split('/').pop();
   }else{
   a1 = x1.split('\\').pop().split('/').pop();
   }
if(x2==''){
    var ruta = document.m2.src;
 a2 = ruta.split('\\').pop().split('/').pop();
   }else{
   a2 = x2.split('\\').pop().split('/').pop();
   }
   if(x3==''){
    var ruta = document.m3.src;
 a3 = ruta.split('\\').pop().split('/').pop();
   }else{
   a3 = x3.split('\\').pop().split('/').pop();
   }

   if(x4==''){
    var ruta = document.m4.src;
 a4 = ruta.split('\\').pop().split('/').pop();
   }else{
   a4 = x4.split('\\').pop().split('/').pop();
   }
im1();


     var parametros = {
      "varlor":b,
 "cod" : po,
                "tp" : p1,
                 "met" : p2,
                "dor" : p3,
                 "ub" : p4,
                "par" : p5,
                 "Estado" : p6,
                "desc" : p7,
                 "ban" : p8,
                "im" : a1,
                 "im2" : a2,
                "im3" : a3,
                 "im4" : a4
        };

   $.ajax({
  type: 'POST',
        url: 'edit.php',
        data:parametros,
        beforeSend: function () {
            console.log("Déjame pensar un poco...");
        },
        success: function(data){
          if(data === "corecto"){
     alert('Actualizado');
     window.location="home1.php";
          }else {
            alert("error")
          }
      
      }
})
}

    }else if(selected=='Bodega'){
          
  var ids = ["cod1","met1","ub1","desc1"];
 var po=document.getElementsByName("cod")[0].value;
  var p2=document.getElementsByName("met")[0].value;
  var p4=document.getElementsByName("ub")[0].value;
  var p7=document.getElementsByName("desc")[0].value;

//var vv=$("#cod1").val().length;

 if (po == ''|p2 == ''| p4 == ''| p7 == '' ) {
    
var i;
for (i = 0; i < 4; i++) {
  if(ids.hasOwnProperty(i)){
    id = ids[i];
    //Si no hay input, no lo podemos validar
   if($("#"+id).val().length < 1){
$("#"+id).addClass("error");
var warning = $("<div class='alert alert-danger'><label>*Campo obligatorio</label></div>");
 $('#r'+id).append(warning);
    }else{
   $("#"+id).addClass("correcto");
 
    }
  }
    
}
 alert("Varios campos vacios");
  
} else {
  
  var a;
 var a2;
 var a3;
 var a4;
   var po=document.getElementsByName("cod")[0].value;
  var p1=document.getElementsByName("tp")[0].value;
  var p2=document.getElementsByName("met")[0].value;
  var p3=document.getElementsByName("dor")[0].value;
  var p4=document.getElementsByName("ub")[0].value;
  var p5=document.getElementsByName("par")[0].value;
  var p6=document.getElementsByName("Estado")[0].value;
  var p7=document.getElementsByName("desc")[0].value;
  var p8=document.getElementsByName("ban")[0].value;
   var x1 = document.getElementById("image").value;
   var x2 = document.getElementById("image2").value;
   var x3 = document.getElementById("image3").value;
   var x4 = document.getElementById("image4").value;
  



  if(x1==''){
    var ruta = document.m1.src;
 a1 = ruta.split('\\').pop().split('/').pop();
   }else{
   a1 = x1.split('\\').pop().split('/').pop();
   }
if(x2==''){
    var ruta = document.m2.src;
 a2 = ruta.split('\\').pop().split('/').pop();
   }else{
   a2 = x2.split('\\').pop().split('/').pop();
   }
   if(x3==''){
    var ruta = document.m3.src;
 a3 = ruta.split('\\').pop().split('/').pop();
   }else{
   a3 = x3.split('\\').pop().split('/').pop();
   }

   if(x4==''){
    var ruta = document.m4.src;
 a4 = ruta.split('\\').pop().split('/').pop();
   }else{
   a4 = x4.split('\\').pop().split('/').pop();
   }
im1();


     var parametros = {
      "varlor":b,
 "cod" : po,
                "tp" : p1,
                 "met" : p2,
                "dor" : p3,
                 "ub" : p4,
                "par" : p5,
                 "Estado" : p6,
                "desc" : p7,
                 "ban" : p8,
                "im" : a1,
                 "im2" : a2,
                "im3" : a3,
                 "im4" : a4
        };

   $.ajax({
  type: 'POST',
        url: 'edit.php',
        data:parametros,
        beforeSend: function () {
            console.log("Déjame pensar un poco...");
        },
        success: function(data){
          if(data === "corecto"){
     alert('Actualizado');
     window.location="home1.php";
          }else {
            alert("error")
          }
      
      }
})
}
       }else if(selected=='Locales Comerciales'){
          
  var ids = ["cod1","met1","ub1","desc1"];
 var po=document.getElementsByName("cod")[0].value;
  var p2=document.getElementsByName("met")[0].value;
  var p4=document.getElementsByName("ub")[0].value;
  var p7=document.getElementsByName("desc")[0].value;

//var vv=$("#cod1").val().length;

 if (po == ''|p2 == ''| p4 == ''| p7 == '' ) {
    
var i;
for (i = 0; i < 4; i++) {
  if(ids.hasOwnProperty(i)){
    id = ids[i];
    //Si no hay input, no lo podemos validar
   if($("#"+id).val().length < 1){
$("#"+id).addClass("error");
var warning = $("<div class='alert alert-danger'><label>*Campo obligatorio</label></div>");
 $('#r'+id).append(warning);
    }else{
   $("#"+id).addClass("correcto");
 
    }
  }
    
}
 alert("Varios campos vacios");
  
} else {
  
  var a;
 var a2;
 var a3;
 var a4;
   var po=document.getElementsByName("cod")[0].value;
  var p1=document.getElementsByName("tp")[0].value;
  var p2=document.getElementsByName("met")[0].value;
  var p3=document.getElementsByName("dor")[0].value;
  var p4=document.getElementsByName("ub")[0].value;
  var p5=document.getElementsByName("par")[0].value;
  var p6=document.getElementsByName("Estado")[0].value;
  var p7=document.getElementsByName("desc")[0].value;
  var p8=document.getElementsByName("ban")[0].value;
   var x1 = document.getElementById("image").value;
   var x2 = document.getElementById("image2").value;
   var x3 = document.getElementById("image3").value;
   var x4 = document.getElementById("image4").value;
  



  if(x1==''){
    var ruta = document.m1.src;
 a1 = ruta.split('\\').pop().split('/').pop();
   }else{
   a1 = x1.split('\\').pop().split('/').pop();
   }
if(x2==''){
    var ruta = document.m2.src;
 a2 = ruta.split('\\').pop().split('/').pop();
   }else{
   a2 = x2.split('\\').pop().split('/').pop();
   }
   if(x3==''){
    var ruta = document.m3.src;
 a3 = ruta.split('\\').pop().split('/').pop();
   }else{
   a3 = x3.split('\\').pop().split('/').pop();
   }

   if(x4==''){
    var ruta = document.m4.src;
 a4 = ruta.split('\\').pop().split('/').pop();
   }else{
   a4 = x4.split('\\').pop().split('/').pop();
   }
im1();


     var parametros = {
      "varlor":b,
 "cod" : po,
                "tp" : p1,
                 "met" : p2,
                "dor" : p3,
                 "ub" : p4,
                "par" : p5,
                 "Estado" : p6,
                "desc" : p7,
                 "ban" : p8,
                "im" : a1,
                 "im2" : a2,
                "im3" : a3,
                 "im4" : a4
        };

   $.ajax({
  type: 'POST',
        url: 'edit.php',
        data:parametros,
        beforeSend: function () {
            console.log("Déjame pensar un poco...");
        },
        success: function(data){
          if(data === "corecto"){
     alert('Actualizado');
     window.location="home1.php";
          }else {
            alert("error")
          }
      
      }
})
}

}else{
     var ids = ["cod1","met1","dor1","ub1","par1","desc1","ban1"];
 var po=document.getElementsByName("cod")[0].value;
  var p2=document.getElementsByName("met")[0].value;
  var p3=document.getElementsByName("dor")[0].value;
  var p4=document.getElementsByName("ub")[0].value;
  var p5=document.getElementsByName("par")[0].value;
  var p7=document.getElementsByName("desc")[0].value;
  var p8=document.getElementsByName("ban")[0].value;
//var vv=$("#cod1").val().length;

 if (po == ''|p2 == ''| p3 == ''| p4 == ''| p5 == ''| p7 == '' |p8 == '') {
    
var i;
for (i = 0; i < 7; i++) {
  if(ids.hasOwnProperty(i)){
    id = ids[i];
    //Si no hay input, no lo podemos validar
   if($("#"+id).val().length < 1){
$("#"+id).addClass("error");
var warning = $("<div class='alert alert-danger'><label>*Campo obligatorio</label></div>");
 $('#r'+id).append(warning);
    }else{
   $("#"+id).addClass("correcto");
 
    }
  }
    
}
 alert("Varios campos vacios");
  
} else {
  
  var a;
 var a2;
 var a3;
 var a4;
   var po=document.getElementsByName("cod")[0].value;
  var p1=document.getElementsByName("tp")[0].value;
  var p2=document.getElementsByName("met")[0].value;
  var p3=document.getElementsByName("dor")[0].value;
  var p4=document.getElementsByName("ub")[0].value;
  var p5=document.getElementsByName("par")[0].value;
  var p6=document.getElementsByName("Estado")[0].value;
  var p7=document.getElementsByName("desc")[0].value;
  var p8=document.getElementsByName("ban")[0].value;
   var x1 = document.getElementById("image").value;
   var x2 = document.getElementById("image2").value;
   var x3 = document.getElementById("image3").value;
   var x4 = document.getElementById("image4").value;
  



  if(x1==''){
    var ruta = document.m1.src;
 a1 = ruta.split('\\').pop().split('/').pop();
   }else{
   a1 = x1.split('\\').pop().split('/').pop();
   }
if(x2==''){
    var ruta = document.m2.src;
 a2 = ruta.split('\\').pop().split('/').pop();
   }else{
   a2 = x2.split('\\').pop().split('/').pop();
   }
   if(x3==''){
    var ruta = document.m3.src;
 a3 = ruta.split('\\').pop().split('/').pop();
   }else{
   a3 = x3.split('\\').pop().split('/').pop();
   }

   if(x4==''){
    var ruta = document.m4.src;
 a4 = ruta.split('\\').pop().split('/').pop();
   }else{
   a4 = x4.split('\\').pop().split('/').pop();
   }
im1();


     var parametros = {
      "varlor":b,
 "cod" : po,
                "tp" : p1,
                 "met" : p2,
                "dor" : p3,
                 "ub" : p4,
                "par" : p5,
                 "Estado" : p6,
                "desc" : p7,
                 "ban" : p8,
                "im" : a1,
                 "im2" : a2,
                "im3" : a3,
                 "im4" : a4
        };

   $.ajax({
  type: 'POST',
        url: 'edit.php',
        data:parametros,
        beforeSend: function () {
            console.log("Déjame pensar un poco...");
        },
        success: function(data){
          if(data === "corecto"){
     alert('Actualizado');
     window.location="home1.php";
          }else {
            alert("error")
          }
      
      }
})
}

}
}

  



function im1(){
       var formData = new FormData();
        var files = $('#image')[0].files[0];
        formData.append('file',files);
        $.ajax({
            url: 'upload.php',
            type: 'post',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                if (response != 0) {
                 
im2();
                } else {
                    alert('Formato de imagen incorrecto imagen 1.');
                }
            }
        });
        return false;
}
function im2(){
       var formData = new FormData();
        var files = $('#image2')[0].files[0];
        formData.append('file',files);
        $.ajax({
            url: 'upload.php',
            type: 'post',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                if (response != 0) {
                  
im3();
                } else {
                    alert('Formato de imagen incorrecto imagen 2.');
                }
            }
        });
        return false;
}
function im3(){
       var formData = new FormData();
        var files = $('#image3')[0].files[0];
        formData.append('file',files);
        $.ajax({
            url: 'upload.php',
            type: 'post',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                if (response != 0) {

                    im4();
                } else {
                    alert('Formato de imagen incorrecto imagen 3.');
                }
            }
        });
        return false;
}
   function im4(){
       var formData = new FormData();
        var files = $('#image4')[0].files[0];
        formData.append('file',files);
        $.ajax({
            url: 'upload.php',
            type: 'post',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                if (response != 0) {
                  
                } else {
                    alert('Formato de imagen incorrecto imagen 4.');
                }
            }
        });
        return false;
}

</script>
</div>

</body>
</html>
<script type="text/javascript">
    function logut(){
        var parametros;
        $.ajax({
            type: "POST",
            url: "logout.php",
            data: parametros, beforeSend: function(){

                          $('#form1').fadeIn(1000).html("<p align='center'><img src='im/log.gif' /></p>");
                    },timeout:200000,
            success: function(response) {            
               if (response =="cerrar") {
                  window.location = 'login.php'; 
                } else {
                    alert('Error');
                }
            }
        });

    }
</script>

<?php   session_start();   
 if (!isset($_SESSION['use'])&& $_SESSION['use']==null) {
        header("location: login.php");
    } ?>

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


#preview img {width:100%;display:block;}
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
                                        <label class="input-group">Codigo</label>
                                        <input  type="text" class="redondeado form-control" name="cod" placeholder="Codigo" id="cod1">   
                                        <div id="rcod1"></div> 
                                </div>
                                
                                <div style="margin-bottom: 25px" >
                                        <label class="input-group">Tipo Inmueble</label>
                                        <select class="redondeado form-control" id="tip1" name="tp" onchange="capturar()">
                                          <option value="1">Apartamento</option>
                                          <option value="2">Casa</option>
                                          <option value="3">Locales Comerciales</option>
                                          <option value="4">Bodega</option>
                                          <option value="5">Terreno</option>
                                        </select>    
                                </div>
                                <div style="margin-bottom: 25px" >
                                        <label class="input-group">Metraje</label>
                                        <input  type="text" class=" redondeado form-control" name="met" placeholder="Metraje" id="met1">  
                                           <div id="rmet1"></div> 
                                </div>
                                  <div style="margin-bottom: 25px" >
                                        <label class="input-group">Ubicación</label>
                                     <input type="text" name="ub" class=" redondeado form-control" id="ub1" placeholder="Ubicación">  
                                     <div id="rub1"></div> 
                                         </div> 
                                <div id="c1">
                                    <div style="margin-bottom: 25px" >
                               <label class="input-group">No. Dormitorio</label>
                                       <input type="text" name="dor" class=" redondeado form-control" id="dor1" placeholder="No. Dormitorio"> 
                                <div id="rdor1"></div> 
                                </div> 
                              
                           
                                <div style="margin-bottom: 25px" >
                                        <label class="input-group">No. Baños</label>
                                     <input type="text" name="ban" class="redondeado form-control" id="ban1" placeholder="No. Baños">
                                     <div id="rban1"></div>  
                                </div>
                               

                                <div style="margin-bottom: 25px" >
                                        <label class="input-group">No.Parqueo</label>
                                     <input type="text" name="par" class="redondeado form-control" id="par1" placeholder="No.Parqueo">
                                     <div id="rpar1"></div> 
                                         </div>  

                                          </div>  

                                 <div style="margin-bottom: 25px" >
                                        <label class="input-group">Estado</label>
                                      <select class="redondeado form-control" id="Estado1" name="Estado">
                                          <option value="1">Disponible</option>
                                          <option value="2">En Proceso</option>
                                          <option value="3">Apartamento</option>
                                        </select> 
                                </div>
                                <div style="margin-bottom: 25px" >
                                        <label class="input-group">Descripción</label>
                                        <textarea name="desc" class="redondeado form-control" id="desc1" placeholder="Descripción"></textarea>
                                        <div id="rdesc1"></div>
                                       
                                </div>

                                 <div style="margin-bottom: 25px" class="input-group">
                                     <div class="input-group">
                        <div id="preview" class="previ"></div>
                            <br>
                            <input type="file" class="form-control-file" name="image" id="image" accept="image/x-png,image/gif,image/jpeg">
                     <div id="rimage"></div>
                     </div>   
                                </div>
                        <div style="margin-bottom: 25px" class="input-group">
                        <div class="input-group">
                               <div id="preview2" class="previ"></div>
                                                 <br>
                        <input type="file" class="form-control-file" name="image2" id="image2" accept="image/x-png,image/gif,image/jpeg"/>
                        <div id="rimage2"></div>
                  </div>
                     </div>
                     <div style="margin-bottom: 25px" class="input-group">
                        <div class="input-group">
                               <div id="preview3" class="previ"></div>
                              <br>
                              <input type="file" class="form-control-file" name="image3" id="image3" accept="image/x-png,image/gif,image/jpeg" />
                               <div id="rimage3"></div>
                  </div>
                     </div>
                     <div style="margin-bottom: 25px" class="input-group">
                        <div class="input-group">
                             <div id="preview4" class="previ"></div>
                            <br>
                            <input type="file" class="form-control-file" name="image4" id="image4" accept="image/x-png,image/gif,image/jpeg" />
                            <div id="rimage4"></div>
                     </div>
                     </div>
                         
            

                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                   
                                   
                                    <input type="button" class="redondeado btn btn-info btn-lg btn-block upload" value="Guardar">
                                    
                                    </div>
                                </div>


                                  
                            </form>     



                        </div>                     
                    </div>  
        </div>
    
    </div>
<div id="myDiv"></div>
<script type="text/javascript">
  
  function capturar()
    {

var combo = document.getElementById("tip");
var selected = combo.options[combo.selectedIndex].text;
if(selected=='Terreno'){
    document.getElementById('c1').style.display = 'none';

    }else if(selected=='Bodega'){
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


 $(document).ready(function() {
    $(".upload").on('click', function() {
  var po=document.getElementsByName("cod")[0].value;
  var p2=document.getElementsByName("met")[0].value;
  var p3=document.getElementsByName("dor")[0].value;
  var p4=document.getElementsByName("ub")[0].value;
  var p5=document.getElementsByName("par")[0].value;
  var p7=document.getElementsByName("desc")[0].value;
  var p8=document.getElementsByName("ban")[0].value;
 var x1 = document.getElementsByName("image").value;
  var x2 = document.getElementsByName("image2").value;
  var x3 = document.getElementsByName("image3").value;
  var x4 = document.getElementsByName("image4").value;
  
   if (po == ''|p2 == ''| p3 == ''| p4 == ''| p5 == ''| p7 == '' |p8 == ''|x1 == ''| x2 == ''| x3 == '' | x4 == '') {
    var ids = ["cod1","met1","dor1","ub1","par1","desc1","ban1","image","image2","image3","image4"];
var i;
for (i = 0; i < 11; i++) {
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
  }else{
   
im1();
guardar();
       
  }




    });
});
function guardar(){
 
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
   var path = x1.split('\\').pop().split('/').pop();
   var x2 = document.getElementById("image2").value;
   var path2 = x2.split('\\').pop().split('/').pop();
   var x3 = document.getElementById("image3").value;
   var path3 = x3.split('\\').pop().split('/').pop();
   var x4 = document.getElementById("image4").value;
   var path4 = x4.split('\\').pop().split('/').pop();

     var parametros = {
      "cod" : po,
                "tp" : p1,
                 "met" : p2,
                "dor" : p3,
                 "ub" : p4,
                "par" : p5,
                 "Estado" : p6,
                "desc" : p7,
                 "ban" : p8,
                "im" : path,
                 "im2" : path2,
                "im3" : path3,
                 "im4" : path4
        };

   $.ajax({
  type: 'POST',
        url: 'insert.php',
        data:parametros,
        beforeSend: function () {
            console.log("Déjame pensar un poco...");
        },
        success: function(data){
          if(data === "corecto"){
     alert('Insertado');
     window.location="home1.php";
    
          }else {
            alert("error")
          }
      
      }
})
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

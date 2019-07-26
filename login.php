<?php  session_start(); ?>   

<?php

if(isset($_SESSION['use']))    
                             
 {
    header("Location:Mostrar.php"); 
 }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Inmuebles</title>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	</head>
<style type="text/css">
.redondeado {
  border-radius: 20px;
}	
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
</style>
<body>
	
 <div class="container">
         <div class="card" style="margin-top:10%">
            <div class="card-header">
               Iniciar sesion
            </div>
            <div class="card-body">
            <div id="preview_err" class="alert alert-danger" style="display:none" role="alert"></div>
               <form method="POST" id="signin_form" name="signin_form">
               	<div id="posgre"></div>
               	<div id="datos">
				<div class="form-group">
					<label>Username</label>
					<input type="text" id="username" class="redondeado form-control"/>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" id="password" class="redondeado form-control"/>
				</div>
 
				<center><button type="button" id="login" class="redondeado btn btn-primary btn-lg"><span class="glyphicon glyphicon-log-in"></span> Login</button></center>
				<br />
				</div>
			</form>
			<div id="result"></div>

            </div>
         </div>
      </div>


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#login').on('click', function(){
		var username = $('#username').val();
		var password = $('#password').val();

$.ajax({
	type: 'POST',
				url: 'signin.php',
				data: {
					username: username,
					password: password
				},
		 beforeSend: function(){
   
						
			var pesra = $("<img src='im/log.gif' id='loader' />");
						
						
						$('#posgre').html(pesra);
						setTimeout(function(){
							pesra.fadeOut(1000);
						}, 200);	
   },
				success: function(data){
					if(data === "success"){

						window.location = 'home1.php';
					}else if(data === "error"){

						var warning = $("<div class='alert alert-danger'>Error: Invalidos Usuario y Password</div>");
						
						$('#result').append(warning);
						setTimeout(function(){
							warning.fadeOut(1000);
						}, 2000);
					}
			
			}
})

})
	});
</script>
</body>	
</html>

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

<?php
require_once 'conexion.php';
$sql_query = "SELECT id_in, im1,tip_in_fk FROM inmueble WHERE tip_in_fk=2 ORDER BY id_in DESC limit 12";
if (mysqli_query($con,$sql_query)) {
  $result = mysqli_query($con,$sql_query);
  $i = 1;
$count = mysqli_num_rows($result);
 if ($count == 0) {
echo "<div class='alert alert-danger'>En este momento no hay casas</div>";
 } else{
 while($row = mysqli_fetch_array($result))
 {
$iim[$i]=$row['im1'];
$icod[$i]=$row['id_in'];
$i++;
}
?>

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
        <img src="<?php echo "im/".$iim[1]; ?>">
          <div class="carousel-caption">
          <button type="button" class="btn btn-success button--winona" onClick="window.location.href='verca.php?cod=<?php echo $icod[1]; ?>'">Ver</button>
        </div>
      </div>    
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="<?php echo "im/".$iim[2]; ?>">
         <div class="carousel-caption">
          <button type="button" class="btn btn-success button--winona" onClick="window.location.href='verca.php?cod=<?php echo $icod[2]; ?>'">Ver</button>
        </div>
      </div>   
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="<?php echo "im/".$iim[3]; ?>">
           <div class="carousel-caption">
          <button type="button" class="btn btn-success button--winona" onClick="window.location.href='verca.php?cod=<?php echo $icod[3]; ?>'">Ver</button>
        </div>
      </div> 
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="<?php echo "im/".$iim[4]; ?>">
        <div class="carousel-caption">
          <button type="button" class="btn btn-success button--winona" onClick="window.location.href='verca.php?cod=<?php echo $icod[4]; ?>'">Ver</button>
        </div>
          </div>
    </div>
    <div class="carousel-item">
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="<?php echo "im/".$iim[5]; ?>">
         <div class="carousel-caption">
          <button type="button" class="btn btn-success button--winona" onClick="window.location.href='verca.php?cod=<?php echo $icod[5]; ?>'">Ver</button>
        </div>
      </div>    
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="<?php echo "im/".$iim[6]; ?>">
         <div class="carousel-caption">
          <button type="button" class="btn btn-success button--winona" onClick="window.location.href='verca.php?cod=<?php echo $icod[6]; ?>'">Ver</button>
        </div>
      </div>   
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="<?php echo "im/".$iim[7]; ?>">
         <div class="carousel-caption">
          <button type="button" class="btn btn-success button--winona" onClick="window.location.href='verca.php?cod=<?php echo $icod[7]; ?>'">Ver</button>
        </div>
      </div>   
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="<?php echo "im/".$iim[8]; ?>">
         <div class="carousel-caption">
          <button type="button" class="btn btn-success button--winona" onClick="window.location.href='verca.php?cod=<?php echo $icod[8]; ?>'">Ver</button>
        </div>
      </div>  
    </div>
    <div class="carousel-item">
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="<?php echo "im/".$iim[9]; ?>">
         <div class="carousel-caption">
          <button type="button" class="btn btn-success button--winona" onClick="window.location.href='verca.php?cod=<?php echo $icod[9]; ?>'">Ver</button>
        </div>
      </div>    
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="<?php echo "im/".$iim[10]; ?>">
         <div class="carousel-caption">
          <button type="button" class="btn btn-success button--winona" onClick="window.location.href='verca.php?cod=<?php echo $icod[10]; ?>'">Ver</button>
        </div>
      </div>   
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="<?php echo "im/".$iim[11]; ?>">
         <div class="carousel-caption">
          <button type="button" class="btn btn-success button--winona" onClick="window.location.href='verca.php?cod=<?php echo $icod[11]; ?>'">Ver</button>
        </div>
      </div>   
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="<?php echo "im/".$iim[12]; ?>">
         <div class="carousel-caption">
          <button type="button" class="btn btn-success button--winona" onClick="window.location.href='verca.php?cod=<?php echo $icod[12]; ?>'">Ver</button>
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


<?php
}
}else{
  echo "error". mysqli_error($con);
}
    ?>  
    
  

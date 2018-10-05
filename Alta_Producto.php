<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->



<?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "1123";
$databaseName = "olxdb";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query
$query = "SELECT * FROM `rubro`";

// for method 1

$result1 = mysqli_query($connect, $query);

// for method 2


?>




<div class="container">
	<div class="row">
		<form class="form-horizontal">

<!-- Form Name -->
<legend>Alta de Producto</legend>

<!-- Text input-->
			<div class="form-group">
				<label class="col-md-4 control-label" for="name">Titulo</label>  
				<div class="col-md-4">
					<input id="name" name="name" class="form-control input-md" required="" type="text">
				</div>
			</div>


			<div class="form-group">
				<label class="col-md-4 control-label" for="title">Rubro</label>  
				<div class="col-md-4">
					<select id="inputRubro" class="form-control">
					<?php while($row1 = mysqli_fetch_array($result1)):;?>
					<option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>
					<?php endwhile;?>			
					</select>
				</div>
			</div>

<!-- Text input-->
			<div class="form-group">
				<label class="col-md-4 control-label" for="title">Precio</label>  
				<div class="col-md-4">
					<input id="title" name="title"  class="form-control input-md" required="" type="text">
				</div>
			</div>

<!-- Text input-->
			<div class="form-group">
				<label class="col-md-4 control-label" for="imagen">Imagen</label>  
				<div class="col-md-4">
					<input type="file" name="imagen" size="20" class="form-control input-md" required="" type="text">
				</div>
			</div>

<!-- Textarea -->
			<div class="form-group">
				<label class="col-md-4 control-label" for="detail">Detalles</label>
				<div class="col-md-4">                     
					<textarea class="form-control" id="detail" name="detail"></textarea>
				</div>
			</div>


			<div class="row">
				<div class="col-xs-12 col-md-12"><input type="submit" value="Aceptar" class="btn btn-primary btn-block btn-lg" tabindex="11"></div>
             
			</div>


	
	<div class="media">
  <img class="mr-3" src=".../64x64" alt="Generic placeholder image">
  <div class="media-body">
    <h5 class="mt-0">Media heading</h5>
    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
  </div>
</div>
	

		
</form>
	</div>
</div>




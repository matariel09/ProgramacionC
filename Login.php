<!DOCTYPE html>
<html>
<head>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
	<form action="Registrar.php" method="post" class="form-register" onsubmit="return_validar();">
		<div class="container">

<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<form role="form">
			<h2>Registro <small>gratuito</small></h2>
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
                        <input type="text" name="Nombre" id="InputNombre" class="form-control input-lg" placeholder="Nombre" tabindex="1" required autofocus>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="Apellido" id="InputApellido" class="form-control input-lg" placeholder="Apellido" tabindex="2" required autofocus>
					</div>
				</div>
			</div>
			<div class="form-group">
				<input type="text" name="Nick" id="InputNick" class="form-control input-lg" placeholder="Nombre de Usuario" tabindex="3" required autofocus>
			</div>
			<div class="form-group">
				<input type="email" name="email" id="inputemail" class="form-control input-lg" placeholder="Direccion@gmail.com" tabindex="4" required autofocus>
			</div>
			
			
			<div class="row">
		<div class="form-group col-md-6">
				<label for="example-date-input" class="col-2 col-form-label">Fecha Nacimiento</label>
				<div class="col-10">
					<input class="form-control" type="date" value="2011-08-19" name="fecha_N" id="fecha_N" tabindex="5">
				</div>
			</div>
		</div>
			<div class="row">
			<div class="form-group col-md-6">
                    <label for="NumeroTelefono" class="col-2 col-form-label">Numero Telefonico </label>
                    <div class="col-10">
                        <input type="text" name="telefono" id="telefono" placeholder="Numero de Telefono" class="form-control" tabindex="6" required autofocus>
                        <span class="help-block">Su numero solo lo veran los interesados </span>
                    </div>
                </div>
		</div>	
			
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password" id="inputpassword" class="form-control input-lg" placeholder="Password" tabindex="7" required autofocus>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password_confirmacion" id="inputpassword_confirmacion" class="form-control input-lg" placeholder="Confirmar Password" tabindex="8" required autofocus>
					</div>
				</div>
			</div>
					
			<div class="form-group">
                    <label class="control-label col-sm-2">Genero</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="genero" id="RadioMasculino" value="M" tabindex="9">Masculino
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="genero" id="RadioFemenino" value="F" tabindex="10">Femenino
                                </label>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.form-group -->
			
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-md-12"><input type="submit" value="Registrar" class="btn btn-primary btn-block btn-lg" tabindex="11"></div>	
			</div>
		</form>
	</div>
</div>
<!-- Modal -->

</div>
	</form>
	<?php

	?>
</body>
</html>
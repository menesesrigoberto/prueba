<?php
(isset($_GET['i'])) ? $getinfo=$_GET['i'] :$getinfo='';

if ($getinfo=="1"){	
	$info  = "
        <div class='alert alert-success' style='text-align: center; font-weight: normal;'>
            <a style='color: #000; font-size: 14px; text-decoration: none;'>
                Guardado Correctamente
            </a>
        </div>
  	";
}else{
	$info = "";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio Natural Life</title>
	<link rel="stylesheet" href="assets/css/bootstrap.css" />
</head>
<body>
	<div class="container">
		<?php echo $info;?>
		<div class="row">
			<div class="col-md-12">
				<h4>Ejercicio Natural Life</h4>
			</div>
		</div>
		<hr>
		<form action="index.php?a=guardar" method="POST">
			<div class="row">
				<div class="col-md-2" style="text-align: right;">
					<label style="font-size: 18px">Nombre:</label>
				</div>
				<div class="col-md-4">
					<input type="text" name="nombre" class="form-control" required="required"	>
				</div>
			</div>
			<div class="row" style="margin-top: 10px">
				<div class="col-md-2" style="text-align: right;">
					<label style="font-size: 18px">Apellido:</label>
				</div>
				<div class="col-md-4">
					<input type="text" name="apellido" class="form-control" required="required">
				</div>
			</div>
			<div class="row" style="margin-top: 10px">
				<div class="col-md-2" style="text-align: right;">
					<label style="font-size: 18px">Email:</label>
				</div>
				<div class="col-md-4">
					<input type="email" name="email" class="form-control" required="required">
				</div>
			</div>
			<div class="row" style="margin-top: 10px">
				<div class="col-md-6" style="text-align: center;">					
					<button type="submit" class="btn btn-primary" >Guardar</button>
				</div>
			</div>

		</form>
	</div>

</body>
</html>
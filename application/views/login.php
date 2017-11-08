<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Editorial</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="<?php echo base_url('resources/toastr/toastr.min.css')?>">
		<link rel="stylesheet" href="<?php echo base_url('resources/css/main.css')?>">

	</head>
	<body style="
		padding-top: 45px;
		background-position: center center;
		background-repeat: no-repeat;
		background-attachment: fixed;
		 background-size: cover;
		 background-color: #ffefef;
	">

		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6 col-lg-offset-4 col-lg-4">
					<div class="panel panel-default">
						<div class="panel-body">
							<form action="#" method="POST" id="login">
								<div class="form-group">
									<label for="usuario">Usuario</label>
									<input type="text" name="cve_usuario" id="cve_usuario" />
								</div>
								<div class="form-group">
									<label for="contrasenia">Contraseña</label>
									<input type="password" name="contrasenia" id="contrasenia" />
								</div>
								<div class="form-group">
									<button class="btn special btn-block" type="submit">Iniciar sesión</button>
								</div>
							</form>
						</div>
					</div>
				</div>

			</div>
		</div>

		<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script src="<?php echo base_url('resources/toastr/toastr.min.js')?>"></script>
		<script src="<?php echo base_url('resources/js/skel.min.js')?>"></script>
		<script src="<?php echo base_url('resources/js/util.js')?>"></script>
		<script src="<?php echo base_url('resources/js/main.js')?>"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#login').submit(function(e){
					e.preventDefault();
					str = $('#login').serialize();
					$.ajax({
						url: 'Login/Acceder',
						data: str,
						type: 'POST',
						async: true,
						cache: false,
						dataType: 'json',
						success: function(respuesta){
							toastr.clear();
							if(respuesta.bandera == true){
								window.location.href = "Site/Inicio";
							} else{
								toastr.error(respuesta.msj, 'Mensaje del Sistema',  {timeOut: 0});
							}
						}
					});
				});
			});
		</script>
	</body>
</html>

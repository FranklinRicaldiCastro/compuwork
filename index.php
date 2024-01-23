<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CompuWork</title>

	<!-- Estilos de Bootstrap -->
	<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">

	<!-- Mis Estilos -->
	<link rel="stylesheet" href="css/index.css">
</head>
<body>
	<div class="container m-5 formulario_iniciar_sesion">

		<div class="text-center p-4 mt-4">
		<h2>Iniciar Sesión</h2>
		</div>

		<form" class="" action="procesar_formulario.php" method="post">
		<input class="form-control p" type="text" id="rol" name="_rol" placeholder="Selecione su Rol">
		<input class="form-control" type="text" id="usuario" name="_usuario" placeholder="Nombre de usuario">
		<input class="form-control" type="password" id="clave" name="_clave" placeholder="Clave">
		<div class="btn_formulario_iniciar_sesion mb-4">
			<a class="btn btn-success" href="crear_cuenta.php">Registrate</a>
			<button class="btn btn-primary" type="submit">Iniciar Sesion</button>
		</div>
		</form>
	</div>

	<!-- Script Bootstrap -->
	<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>
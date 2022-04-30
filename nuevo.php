<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inscripciones</title>
	<!--CSS Boostrap-->
	<link rel="stylesheet" href="bootstrap.min.css">
	<!-- CSS -->
	<link rel="stylesheet" href="style.css">
</head>

<body>


	<nav class="navbar navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="#">
				<img src="logo.png" alt="" width="50">
			</a>
			<a class="navbar-brand fs-3 fw-bold text-black mx-auto" href="#">Secundaria Técnica 97</a>
		</div>
	</nav>
	<div class="container" style="padding-top:15px">


		<form method="POST" action="guardar.php" enctype="multipart/form-data" autocomplete="off">


			<label class=" fw-bolder fs-5">NOMBRE COMPLETO DEL ALUMNO</label>

			<input type="text" class="form-control" name="numa" required placeholder="Escribe el nombre del alumno">
			<br>

			<label class=" fw-bolder fs-5">NUMERO DE TELEFONO DEL TUTOR</label>

			<input type="text" class="form-control" name="num" required placeholder=" Escribe el número de telefono">



			<br>
			<div class="custom-file">
				<input type="file" class="form-control form-control-lg" id="archivo" name="archivo" required>
			</div>
			
			<div class="alert alert-warning" role="alert">
				El archivo debe ser .PDF
			</div>


			<br><br>

			<div class="form-group" style="padding-top:15px">
				<button type="submit" class="btn btn-success btn-lg px-4">Subir Formato</button>

			</div>
		</form>
	</div>
</body>

</html>
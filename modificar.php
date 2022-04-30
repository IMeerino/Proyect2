<?php
require 'conexion.php';

$id = $_GET['id'];

$sql = "SELECT * FROM actividades WHERE id = '$id'";
$resultado = $mysqli->query($sql);
$row = $resultado->fetch_assoc();

?>
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

	<script type="text/javascript">
		$(document).ready(function() {
			$('.delete').click(function() {
				var parent = $(this).parent().attr('id');
				var service = $(this).parent().attr('data');
				var dataString = 'id=' + service;

				$.ajax({
					type: "POST",
					url: "del_file.php",
					data: dataString,
					success: function() {
						location.reload();
					}
				});
			});
		});
	</script>

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
	<div class="container mt-5">
		

		<form method="POST" action="update.php" enctype="multipart/form-data" autocomplete="off">
			<input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>" />
			<div class="form-row">
				<div class=" fs-5">
					<label class=" fw-bolder">NOMBRE DEL ALUMNO: 	</label>
					<?php echo $row['numeroactividad']; ?>
				</div>
			</div>


<br>

			<div class="form-group fs-5">
				<?php
				$path = "files/" . $id;
				if (file_exists($path)) {
					$directorio = opendir($path);
					while ($archivo = readdir($directorio)) {
						if (!is_dir($archivo)) {
							echo "<div data='" . $path . "/" . $archivo . "'><a href='" . $path . "/" . $archivo . "' title='Ver Archivo Adjunto'><img src='formato.svg' width='25'></a>";
							echo "$archivo <a href='#' class='delete' title='Ver Archivo Adjunto' ><i class='fas fa-trash'></i></a></div>";
						}
					}
				}

				?>

			</div>

			<br>

			
		</form>
	</div>
</body>

</html>
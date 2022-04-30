<?php
	
	require 'conexion.php';
	
	$id = $_POST['id'];
	$numeroa = $_POST['numeroact'];
	$nombrea = $_POST['nombreact'];
	$descripciona = $_POST['descripcionact'];
	$enlacesa = $_POST['enlaceact'];
	
	$sql = "UPDATE actividades 
	SET numeroactividad='$numeroa', nombreactividad='$nombrea', descripciona='$descripciona', enlace='$enlacesa' 
	WHERE id = '$id'";
	$resultado = $mysqli->query($sql);
	$id_insert = $id;
	
	if($_FILES["archivo"]["error"]>0){
		} else {
		
		$permitidos = array("image/gif","image/png","image/jpg","application/pdf","image/jpeg","application/octet-stream","application/msword","application/docx","application/vnd.ms-word");
		
		
		if(in_array($_FILES["archivo"]["type"], $permitidos) && $_FILES["archivo"]["size"]){
			
			$ruta = 'files/'.$id_insert.'/';
			$archivo = $ruta.$_FILES["archivo"]["name"];
			
			if(!file_exists($ruta)){
				mkdir($ruta);
			}
			
			if(!file_exists($archivo)){
				
				$resultado = @move_uploaded_file($_FILES["archivo"]["tmp_name"], $archivo);
				
				if($resultado){
					echo "Archivo Guardado";
					} else {
					echo "Error al guardar archivo";
				}
				
				} else {
				echo "Archivo ya existe";
			}
			
			} else {
			echo "Archivo no permitido o excede el tamaño";
		}
		
	}
	
	
?>

<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.5.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<?php if($resultado) { ?>
					<h3>REGISTRO MODIFICADO</h3>
					<?php } else { ?>
					<h3>ERROR AL MODIFICAR</h3>
				<?php } ?>
			</div>
			<div class="row">
				<a href="index.php" class="btn btn-primary">Regresar</a>
				
			</div>
		</div>
	</body>
</html>

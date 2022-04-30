<?php
	
	require 'conexion.php';
	
	$nombre = $_POST['numa'];
	$numero = $_POST['num'];
	
	
	
	$sql = "INSERT INTO actividades (numeroactividad,numero) 
	VALUES ('$nombre','$numero')";
	$resultado = $mysqli->query($sql);
	$id_insert = $mysqli->insert_id;
	
	if($_FILES["archivo"]["error"]>0 && $_FILES["archivo1"]["error"]>0 && $_FILES["archivo2"]["error"]>0 && $_FILES["archivo3"]["error"]>0 && $_FILES["archivo4"]["error"]>0 ){
		
		} else {
		
		$permitidos = array("application/pdf");
		
		if(in_array($_FILES["archivo"]["type"], $permitidos) && $_FILES["archivo"]["size"]){
		
			
			$ruta = 'files/'.$id_insert.'/';
			$archivo = $ruta.$_FILES["archivo"]["name"];
		
			if(!file_exists($ruta)){
				mkdir($ruta);
			}
			
			if(!file_exists($archivo){
				
				$resultado = @move_uploaded_file($_FILES["archivo"]["tmp_name"], $archivo);

				
				if($resultado&&$resultado1){
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




	if($_FILES["archivo1"]["error"]>0){
		
	} else {
	
	$permitidos = array("application/pdf");
	
	
	if(in_array($_FILES["archivo1"]["type"], $permitidos) && $_FILES["archivo"]["size"]){
		
		$ruta = 'files/'.$id_insert.'/';
		$archivo = $ruta.$_FILES["archivo1"]["name"];
		
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
			
			<div class="row text-center">
				<?php if($resultado) { ?>
					<h3>REGISTRO GUARDADO</h3>
					<?php } else { ?>
					<h3>ERROR AL GUARDAR</h3>
				<?php } ?>
			</div>
			<div class="row text-center">
				<a href="index.php" class="btn btn-primary">Regresar</a>
				
			</div>
		</div>
	</div>
</body>
</html>

<?php
require 'conexion.php';

?>
<html lang="es">

<!--CSS Boostrap-->
<link rel="stylesheet" href="bootstrap.min.css">
<!-- CSS -->
<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-theme.css" rel="stylesheet">
<link href="css/jquery.dataTables.min.css" rel="stylesheet">
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/fontawesome.js"></script>

<script>
	$(document).ready(function() {
		$('#mitabla').DataTable({
			"order": [
				[0, "asc"]
			],
			"language": {
				"lengthMenu": "Mostrar _MENU_ registros por pagina",
				"info": "Mostrando pagina _PAGE_ de _PAGES_",
				"infoEmpty": "No hay registros disponibles",
				"infoFiltered": "(filtrada de _MAX_ registros)",
				"loadingRecords": "Cargando...",
				"processing": "Procesando...",
				"search": "Buscar:",
				"zeroRecords": "No se encontraron registros coincidentes",
				"paginate": {
					"next": "Siguiente",
					"previous": "Anterior"
				},
			},
			"bProcessing": true,
			"bServerSide": true,
			"sAjaxSource": "server_process.php"
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


	<div class="container">
		



		<br>

		<div class="table-responsive-sm">
			<table class="display table table-bordered" id="mitabla">
				<thead>
					<tr>
						<th>Folio</th>
						<th>Nombre del alumno</th>
						<th>Telefono</th>
						<th>Ver formato</th>
						<th>Eliminar</th>

					</tr>
				</thead>

				<tbody>

				</tbody>
			</table>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="confirm-delete" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Eliminar Registro</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					¿Desea eliminar este registro?
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<a class="btn btn-danger btn-ok">Eliminar</a>
				</div>
			</div>
		</div>
	</div>

	<script>
		$('#confirm-delete').on('show.bs.modal', function(e) {
			$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));

			$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
		});
	</script>

</body>

</html>
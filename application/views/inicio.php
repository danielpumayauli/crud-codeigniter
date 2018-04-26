<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Peliculas</title>
	<!-- Latest compiled and minified CSS -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1>Gestor de Películas</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">Agregar Peliculas</div>
					<div class="panel-body">
						<form method="post" action="<?= base_url('peliculasController/guardar')?>">
							<!---->
							<div class="col-md-12 form-group input-group">
								<label for="" class="input-group-addon">id</label>
							<input type="text" class="form-control" name="idPelicula"> 
							</div>
							<!---->
							<div class="col-md-12 form-group input-group">
								<label for="" class="input-group-addon">Título</label>
							<input type="text" class="form-control" name="titulo"> 
							</div>
							<div class="col-md-12 form-group input-group">
								<label for="" class="input-group-addon">Resumen</label>
							<input type="text" class="form-control" name="resumen"> 
							</div>
							<div class="col-md-12 form-group input-group">
								<label for="" class="input-group-addon">Año</label>
							<input type="text" class="form-control" name="ano"> 
							</div>
							<div class="col-md-12 form-group input-group">
								<label for="" class="input-group-addon">País</label>
							<input type="text" class="form-control" name="pais"> 
							</div>
							<div class="col-md-12 form-group input-group">
								<label for="" class="input-group-addon">Protagonistas</label>
							<textarea name="protagonistas" id=""  class="form-control"></textarea>
							</div>
							<div class="col-md-12 text-center">
								<a href="<?= base_url("peliculasController/guardar/0")?>" class="btn btn-primary">Nueva Película</a>
							<button type="submit" class="btn btn-success">Guardar Película</button>
							</div>

						</form>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading">Peliculas Agregadas</div>
					<div class="panel-body">
						<table class="table table-hover table-sriped">
							<thead>
								<th>Id</th>
								<th>Titulo</th>
								<th>Resumen</th>
								<th>Pais</th>
								<th>Protagonistas</th>
								<th></th>
							</thead>
							<tbody>
								<?php 
									$CI =& get_instance();
									$peliculas = $CI->db->get('peliculas')->result_array();
									//var_dump($peliculas);

									foreach ($peliculas as $pelicula) {
									  	echo "<tr>
									  					<td>{$pelicula['id']}</td>
									  					<td>{$pelicula['titulo']}</td>
									  					<td>{$pelicula['resumen']}</td>
									  					<td>{$pelicula['ano']}</td>
									  					<td>{$pelicula['pais']}</td>
									  					<td>{$pelicula['protagonistas']}</td>
														<tr>
									  	";
									  }  
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	

	<script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>
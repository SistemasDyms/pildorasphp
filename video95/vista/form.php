<div class="col-md-6 createArt">
		<h2>Creacion de Noticias</h2>
		<form action="insertar.php" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label for="titulo">Titulo del Articulo</label>
				<input type="text" name="titulo" id="titulo" class="form-control">	
			</div>
			<div class="form-group">
				<label for="articulo">Artículo</label>
				<textarea rows="10" cols="76" id="articulo" name="articulo"></textarea>	
			</div>
			<input type="hidden" name="MAX_IMG" value="2097152">
			<div class="form-group">
				<label for="img">Imagen</label>
				<input type="file" name="img" id="img" class="form-control">	
			</div>
			<input type="submit" name="enviar" class="btn btn-success btn-lg" Value="Enviar Artículo" >

		</form>	
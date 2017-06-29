<table class="table table-bordered table-hover text-center">
					<tr class="success">
						<td>ID</td>
						<td>Nombre</td>    
						<td>Apellido</td>
						<td>Direccion</td>
						<td>Eliminar</td>
						<td>Editar</td>
					</tr>
					<?php foreach ($matrizpersonas as $valor):?>
				<tr>
						<td><?php echo $valor["id"];?></td>
						<td><?php echo $valor["nombre"];?></td>
						<td><?php echo $valor["apellido"];?></td>
						<td><?php echo $valor["direccion"];?></td>
						<td ><a href="delete.php?deleteID=<?php echo $valor->id;?>"><i class="icon-x"></i></a></td>
						<td ><a href="update.php?updateID=<?php echo $valor->id;?>"><i class="icon-wrench"></i></a></td>
				</tr>
				<?php			
					endforeach;
				?>	
				<form class="form-horizontal"  method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
				<tr>
						<td>
							
						</td>
						<td>
							<div class="form-group">
								<label for="nombre"></label>
								<input type="text"  class="form-control" autofocus name="nombre" id="nombre">
							</div>
						</td>
						<td>
							<div class="form-group">
								<label for="apellido"> </label>
								<input type="text" class="form-control"  name="apellido" id="apellido">
							</div>
						</td>
						<td>
							<div class="form-group">
								<label for="Dir"> </label>
								<input type="text" class="form-control" name="dir" id="Dir">
							</div>
						</td>
						<td>
						<div class="form-group">
								<label for="Dir"> </label>
								<input type="submit" class="form-control btn btn-success" name="insertar" id="enviar" value="Registrar" >
							</div>
						</td>
				</tr>
				</form>
				</table>
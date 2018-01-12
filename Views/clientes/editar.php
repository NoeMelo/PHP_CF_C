<div class="box-principal">
<h3 class="titulo">Editar estudiante <?php echo $datos['NOMBRE']; ?><hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Editar estudiante</h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-2">
	  		</div>
	  		<div class="col-md-9">
	  			<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
				    <div class="form-group">
							<input  value="<?php echo $datos['ID_CLIENTE'] ?>" name="id_cliente" type="hidden" required>
				      <label for="inputEmail" class="control-label">Nombre</label>
				        <input class="form-control" value="<?php echo $datos['NOMBRE'] ?>" name="nombre" type="text" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Apllidos</label>
				        <input class="form-control" value="<?php echo $datos['APELLIDOS'] ?>" name="apellidos" type="text" required>
				    </div>
            <div class="form-group">
				      <label for="inputEmail" class="control-label">Edad</label>
				        <input class="form-control" value="<?php echo $datos['EDAD'] ?>" name="edad" type="number" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Correo</label>
				        <input class="form-control" value="<?php echo $datos['CORREO'] ?>" name="correo" type="text" required>
				    </div>

				    <div class="form-group">
				    	 <button type="submit" class="btn btn-success">Guardar</button>
				        <button type="reset" class="btn btn-warning">Borrar</button>
				    </div>
				</form>
	  		</div>
	  	</div>
	  </div>
	</div>
</div>

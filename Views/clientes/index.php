<div class="box-principal">
<h3 class="titulo">Listado de Estudiantes<hr></h3>
	<div class="panel panel-success">
		<div class="panel-heading">
			<h3 class="panel-title">Listado de clientes</h3>
		</div>
		<div class="panel-body">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>N°</th>
						<th>Id</th>
						<th>Nombre</th>
						<th>Apellidos</th>
						<th>Edad</th>
						<th>Correo</th>
						<th>Acción</th>
					</tr>
				</thead>
				<tbody>
					<tr>
					<?php $numero = 1 ?>
					<?php while($row = mysqli_fetch_array($datos)){ #$datos = $clientes->index(); ?>
						<td> <?php echo $numero++ ?> </td>
						<td><?php echo $row['ID_CLIENTE']; ?></td>
						<td><a href="<?php echo URL;?>clientes/ver/<?php echo $row['ID_CLIENTE']?>"><?php echo $row['NOMBRE']; ?></a></td>
						<td><?php echo $row['APELLIDOS']; ?></td>
						<td><?php echo $row['EDAD']; ?></td>
						<td><?php echo $row['CORREO']; ?></td>
						<td>
							<a class="btn btn-warning" href="<?php echo URL; ?>clientes/editar/<?php echo $row['ID_CLIENTE'];?>"> Editar</a>
							<a class="btn btn-danger" href="<?php echo URL; ?>clientes/eliminar/<?php echo $row['ID_CLIENTE'];?>"> Eliminar</a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>

	</div>
</div>

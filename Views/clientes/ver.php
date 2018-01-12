<div class="box-principal">
<h3 class="titulo"> Cliente <?php echo $datos["NOMBRE"]; ?><hr></h3>
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Perfil del clientes <?php echo $datos["NOMBRE"]; ?><b></b></h3>
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-9">
          <ul class="list-group">
            <li class="list-group-item">
              <b>Nombre: </b> <?php echo $datos["NOMBRE"]; ?>
            </li>
            <li class="list-group-item">
              <b>Apellidos: </b> <?php echo $datos["APELLIDOS"]; ?>
            </li>
            <li class="list-group-item">
              <b>Edad: </b> <?php echo $datos["EDAD"]; ?>
            </li>
            <li class="list-group-item">
              <b>Correo: </b> <?php echo $datos["CORREO"]; ?>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

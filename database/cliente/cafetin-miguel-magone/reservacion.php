<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de reserva</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="css/reservacion.css">
</head>
<body>
  <?php
  include('../../admin/php/modelo/conexion.php');
  session_start();

  if(!isset($_SESSION["usuario"])){
    header("location:login/iniciarsesion_cliente.php");
  }
    //MOSTRAR SOLO LOS DATOS DEL USUARIO LOGUEADO
  $iduser = $_SESSION["usuario"];
  $query = "select * from clientes where cliente = '$iduser'";
  $resultado = mysqli_query($conn, $query);
    //MOSTRAR MENUS
  $queryM = "select * from menu_miguelmagone";
  $resultadoM = mysqli_query($conn, $queryM);
  ?>
  <div class="contenedor">
    <div class="header-box">
      <h1>Bienvenido <?php foreach ($resultado as $row) { ?><?php echo utf8_encode($row['nombre']); echo ' '; echo utf8_encode($row['apellido']); ?><?php } ?></h1>
    </div><br>
    <div class="form">
      <form action="reservar.php" method="post"
      enctype="multipart/form-data">
      <div class="mb-3">
        <label class="form-label">Usuario:</label>
        <input name="usuario" type="text" class="form-control" value="<?php foreach ($resultado as $row) { ?><?php echo utf8_encode($row['cliente']); ?><?php } ?>" readonly required>
      </div>
      <div class="mb-3">
        <label class="form-label">Nombres:</label>
        <input name="nombre" type="text" class="form-control" value="<?php foreach ($resultado as $row) { ?><?php echo utf8_encode($row['nombre']); ?><?php } ?>" readonly required>
      </div>
      <div class="mb-3">
        <label class="form-label">Apellidos:</label>
        <input name="apellido" type="text" class="form-control" value="<?php foreach ($resultado as $row) { ?><?php echo utf8_encode($row['apellido']); ?><?php } ?>" readonly required>
      </div>
      <div class="mb-3">
        <label class="form-label">Carnet de estudiante/docente:</label>
        <input name="carnet" type="number" class="form-control" value="<?php foreach ($resultado as $row) { ?><?php echo $row['carnet']; ?><?php } ?>" readonly required>
      </div>
      <div class="mb-3">
        <label class="form-label">Grado:</label><br>
        <input name="grado" type="text" class="form-control" value="<?php foreach ($resultado as $row) { ?><?php echo $row['grado']; ?><?php } ?>" readonly required>
      </div>
      <div class="mb-3">
        <label class="form-label">Sección:</label><br>
        <input name="seccion" type="text" class="form-control" value="<?php foreach ($resultado as $row) { ?><?php echo $row['seccion']; ?><?php } ?>" readonly required>
      </div>
      <div class="mb-3">
        <label class="form-label">Especialidad:</label><br>
        <input name="especialidad" type="text" class="form-control" value="<?php foreach ($resultado as $row) { ?><?php echo utf8_encode($row['especialidad']); ?><?php } ?>" readonly required>
      </div>
      <div class="mb-3">
        <label class="form-label">Plato:</label><br>
        <select name="plato" class="form-select" required>
          <?php foreach ($resultadoM as $row) { ?>
            <option><?php echo $row['nombre']; ?> - $<?php echo $row['precio']; ?></option>
          <?php } ?>
        </select>
      </div>
      <div class="bottom">
          <!--Deshabilitar boton-->  <input class="form-control" type="submit" value="Realizar reservación" id="btnRegistrar" name="reservacion">
      </div>
      <div class="bottom">
        <a href="login/cierre_sesion.php">
          <input class="form-control" type="button" value="Cerrar Sesión" />
        </a>
      </div>
    </form>
  </div>
</div>
</body>
</html>

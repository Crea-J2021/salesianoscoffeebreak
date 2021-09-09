<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/administracion.css">
    <script src="https://kit.fontawesome.com/ec3da690e2.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="contenedor">

    <div class="header-box">
      <h1>Cafetería Miguel Magone</h1>
    </div>
    <div>
      <a href="../cafetin.php">
      <input id="regresar" class="form-control" type="button" value="Regresar"/></a>
    </div>

    <div class="box admin">
      <a href="menu.php">
      <div>
        <img src="media/menu.png" alt="">
      </div>
      <h2>Ver menú del día</h2>
      </a>
    </div>

    <div class="box cliente">
        <!--Deshabilitar boton-->  <a href="login/iniciarsesion_cliente.php">
      <div>
        <img src="media/pedido-en-linea.png" alt="">
      </div>
      <h2>Hacer una reservación</h2>
      </a>
    </div>

    <div class="box admin">
        <a href="login/iniciarsesion_cliente_reser.php">
          <div>
            <img src="../media/pedido-en-linea.png" alt="">
          </div>
          <h2>Ver mis reservaciones</h2>
        </a>
      </div>

  </div>
</body>
</html>

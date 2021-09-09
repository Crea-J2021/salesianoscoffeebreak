<?php
include('../../admin/php/modelo/conexion.php');
$query = "select * from menu_lauravicunia";
$resultado = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Almuerzos del día</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/menu.css">
</head>
<body>
    <div class="contenedor">
        <div class="header-box">
            <h1>Almuerzos del día</h1>
        </div>
        <div class="bottom">
    <a href="administracion-cliente.php">
      <input id="regresar" class="form-control" type="button" value="Regresar"/></a>
    </div>
        <div class="menus">
            <?php foreach ($resultado as $row) { ?>
                <div class="menu">
            <div>
             <img src="../../admin/cafetin-laura-vicuña/img-menu/<?php echo $row['imagen']; ?>" alt="">
            </div>
            <table>
                <tr>
                    <td class="td-head">Nombre:</td>
                    <td><?php echo $row['nombre']; ?></td>
                </tr>
                <tr>
                    <td class="td-head">Descripción:</td>
                    <td><?php echo $row['descripcion']; ?></td>
                </tr>
                <tr>
                    <td class="td-head">Precio:</td>
                    <td>$<?php echo $row['precio']; ?></td>
                </tr>
                <tr>
                    <td class="td-head">Cafetin:</td>
                    <td><?php echo $row['cafetin']; ?></td>
                </tr>
            </table>
            <div>
                <a class="btn" href="login/iniciarsesion_cliente.php">
                  <!--Deshabilitar boton-->  <input id="reservar" class="form-control" type="button" value="Reservar"/></a>
            </div>
            <hr>
        </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>

<?php
    include('modelo/conexion.php');
    $query = "select * from menu_donbosco";
    $resultado = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver menus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/ver-menus.css">
    <script src="https://kit.fontawesome.com/ec3da690e2.js" crossorigin="anonymous"></script>
</head>
<body>
<?php 
    session_start();

    if(!isset($_SESSION["usuario"])){
        header("location:../iniciarsesion_admin.php"); 
    }
?>
    <div class="contenedor">
        <div class="header-box">
            <h1>Ver almuerzos</h1>
        </div>
        <div class="menus">
            <?php foreach ($resultado as $row) { ?>
        <div class="menu">
            <div>
             <img src="../img-menu/<?php echo $row['imagen']; ?>" alt="">
            </div><br>
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
                <a class="btn" href="controlador/eliminar-menu.php?op=delete&imagen=<?php echo $row['imagen'] ?>">
                <input id="eliminar" class="form-control" type="button" value="Eliminar"/></a>
            </div>
            <hr>
        </div>
            <?php } ?>
        </div>
        <div class="eliminar-todo">
            <a href="controlador/eliminar-todos.php?op=delete">
            <input id="eliminar-todo" class="form-control" type="button" value="Eliminar todos los menús"/>
            </a>
        </div>
    </div>
    <div class="bottom">
    <a href="administracion.php">
      <input id="regresar" class="form-control" type="button" value="Regresar"/>
      <a href="registrar-menu.php">
        <input id="menus" class="form-control" type="button" value="Registrar otro menú" />
        </a>
    </div>
    <div class="bottom">
          <a href="../cierre_sesion.php">
          <input class="form-control" type="button" value="Cerrar Sesión" />
          </a>
    </div>
</body>
</html>
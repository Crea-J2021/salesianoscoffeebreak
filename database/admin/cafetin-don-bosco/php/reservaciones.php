<?php
    include('modelo/conexion.php');
    $query = "select * from reservacion_db";
    $resultado = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservaciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/reservaciones.css">
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
            <h1>Historial de reservaciones</h1>
        </div>
        <div class="bottom">
        <a href="administracion.php">
        <input id="regresar" class="form-control" type="button" value="Regresar"/></a>
    </div>
        <div class="reservaciones">
            <?php foreach ($resultado as $row) { ?>
        <div class="reservacion">
            <table>
                    <tr>
                        <td class="td-head">Nombre:</td>
                        <td><?php echo $row['nombre']; ?> <?php echo $row['apellido']; ?></td>
                    </tr>
                    <tr>
                        <td class="td-head">Número de carnet:</td>
                        <td><?php echo $row['carnet']; ?></td>
                    </tr>
                    <tr>
                        <td class="td-head">Grado y Sección:</td>
                        <td><?php echo $row['grado']; ?> <?php echo $row['seccion']; ?></td>
                    </tr>
                    <tr>
                        <td class="td-head">Especialidad:</td>
                        <td><?php echo $row['especialidad']; ?></td>
                    </tr>
                    <tr>
                        <td class="td-head">Plato reservado:</td>
                        <td><?php echo $row['plato']; ?></td>
                    </tr>
            </table>
            <div>
                <a href="controlador/entregado.php?op=delete&nombre=<?php echo $row['nombre'] ?>">
                <input id="entregado" class="form-control" type="button" value="Marcar como entregado."/>
                </a>
            </div>
            <hr>
        </div>
            <?php } ?>
        </div>
        <div class="eliminar-todos">
            <a href="controlador/eliminar-reservaciones.php?op=delete">
            <input id="eliminar-todos" class="form-control" type="button" value="Eliminar todas las reservaciones."/>
            </a>
        </div>
        <div class="bottom">
          <a href="../cierre_sesion.php">
          <input class="form-control" type="button" value="Cerrar Sesión" />
          </a>
    </div>
    </div>
</body>
</html>
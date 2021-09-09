<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/misreservaciones.css">
    <title>Mis reservaciones</title>
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
    //MOSTRAR RESERVACION DB
    $queryRdb = "select * from reservacion_db where usuario = '$iduser'";
    $resultadoRdb = mysqli_query($conn, $queryRdb);    
    ?>
    <div class="contenedor">
        <div class="header-box">    
            <h1>Mis Reservaciones</h1>         
        </div>
        
        <div class="reserDS">
            <h4>Reservaciones Cafetería Don Bosco</h4>
            <?php foreach ($resultadoRdb as $row) { ?>
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
                </div>
                <hr>
            <?php } ?>
        </div>

        <div class="bottom">
            <a href="login/cierre_sesion_reser.php">
                <input class="form-control" type="button" value="Cerrar Sesión" />
            </a>
        </div>
        
    </div>
</body>
</html>
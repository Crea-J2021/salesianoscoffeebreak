<?php
include('../../admin/php/modelo/conexion.php');

if(isset($_POST['reservacion'])){
    $usuario = $_POST['usuario'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $carnet = $_POST['carnet'];
    $grado = $_POST['grado'];
    $seccion = $_POST['seccion'];
    $especialidad = $_POST['especialidad'];
    $plato = $_POST['plato'];

    if(isset($usuario) && $usuario != "" && isset($nombre) && $nombre != "" && isset($apellido) && $apellido != "" && isset($carnet) && $carnet != "" && isset($grado) && $grado != ""
    && isset($seccion) && $seccion != "" && isset($especialidad) && $especialidad != "" && isset($plato) && $plato != ""){
            $query = "INSERT INTO reservacion_mm (usuario, nombre, apellido, carnet, grado, seccion, especialidad, plato) values('$usuario', '$nombre', '$apellido', '$carnet', '$grado', '$seccion', '$especialidad', '$plato')";
            $resultado = mysqli_query($conn,$query);
            ?>
            <script>
            alert('La reservación de su plato se ha realizado con exito.');
            window.location.href='misreservaciones.php';
            </script>
        <?php
    }
}
?>

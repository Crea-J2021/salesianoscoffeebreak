<?php 
require_once('../modelo/conexion.php');

if($_GET['op']=="delete"){
    $nombre = $_GET['nombre'];
    $sql = "delete from reservacion_ma where nombre = '$nombre'";
    $result = mysqli_query($conn, $sql);
    if($result){
        ?>
        <script>
            alert('El plato ha sido entregado.');
            window.location.href='../reservaciones.php?deleted';
        </script>
        <?php
        unlink("../../../media/imagenes-menus/$eliminar");
    }else{
        ?>
        <script>
            alert('No pudo realizarse la acción.');
            window.location.href='../reservaciones.php?deleted';
        </script>
        <?php
    }
}
?>
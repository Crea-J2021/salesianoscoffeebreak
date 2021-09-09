<?php 
require_once('../modelo/conexion.php');

if($_GET['op']=="delete"){
    $nombre = $_GET['nombre'];
    $sql = "delete from reservacion_lv where nombre = '$nombre'";
    $result = mysqli_query($conn, $sql);
    if($result){
        ?>
        <script>
            alert('Reservacion eliminada correctamente.');
            window.location.href='../reservaciones.php?deleted';
        </script>
        <?php
        unlink("../../../media/imagenes-menus/$eliminar");
    }else{
        ?>
        <script>
            alert('No pudo eliminarse la reservacion');
            window.location.href='../reservaciones.php?deleted';
        </script>
        <?php
    }
}
?>
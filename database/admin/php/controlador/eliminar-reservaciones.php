<?php 
require_once('../modelo/conexion.php');

if($_GET['op']=="delete"){
    $sql = "delete from reservaciones";
    $result = mysqli_query($conn, $sql);
    if($result){
        ?>
        <script>
            alert('Todas las reservaciones han sido eliminadas.');
            window.location.href='../reservaciones.php?deleted';
        </script>
        <?php
        unlink("../../../media/imagenes-menus/$eliminar");
    }else{
        ?>
        <script>
            alert('Los menús no pudieron eliminarse.');
            window.location.href='../reservaciones.php?deleted';
        </script>
        <?php
    }
}
?>
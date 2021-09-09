<?php 
require_once('../modelo/conexion.php');

if($_GET['op']=="delete"){
    $eliminar = $_GET['imagen'];
    $sql = "delete from menu_donrua where imagen = '$eliminar'";
    $result = mysqli_query($conn, $sql);
    if($result){
        ?>
        <script>
            alert('El menú ha sido eliminado.');
            window.location.href='../ver-menu.php?deleted';
        </script>
        <?php
        unlink("../../img-menu/$eliminar");
    }else{
        ?>
        <script>
            alert('El producto no pudo eliminarse');
            window.location.href='../ver-menu.php?deleted';
        </script>
        <?php
    }
}
?>
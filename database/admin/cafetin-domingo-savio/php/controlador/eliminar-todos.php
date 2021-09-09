<?php 
require_once('../modelo/conexion.php');

if($_GET['op']=="delete"){
    $sql = "delete from menu_domingosavio";
    $result = mysqli_query($conn, $sql);
    if($result){
        ?>
        <script>
            alert('Todos los menús han sido eliminados.');
            window.location.href='../ver-menu.php?deleted';
        </script>
        <?php
        unlink("../../img-menu/$eliminar");
    }else{
        ?>
        <script>
            alert('Los menús no pudieron eliminarse.');
            window.location.href='../ver-menu.php?deleted';
        </script>
        <?php
    }
}
?>
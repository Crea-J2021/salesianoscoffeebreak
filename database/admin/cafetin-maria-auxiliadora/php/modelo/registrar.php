<?php 
include('conexion.php');

if(isset($_POST['Registrar'])){
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $desc = $_POST['descripcion'];
    $cafetin = $_POST['cafetin'];
    $imagen = $_FILES['imagen']['name'];

    if(isset($imagen) && $imagen != "" && isset($nombre) && $nombre != "" && isset($precio) && $precio != "" && isset($desc) && $desc != "" && isset($cafetin) && $cafetin != ""){
        $tipo = $_FILES['imagen']['type'];
        $temp  = $_FILES['imagen']['tmp_name'];

       if( !((strpos($tipo,'gif') || strpos($tipo,'jpeg') || strpos($tipo,'webp')))){
          $_SESSION['mensaje'] = 'Solo se permiten archivos jpeg, gif, webp';
          $_SESSION['tipo'] = 'danger';
          header('location:../registrar-menu.php');
       }else{
         $query = "INSERT INTO menu_mariaauxiliadora (imagen, nombre, precio, descripcion, cafetin) values('$imagen', '$nombre', '$precio', '$desc', '$cafetin')";
         $resultado = mysqli_query($conn,$query);
         if($resultado){
              move_uploaded_file($temp,'../../img-menu/'.$imagen);   
             $_SESSION['mensaje'] = 'El producto se ha registrado correctamente';
             $_SESSION['tipo'] = 'success';
             header('location:../ver-menu.php');
         }else{
             $_SESSION['mensaje'] = 'Ocurrio un error en el servidor';
             $_SESSION['tipo'] = 'danger';
         }
       }
    }
}
?>
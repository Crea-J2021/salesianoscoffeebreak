<?php
include('modelo/conexion.php');
$query = "select * from menu_domingosavio";
$resultado = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/ec3da690e2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/registrar-menu.css">
  <!--VALIDACION DE CANTIDAD DE CARACTERES EN EL TEXTAREA-->
  <script type="text/javascript">
    contenido_textarea = ""
    num_caracteres_permitidos = 50

    function valida_longitud(){
     num_caracteres = document.forms[0].texto.value.length
     if (num_caracteres > num_caracteres_permitidos) {
      document.forms[0].texto.value = contenido_textarea
    }else{
      contenido_textarea = document.forms[0].texto.value
    }

    if (num_caracteres >= num_caracteres_permitidos){
      document.forms[0].caracteres.style.color="#ff0000";
    }else{
      document.forms[0].caracteres.style.color="#000000";
    }
    cuenta()
  }

  function cuenta(){
   document.forms[0].caracteres.value=document.forms[0].texto.value.length
 }
</script>
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
      <h1>Registrar un nuevo menú</h1>
    </div>
    <div class="form">
      <form action="modelo/registrar.php" method="post"
      enctype="multipart/form-data">
      <table>
        <tr>
          <td>Nombre del plato:</td>
          <td><input class="form-control" type="text" name="nombre" required></td>
        </tr>
        <tr>
          <td>Descripción:</td>
          <td><textarea class="form-control" cols="25" rows="5" name="descripcion" onKeyDown="valida_longitud()" onKeyUp="valida_longitud()" required></textarea></td>
        </tr>
        <tr>
          <td>Precio del producto:</td>
          <td><input class="form-control" type="text" name="precio" required></td>
        </tr>
        <tr>
          <td>Cafetin:</td>
          <td>
            <select name="cafetin" class="form-select" required>
              <!--<option>Cafetin Don Bosco</option>-->
              <option>Cafetin Domingo Savio</option>
              <!--<option>Cafetin María Auxiliadora</option>-->
            </select></td>
          </tr>
          <tr>
            <td>Imagen del producto:</td>
            <td><input class="form-control" type="file" name="imagen" required></td>
          </tr>
          <tr>
            <td></td>
            <td><input class="form-control" type="submit" value="Registrar" id="btnRegistrar" name="Registrar"></td>
          </tr>
        </table>
      </form>
    </div>
    
    <div class="bottom">
      
      <a href="administracion.php">
        <input id="regresar" class="form-control" type="button" value="Regresar"/>
        
        <a href="ver-menu.php">
          <input id="menus" class="form-control" type="button" value="Ver menús" />
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
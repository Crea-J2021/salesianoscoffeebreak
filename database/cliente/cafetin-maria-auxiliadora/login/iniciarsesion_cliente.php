<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link rel="stylesheet" type="text/css" href="../../../../css/style.css">
    <title>Inicio de sesión</title>
</head>
<body>
    <img class="wave" src="../../media/wave.png">
	<div class="container">
		<div class="img">
			<img src="../../media/bg.svg">
		</div>
		<div class="login-content">
			<form action="comprobacion_sesion.php" method="post">
				<img src="../../media/avatar.svg">
				<h2 class="title">Bienvenido/a</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Nombre de usuario</h5>
           		   		<input type="text" class="input" name="login">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Contraseña</h5>
           		    	<input type="password" class="input" name="password">
            	   </div>
            	</div>
            	<a href="https://forms.gle/pfEW7Zb1pHbstffX9">¿Ha olvidado la contraseña?</a>
            	<input type="submit" class="btn" value="Iniciar sesión">
				<a class="btn" href="../administracion-cliente.php">
					<input type="button" class="btn" value="Regresar">
				</a>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
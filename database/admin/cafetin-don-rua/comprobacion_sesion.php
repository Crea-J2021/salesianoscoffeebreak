<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificando</title>
</head>
<body>
    <?php
    try{
        $base= new PDO("mysql:host=localhost; dbname=salesianoscoffeebreak", "root", ""); 
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

        $sql="SELECT * FROM administradores WHERE administrador= :login AND password= :password"; 

        $resultado=$base->prepare($sql); 

        $login=htmlentities($_POST["login"]); 
        $password=htmlentities($_POST["password"]); 

        $password =hash('sha512', $password);

        $resultado->bindValue(":login", $login); 
        $resultado->bindValue(":password", $password);
        
        $resultado->execute(); 

        $numero_registro=$resultado->rowCount(); 

        if($numero_registro!=0){
            session_start(); 
            $_SESSION["usuario"]=$_POST["login"]; 

            header("location:php/administracion.php");
        }else{
            header("location:iniciarsesion_admin.php"); 
        }
    }catch(Exception $e){
        die("Error: ". $e->getMessage()); 
    }
    
    
    ?>
</body>
</html>
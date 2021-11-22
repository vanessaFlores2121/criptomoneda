<!DOCTYPE html>
<html lang="en">
    <head>
        <!--NOMBRE: Vanessa Esmeralda Flores Cervantes MATRICULA: ES172004305-->
        <meta charset="UTF-8">
        <title>SITIO WEB PRIVADA </title>
        <link rel="stylesheet" href="css/estilos.css">
        <link rel="stylesheet" href="css/estiloprivada.css">
   

   <!--cabecera-->
    
        
    </header>
    <body>
            <!--Divicion registro FORMULARIO-->
                <div class= "registro">
                    <form action="#" method="POST">
                                <P>.</P><!--Nombre -->
                                <h1>!!Suscribete!!</h1>
                                <label for="usuario">Usuario :</label> 
                                <br>
                                <input type="text" placeholder="inserta usuario" name="usuario" required>
                                <P>.</P><!--contraseña-->
                                <label for="contrasena">Contraseña :</label> 
                                <br>
                                <input type="pass" placeholder="Contrasena" name="contrasena" required>
                                  <!--BOTON-->
                                <input type="submit" value="Suscribirse" name ="btnIngresar" action="privada.html"  >
                                <br>
                                <!--REGISTRAR-->
                                <a href="index.html"> Regresar </a>
                    </form>
                </div>
                                <?php
                                include("Alta_Total.php");
                                ?>
</body>
</html>
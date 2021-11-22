<!DOCTYPE html>
<html lang="en">
    <head>
        <!--NOMBRE: Vanessa Esmeralda Flores Cervantes MATRICULA: ES172004305-->
        <meta charset="UTF-8">
        <title>ALtA CRIPTOMONEDAS | Vanessa Flores</title>
        <link rel="stylesheet" href="css/estilos.css">
        <link rel="stylesheet" href="css/estiloprivada.css">

   </head>
<body>
  
    <div class= "registro">
        <form action="#" method="POST">

                    <h1>!!DATOS GENERALES ELIMINAR CRIPTOMONEDA!!</h1>

                    <P>.</P><!--ELIGE ID CRIPTOMONEDA A ELIMINAR -->
                    <label for="criptomoneda"> ELIGE ID CRIPTOMONEDA A ELIMINAR:</label> 
                    <br>
                    <input type="text" placeholder="Introduce ID Cripto" name="id_transaccion" required>
                    <br><br><br>
                 
                    <br><br><br><br><br>
                     <!--BOTONES-->
                    <input type="submit" value="Eliminar" name="btnEliminarCripto" ><br>
                    <br><br><br><br><br><br>
                   
                    <!--REGISTRAR-->
                    <br><br>
                    <center><a href="index.html"> Regresar al inicio</a></center>
                    <!--REGISTRAR-->
                    <br><br>
                    <center><a href="mostrar_cripto.php"> Observar Tabla Actualizada</a></center>

        </form>
    </div>
                    <?php
                    include("Alta_Total.php");
                    ?>
</body>
</html>
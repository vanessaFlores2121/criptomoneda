<!DOCTYPE html>
<html lang="en">
    <head>
        <!--NOMBRE: Vanessa Esmeralda Flores Cervantes MATRICULA: ES172004305-->
        <meta charset="UTF-8">
        <title>ALtA CRIPTOMONEDAS | Vanessa Flores</title>
        <link rel="stylesheet" href="css/estilos.css">
        <link rel="stylesheet" href="css/estiloprivada.css">

        <div class= "registro">
        <form action="#" method="POST">
                
   </head>
<body>

                    <h1>!!DATOS GENERALES MODIFICACION DE CRIPTOMONEDA!!</h1>
                    <P>.</P><!--ID CRIPTO-->
                    <label for="ID"> ID :</label> 
                    <br>
                    <input type="text" placeholder="MODIFICAR POR ID" name="id_cripto" >
                    <P>.</P><!--CRIPTOMONEDA -->
                    <label for="criptomoneda"> CRIPTOMONEDA :</label> 
                    <br>
                    <input type="text" placeholder="BTC,ETH,XRP,DOGE" name="criptomoneda" >
                    <P>.</P><!--TIPO DE TRANSACICION -->
                    <label for="transaccion"> TIPO DE TRANSACCION :</label> 
                    <br>
                    <input type="text" placeholder="compra o venta" name="transaccion">
                    <P>.</P><!--CANTIDAD DE CRIPTOMONEDA-->
                    <label for="criptomoneda">CANTIDAD DE CRIPTOMONEDA:</label> 
                    <br>
                    <input type="text" placeholder="Cantidad criptomoneda" name="cantidad_cripto">

                   <P>.</P><!--TIPO DE DE CAMBIO EN DOLARES-->
                    <label for="cambio_dolar">TIPO DE DE CAMBIO EN DOLARES:</label> 
                    <br>
                    <input type="text" placeholder="BTC=59000.00, ETC=3923.08, XRP=1.5597, DOGE=0.7021" name="cambio_dolar" >

                    <P>.</P><!--MONTO DE COMPRA O VENTA EN DOLARES-->

                     <label for="compra_venta_dolar">MONTO DE COMPRA O VENTA EN DOLARES:</label> 
                    <br>
                    <input type="text" placeholder="compra_venta_en_dolar" name="compra_venta_dolar" >
                    <br>
                    <P>.</P><!--COMISION-->
                    <label for="comision">COMISION:</label> 
                    <br>
                    <input type="text" placeholder="Comision" name="comision">
                    <br>
                    <P>.</P><!--VALOR REAL DE VENTA O COMPRA-->
                    <label for="valoreal">VALOR REAL DE VENTA O COMPRA</label> 
                    <br>
                    <input type="text" placeholder="Valor real" name="valoreal">-->
                 
                     <!--BOTONES-->
                    <input type="submit" value="Actualizar Datos" name="btnActualizarCripto" >
                    <br><br>
                   
                    <!--REGISTRAR-->
                    <a href="index.html"> Regresar al Inicio</a>

        </form>
                <?php
                       // $id_cripto = $_POST[]; //https://www.youtube.com/watch?v=izi4W6FIoj8&t=413s
                        $id_cripto = $_POST['id_transaccion'];
                        $cripto = $_POST['criptomoneda'];
                        $transaccion = $_POST['transaccion'];
                        $canti_cripto = $_POST['cantidad_cripto'];
                        $cambio_dolar = $_POST['cambio_dolar'];
                        $compra_venta_dolar = $_POST['compra_venta_dolar'];
                        $comision = $_POST['comision'];
                        $valorreal = $_POST['valoreal'];
                       


                ?>
        </body>
</html>
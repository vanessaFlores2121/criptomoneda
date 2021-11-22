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

                    <h1>!!DATOS GENERALES CRIPTOMONEDA!!</h1>

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
                    <br><br>
                    <!--BOTONES-->
                    <input type="submit" value="calcular" name="btncalcular">
                    <br><br><br><br><br><br><br><br><br><br><br><br>
                    <input type="submit" value="Registrar Todos los datos en BD" name="btnRegistrarCripto">
                    
                    <!-- <P>.</P>tIPO DE DE CAMBIO EN DOLARES
                    <label for="cambio_dolar">TIPO DE DE CAMBIO EN DOLARES:</label> 
                    <br>
                    <input type="text" placeholder="BTC=59000.00, ETC=3923.08, XRP=1.5597, DOGE=0.7021" name="cambio_dolar" >

                    

                    <P>.</P>MONTO DE COMPRA O VENTA EN DOLARES-->

                    <!-- <label for="compra_venta_dolar">MONTO DE COMPRA O VENTA EN DOLARES:</label> 
                    <br>
                    <input type="text" placeholder="compra_venta_en_dolar" name="compra_venta_dolar" >
                    <br>
                    <P>.</P>COMISION
                    <label for="comision">COMISION:</label> 
                    <br>
                    <input type="text" placeholder="Comision" name="comision">
                    <br>-->
                    <!--<P>.</P>VALOR REAL DE VENTA O COMPRA
                    <label for="valoreal">VALOR REAL DE VENTA O COMPRA</label> 
                    <br>
                    <input type="text" placeholder="Valor real" name="valoreal">-->
                 
                     <!--BOTONES
                    <input type="submit" value="Registrar" name="btnRegistrarCripto" >-->
                    <br><br>
                   
                    <!--REGISTRAR-->
                    <a href="index.html"> Regresar al Inicio</a>

        </form>
    </div>
                    <?php
                    if(isset($_POST['btncalcular']))
                    {
                          $cripto = trim($_POST['criptomoneda']);
                          $transaccion = trim($_POST['transaccion']);
                          $cantidad_cripto = trim($_POST['cantidad_cripto']);

                        if($_POST['criptomoneda'] == '' or $_POST['transaccion'] == '' or $_POST['cantidad_cripto'] == '')
                        {
                            echo 'Por favor llene los campos';
                        }
                        else
                        {
                            //TIPO DE DE CAMBIO EN DOLARES: 
                            $BTC = 59000.00;
                            $ETH = 3923.08;
                            $XRP = 1.5597;
                            $DOGE = 0.7021; 

                            //Monto de compra o venta en dólares:
                            
                            if($cripto == 'BTC')
                            {
                                $compra_venta_dolar = $cantidad_cripto * $BTC;

                                $tipo_cambio = $BTC;
                                echo'<center><h1>', 'El Valor de Monto de Compra o Venta de Dolares es: $', $compra_venta_dolar , '<h1></center>';
                                //echo'<center><h1>', 'BTC VALE $', $BTC, 'TIPO_CAMBIO VALE $', $tipo_cambio,'<h1></center>';

                                //COMISON
                                if($compra_venta_dolar <= 1000)
                                {
                                   $comision = 0; $comision2=0;
                                   $compra_venta_dolar2 = 0;

                                   $comision = $compra_venta_dolar * 5;
                                   $comision2 = $comision / 100;
                                   $compra_venta_dolar2 = $compra_venta_dolar + $comision2;
                                   echo '<center><h1>',' La comision total es: $', $compra_venta_dolar2 ,'</center>';

                                   //VALOR REAL
                                   $valorreal = $compra_venta_dolar2 - $comision2;
                                   echo '<center><h1>',' El valor Real es: $', $valorreal ,'</center>';
       
                                }
                                else
                                {
                                    $comision = $compra_venta_dolar * 1;
                                    $comision2 = $comision / 100;
                                    $compra_venta_dolar2 = $compra_venta_dolar + $comision2;
                                    echo '<center><h1>',' La comision total es: $', $compra_venta_dolar2 ,'</center>';

                                    //VALOR REAL
                                    $valorreal = $compra_venta_dolar2 - $comision2;
                                    echo '<center><h1>',' El valor Real es: $', $valorreal ,'</center>';
                                }

                            }
                          
                        
                            //MONEDA ETH
                           if($cripto == 'ETH')
                           {
                                $compra_venta_dolar = $cantidad_cripto * $ETH;
                                echo '<center><h1>','El Valor de Monto de Compra o Venta de Dolares es: $', $compra_venta_dolar ,'</center>';
                                $tipo_cambio = $ETH;
                                //COMISION
                                if($compra_venta_dolar <= 1000)
                                {
                                   $comision = 0; $comision2=0;
                                   $compra_venta_dolar2 = 0;

                                   $comision = $compra_venta_dolar * 5;
                                   $comision2 = $comision / 100;
                                   $compra_venta_dolar2 = $compra_venta_dolar + $comision2;
                                   echo '<center><h1>', ' La comision total es: $', $compra_venta_dolar2 ,'</center>';

                                   //VALOR REAL
                                   $valorreal = $compra_venta_dolar2 - $comision2;
                                   echo '<center><h1>', ' El valor Real es: $', $valorreal ,'</center>';
       
                                }
                                else
                                {
                                    $comision = $compra_venta_dolar * 1;
                                    $comision2 = $comision / 100;
                                    $compra_venta_dolar2 = $compra_venta_dolar + $comision2;
                                    echo '<center><h1>', ' La comision total es: $', $compra_venta_dolar2 ,'</center>';


                                    //VALOR REAL
                                    $valorreal = $compra_venta_dolar2 - $comision2;
                                    echo '<center><h1>',' El valor Real es: $', $valorreal ,'</center>';
                                }
                           }
                        
                           //MONEDA XRP
                           if($cripto == 'XRP')
                           {
                            $compra_venta_dolar = $cantidad_cripto * $XRP;
                                echo '<center><h1>','El Valor de Monto de Compra o Venta de Dolares es: $', $compra_venta_dolar ,'</center>';
                                $tipo_cambio = $XRP;

                                //COMISION
                                if($compra_venta_dolar <= 1000)
                                {
                                   $comision = 0; $comision2=0;
                                   $compra_venta_dolar2 = 0;

                                   $comision = $compra_venta_dolar * 5;
                                   $comision2 = $comision / 100;
                                   $compra_venta_dolar2 = $compra_venta_dolar + $comision2;
                                   echo '<center><h1>',' La comision total es: $', $compra_venta_dolar2 ,'</center>';

                                   //VALOR REAL
                                   $valorreal = $compra_venta_dolar2 - $comision2;
                                   echo '<center><h1>',' El valor Real es: $', $valorreal ,'</center>';
       
                                }
                                else
                                {
                                    $comision = $compra_venta_dolar * 1;
                                    $comision2 = $comision / 100;
                                    $compra_venta_dolar2 = $compra_venta_dolar + $comision2;
                                    echo '<center><h1>',' La comision total es: $', $compra_venta_dolar2 ,'</center>';

                                     //VALOR REAL
                                    $valorreal = $compra_venta_dolar2 - $comision2;
                                    echo '<center><h1>',' El valor Real es: $', $valorreal ,'</center>';
                                }
                           }
                           
                           //moneda DOGE
                           if($cripto == 'DOGE')
                           {
                            $compra_venta_dolar = $cantidad_cripto * $DOGE;
                                echo '<center><h1>','El Valor de Monto de Compra o Venta de Dolares es: $', $compra_venta_dolar ,'</center>';
                                $tipo_cambio = $DOGE;
                                //COMISION
                                if($compra_venta_dolar <= 1000)
                                {
                                   $comision = 0; $comision2=0;
                                   $compra_venta_dolar2 = 0;

                                   $comision = $compra_venta_dolar * 5;
                                   $comision2 = $comision / 100;
                                   $compra_venta_dolar2 = $compra_venta_dolar + $comision2;
                                   echo '<center><h1>',' La comision total es: $', $compra_venta_dolar2 ,'</center>';

                                   $valorreal = $compra_venta_dolar2 - $comision2;
                                   echo '<center><h1>',' El valor Real es: $', $valorreal ,'</center>';
       
                                }
                                else
                                {
                                    $comision = $compra_venta_dolar * 1;
                                    $comision2 = $comision / 100;
                                    $compra_venta_dolar2 = $compra_venta_dolar + $comision2;
                                    echo '<center><h1>',' La comision total es: $', $compra_venta_dolar2 ,'</center>';

                                    $valorreal = $compra_venta_dolar2 - $comision2;
                                    echo '<center><h1>',' El valor Real es: $', $valorreal ,'</center>';
                                }
                           }
                       
                        }
                        //BOTON REGISTRAR
                        
                             if(isset($_POST['btncalcular']))
                            {
                                include ("conexion.php");
                                $cripto = trim($_POST['criptomoneda']);
                                $transaccion = trim($_POST['transaccion']);
                                $canti_cripto = trim($_POST['cantidad_cripto']);
                            
                                $consulta = "INSERT INTO criptomoneda(criptomoneda,transaccion, cantidad_cripto, cambio_dolar,compra_venta_dolar,comision,valoreal) VALUES ('$cripto','$transaccion','$canti_cripto','$tipo_cambio','$compra_venta_dolar', '$compra_venta_dolar2', '$valorreal')";
                                $resultado = mysqli_query($conex,$consulta);
                              }
                                if ($resultado) {
                                    ?> 
                                    <script> alert('correcto'); </script>
                    
                                    <h3 class="ok">¡Te has inscripto correctamente!</h3>
                                <?php
                                } else {
                                    ?> 
                                    <script> alert('error'); </script>
                                    <h3 class="bad">¡Ups ha ocurrido un error!</h3>
                                <?php
                                } 
                        }
                    ?>
            

</body>
</html>
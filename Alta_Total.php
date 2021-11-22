<!--
    pagina para los registrados en la pagina web ALTA DE CADA UNO DE LOS BOTONES DE LOGIN Y SOCIOS SE VAN DIRECTO A LA BASE DE DATOS .
-->
<!-- VANESSA ESMERALDA FLORES CERVANTES Matricula: ES172004305 -->

<?php 

include ("conexion.php");

//login
if(isset($_POST["btnIngresar"]))
{

    if (strlen($_POST['usuario']) >= 1 && strlen($_POST['contrasena']) >= 1) 
    {
        $usuario = trim($_POST['usuario']);
        $contrasena = trim($_POST['contrasena']);
        $fechareg = date("d/m/y");
        $consulta = "INSERT INTO login(usuario, contrasena, fecha_reg) VALUES ('$usuario','$contrasena','$fechareg')";
        $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) 
        {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}


//BOTON DE ACTIVACION ALTAS DE criptomonedas OK
        //____________________________________________________________
      /*  if(isset($_POST['btnRegistrarCripto']))
        {
         
            include ("registro_cripto.php");

             $cripto = trim($_POST['criptomoneda']);
             $transaccion = trim($_POST['transaccion']);
             $canti_cripto = trim($_POST['cantidad_cripto']);
             $cambio_dolar = trim($_POST['cambio_dolar']);


            $CV_dolar = $compra_venta_dolar;
            $comision = $compra_venta_dolar2;
            $valoreal = $valoreal;

            // $CV_dolar = trim($_POST[$compra_venta_dolar]);
           //  $comision = trim($_POST[$compra_venta_dolar2]);
           //  $valoreal = trim($_POST[$valoreal]);
         
             $consulta = "INSERT INTO criptomoneda(criptomoneda,transaccion, cantidad_cripto, cambio_dolar,compra_venta_dolar,comision,valoreal) VALUES ('$cripto','$transaccion','$canti_cripto','$cambio_dolar','$compra_venta_dolar', '$compra_venta_dolar2', '$valoreal')";
             $resultado = mysqli_query($conex,$consulta);
             
             //echo "resultlado es $resultado";
             //Mandara mensaje si el la variable de resultado obtubo una consulta si no racciona mandara un mensaje de error
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
         }*/
//____________________________________________________________

//BOTON eliminar critomonedas.  OK
        //____________________________________________________________
        if(isset($_POST['btnEliminarCripto']))
        {

            $id = trim($_POST['id_transaccion']);

            $consulta = "DELETE FROM criptomoneda WHERE id_transaccion = $id";
            echo "Eliminado correctamente";
            $resultado = mysqli_query($conex,$consulta);
            if ($resultado) {
                    ?> 
                    <h3 class="ok">¡Te has Eliminado correctamente!</h3>
                <?php
                } else {
                    ?> 
                    <h3 class="bad">¡Ups ha ocurrido un error!</h3>
                <?php
                } 
        }
            
         
//____________________________________________________________


//BOTON MOSTRAR critomonedas. 
        //____________________________________________________________
       
        if(isset($_POST['tnMostrarCripto']))
        {

            $consulta = "SELECT * From criptomonedas(id_transaccion,criptomoneda,transaccion, cantidad_cripto, cambio_dolar,compra_venta_dolar,comision,valoreal) VALUES ('$id_transaccion','$cripto','$transaccion','$canti_cripto','$cambio_dolar','$CV_dolar', '$comision', '$valoreal')";
            $resultado = mysqli_query($conex,$consulta);

            while($mostrar=mysql_fetch_rray($array))
            {
                
                    $mostrar['id_transaccion'];
                    $mostrar['criptomoneda'];
                    $mostrar['transaccion'];
                    $mostrar['cantidad_cripto'];
                    $mostrar['cambio_dolar'];
                    $mostrar['compra_venta_dolar'];
                    $mostrar['comision'];
                    $mostrar['valoreal'];
            }
     
        }


        
        
        
//____________________________________________________________

?>

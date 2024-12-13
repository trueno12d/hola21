<?php

$user = "root";
$pass = "";
$host = "localhost";


$connection = mysqli_connect($host,$user,$pass);


$metodo = $_POST["metodo_pago"] ;
$nombre = $_POST["nombre"] ;
$correo = $_POST["correo"] ;
$monto = $_POST["monto"];

        $dbase = "puma";
     
        $db = mysqli_select_db($connection,$dbase);


        
$instruccion_SQL = "INSERT INTO pago (metodo,nombre, correo, monto)
                             VALUES ('$metodo','$nombre','$correo','$monto')";
                           
                           
        $resultado = mysqli_query($connection,$instruccion_SQL);

       
       $consulta = "SELECT * FROM pago";
        
       $result = mysqli_query($connection,$consulta);
       if(!$result) 
       {
         echo "No se ha podido realizar la consulta";
       }
       
       echo "<table>";
       echo "<tr>";
       echo "<th><h1>id_pago</th></h1>";
       echo "<th><h1>Metodo</th></h1>";
       echo "<th><h1>nombre</th></h1>";
       echo "<th><h1>correo</th></h1>";
       echo "<th><h1>monto</th></h1>";
       echo "</tr>";
       
       while ($colum = mysqli_fetch_array($result))
       {
           echo "<tr>";
           echo "<td><h2>" . $colum['pago']. "</td></h2>";
           echo "<td><h2>" . $colum['metodo']. "</td></h2>";
           echo "<td><h2>" . $colum['nombre'] . "</td></h2>";
           echo "<td><h2>" . $colum['correo'] . "</td></h2>";
           echo "<td><h2>" . $colum['monto'] . "</td></h2>";
           echo "</tr>";
       }
              
       mysqli_close( $connection );
       
      
       


  
echo'<a href="/PUma510/puma510/usuario/html/gracias.html"> gracias</a>';

?>
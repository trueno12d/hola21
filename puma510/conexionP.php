<?php

$user = "root";
$pass = "";
$host = "localhost";


$connection = mysqli_connect($host,$user,$pass);

$nombre = $_POST["nombre"] ;
$correo = $_POST["correo"] ;
$contraseña = $_POST["contraseña"] ;
$roll=$_POST["roll"];


        $datab = "puma";
      
        $db = mysqli_select_db($connection,$datab);


        
$instruccion_SQL = "INSERT INTO login (nombre, correo, contrasena,roll)
                             VALUES ('$nombre','$correo','$contraseña','$roll')";
                           
                           
        $resultado = mysqli_query($connection,$instruccion_SQL);
        

        
         $consulta = "SELECT * FROM login";
        
         $result = mysqli_query($connection,$consulta);
         if(!$result) 
         {
           echo "No se ha podido realizar la consulta";
         }
         
         echo "<table>";
         echo "<tr>";
         echo "<th><h1>id_usu</th></h1>";
         echo "<th><h1>Nombre</th></h1>";
         echo "<th><h1>Correo</th></h1>";
         echo "<th><h1>Contraseña</th></h1>";
         echo "<th><h1>Roll</th></h1>";
         echo "</tr>";
         
         while ($colum = mysqli_fetch_array($result))
         {
             echo "<tr>";
             echo "<td><h2>" . $colum['usu']. "</td></h2>";
             echo "<td><h2>" . $colum['nombre']. "</td></h2>";
             echo "<td><h2>" . $colum['correo'] . "</td></h2>";
             echo "<td><h2>" . $colum['contrasena'] . "</td></h2>";
             echo "<td><h2>" . $colum['roll'] . "</td></h2>";
             echo "</tr>";
         }
         
         
         mysqli_close( $connection );
         
         
            echo'<a href="../puma510/puma510/usuario/html/OF.html">Inicio</a>';
         
         ?> 
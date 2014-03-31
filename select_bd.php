<?php

$contra= $_POST['contra'];
$conexion=mysql_connect("localhost","root","$contra")
		 or die("Problemas en la conexion");
		 
		 $seleccion=mysql_query("SHOW DATABASES", $conexion)
		 or die("Problemas en el insert".mysql_error() );
		 echo "<table border='1'>";
		 
		 while($row=mysql_fetch_array($seleccion))
		 {
			echo "<tr>";
			echo "<tr><td>$row[0]</td></tr> \n";                
			echo "</tr>";
		 }
		echo "</table> \n"; 
		 
		mysql_close($conexion);
		echo "El cliente fue dado de alta exitosamente";

?>

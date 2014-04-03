<!Doctype html>
<html>
	<head>
		<title> Pagina dos, Registro de jugadores </title>
	</head>
	<body>
		
	<!-- ........... Conexion a la base de datos ...........-->
	<?php
		$campoDeTabla = array();
		$tipodeDato = array();
		
		require_once("comparacion.php");
		$conexion=mysql_connect("localhost","root","Linces25z")
		 or die("Problemas en la conexion");
		 
		 mysql_select_db("base1", $conexion) 
		 or die("Problemas en la seleccion de base de datos");
		 
		 // Desc de la tabla 
		 $desc=mysql_query("describe jugador", $conexion)
		 or die("Problemas en el insert".mysql_error() );
	 
		 // Consulta de la tabla
		 $select=mysql_query("select * from jugador", $conexion)
		 or die("Problemas en el insert".mysql_error() );

		// Creo una tabla, guarda los datos del DESC TABLE dentro de la primera fila
		echo "<table border='1'>";
		echo "<tr>";
		 while($row=mysql_fetch_array($desc))
		 {
		 	$campoDeTabla[] = "{$row['Field']}";
		 	$tipodeDato[] = "{$row['Type']}";
			echo "<td> {$row['Field']} , {$row['Type']}</td>";
		 }
		 echo "</tr>";							// Cierro la primera fila de la tabla

		// Se  continua llenando la tabla con los registros de la consulta
		 while( $reg=mysql_fetch_array($select, MYSQL_ASSOC) )
		 {
			echo "<tr>";
				foreach ($reg as $col_value) 
				echo "<td> $col_value </td>";
			echo "<td> Edit </td> <td> X </td>";
			echo "</tr>";
		 }
		 echo "</table>";						// Cierro la tabla
		 echo "<br>"; 
		  
		 echo "<form>";
	 	foreach ($tipodeDato as $key) 
	 	{	
	 		$lastChar = substr($key, -1);
	 		if( $lastChar == ")" )
	 		{
	 			$contador = 0;
	 			$clonCadena = $key;
	 			do {
					$lastChar = substr($clonCadena, -1);
					$clonCadena = substr($clonCadena, 0, -1);
	 				$contador -= 1;
	 			} while ( $lastChar != "(" );
				echo "<label> ".$clonCadena.": </label>";
				$length = substr($key, $contador + 1, -1);
	 			echo $length;
	 			echo "<br>";
	 		}
		echo "</form>";
		mysql_close($conexion);
		echo "<br><br> esto es lo que hay en las tablas de la base de datos ";
		echo "<br><br>";
	?>
</body> 
</html>

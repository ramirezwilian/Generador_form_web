<!DOCTYPE HTML>
	<head>
		<title> Pagina dos, Registro de jugadores </title>
	</head>
	<body>
		
	<!-- ........... Conexion a la base de datos ...........-->
	<?php

		// tiposDeDatos guardara el Type de dato de mysql
		$tiposDeDatos = array();
		$inputType = "string";
		
		// campoDeTabla guardara el Field de la tabla de mysql
		$campoDeTabla = array();
		$labelName = "string";

		// ValorTabla guarda 


		require_once("comparacion.php");
		
		$conexion=mysql_connect("localhost","root","Linces25z")
		 or die("Problemas en la conexion");
		 
		 mysql_select_db("base1", $conexion) 
		 or die("Problemas en la seleccion de base de datos");
		 
		 // Desc de la tabla 
		 $desc=mysql_query("describe jugador", $conexion)
		 or die("Problemas en el insert".mysql_error() );

		 // Resultados de la primera tabla, Describe table
		 while($row=mysql_fetch_array($desc))
		 {
			echo " {$row['Field']} --- {$row['Type']} ";
			//$tipo = substr( $row['Type'], 0, -4);
			//$tiposDeDatos[]=$tipo;
			//array_push();
			 
			//$campoDeTabla[]= $row['Field'];
			//array_push();

			$tipo = substr( $row['Type'], 0, -4);
			$campo = $row['Field'];
			// Consulta de la tabla

		 	$select=mysql_query("select ".$row['Type']." from jugador", $conexion)
		 	 or die("Problemas en el insert".mysql_error() );

			CompararTipodeDato($tipo,$campo);

		 }

		echo "<br>";

		CompararDatos($tiposDeDatos,$campoDeTabla);
		
		// Resultados de la segunda tabla. SELECT  * FROM TABLE 
		echo "<table border='1'>";
		 while($reg=mysql_fetch_array($select))
		 {
			echo "<tr>";
			echo "<td> ".$reg['."$".']." </td>";
			echo "</tr>";
		 }
		echo "</table>"; 
		 
		mysql_close($conexion);
		echo "<br> esto es lo que hay en las tablas de la base de datos ";
	?>
	</body>
	<a href="index.html"> Regresar </a>
</HTML>

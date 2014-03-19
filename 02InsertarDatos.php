<!DOCTYPE HTML>
	<head>
		<title> Pagina dos, Registro de jugadores </title>
	</head>
	<body>
		
	<!-- ........... Conexion a la base de datos ...........-->
	<?php
		$conexion=mysql_connect("localhost","root","Linces25z")
		 or die("Problemas en la conexion");
		 
		 mysql_select_db("base1", $conexion) 
		 or die("Problemas en la seleccion de base de datos");

		// Insert en la base de datos
		 mysql_query("insert into jugador(nombre,email,codigoequipo) values
		 ('$_REQUEST[txtname]', '$_REQUEST[txtemail]', $_REQUEST[selequipo])", $conexion)
		 or die("Problemas en el insert".mysql_error() );
		 
		mysql_close($conexion);
		echo "El jugador fue dado de alta";
	?>
	</body>
	<a href="index.html"> Regresar </a>
</HTML>

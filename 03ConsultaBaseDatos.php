<?php

	function GuardarDatos($cadena,$field)
	{
		// tiposDeDatos guardara el Type de dato de mysql
		$tiposDeDatos = array();
		$inputType = "string";

		// campoDeTabla guardara el Field de la tabla de mysql
		$campoDeTabla = array();
		$labelName = "string";

		$tipo = substr( $cadena, 0, -4);
		$tiposDeDatos[]=$tipo;
		array_push();

		$campoDeTabla[]= $field;
		array_push();

		for($i=0; $i < count($tiposDeDatos); $i++)
		{
			switch($tiposDeDatos[$i])
			{
				case "tinyint" : $inputType = "checkbox"; 

							break;	
				case "varchar" : $inputType = "text"; 

							break;
				case "date" : $inputType = "password"; 

							break;
				case "int" : $inputType = "tel"; 

							break;
			}
			echo "<h3>".$campoDeTabla[$i]."</h3>";
			echo "<input type=".$inputType." name=txt".$campoDeTabla[$i]."> <br>";
		}
	}
?>

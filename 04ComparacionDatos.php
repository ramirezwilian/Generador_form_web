<?php
	function CompararDatos($tiposDeDatos,$campoDeTabla){
		for($i=0; $i < count($tiposDeDatos); $i++)
		{
			switch($tiposDeDatos[$i])
			{
				case "tinyint" : $inputType = "radiobutton"; 
								
							break;	
				case "varchar" : 	if($campoDeTabla[$i]!="password")
									{
										$inputType = "text";
									}else {
										$inputType = "password";
									}
							break;
				case "date" : $inputType = "password"; 
								
							break;
				case "int" : $inputType = "tel"; 
								
							break;
			}
			echo "<label>".$campoDeTabla[$i]." </label>";
			echo "<input type=".$inputType." name=txt".$campoDeTabla[$i].">  <br>";
		}
	}

	function CompararTipodeDato($type,$field)
	{
			switch($type)
			{
				case "tinyint" : $inputType = "radiobutton"; 
								
							break;	
				case "varchar" : 	if($field!="password")
									{
										$inputType = "text";
									}else {
										$inputType = "password";
									}
							break;
				case "date" : $inputType = "password"; 
								
							break;
				case "int" : $inputType = "tel"; 
								
							break;
			}
			echo "<label>".$type." </label>";
			echo "<input type=".$inputType." name=txt".$field.">  <br>";
	}
?>


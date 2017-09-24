<!DOCTYPE html>
<html>
<head>
	<title>DIVISION</title>
</head>
<body>
	<?php
	$num1=$_POST["num1"];
	$num2=$_POST["num2"];
	$dividir=$num1/$num2;
	?>

	<form method="Post"name="division"action="d.php">
		ingrese el numero 1 <input type="text" name="num1"><br>
		ingrese el numero 2 <input type="text" name="num2"><br>
		<input type="submit" value="Enviar">
		<input type="submit" value="Borrar">
	</form>
<p><?php if($num1 && $num2)
	echo"La divicion de los numeros ingresados es: $dividir";
	else
		if(!$num1 && !$num2)
	echo"Favor ingresar los numeros";		
?></p>
</body>
</html>
	
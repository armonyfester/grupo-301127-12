<!DOCTYPE html>
<html>
<head>
	<title>MULTIPLICACION</title>
</head>
<body>
	<?php
	$num1=$_POST["num1"];
	$num2=$_POST["num2"];
	$multiplicacion=$num1*$num2;
	?>

	<form method="Post" name="multiplicacion" action="m.php">
		ingrese el numero 1 <input type="text" name="num1"><br>
		ingrese el numero 2 <input type="text" name="num2"><br>
		<input type="submit" value="Enviar">
		<input type="submit" value="Borrar">
	</form>
<p><?php if($num1 && $num2)
	echo"al multiplicar los numeros ingresados es: $multiplicacion";
	else
		if(!$num1 && !$num2)
	echo"Favor ingresar los numeros";		
?></p>
</body>
</html>
	
<!DOCTYPE html>
<html>
<head>
	<title>RESTA</title>
</head>
<body>
	<?php
	$num1=$_POST["num1"];
	$num2=$_POST["num2"];
	$resta=$num1-$num2;
	?>

	<form method="Post" name="resta"action="r.php">
		ingrese el numero 1 <input type="text" name="num1"><br>
		ingrese el numero 2 <input type="text" name="num2"><br>
		<input type="submit" value="Enviar">
		<input type="submit" value="Borrar">
	</form>
<p><?php if($num1 && $num2)
	echo"La resta de los numeros ingresados es: $resta";
	else
		if(!$num1 && !$num2)
	echo"Favor ingresar los numeros";		
?></p>
</body>
</html>
	
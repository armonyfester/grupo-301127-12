<Html>
<Head>Operaciones basicas </Head>

<Body>
<?php echo ''.$result.'' ?>
<?php 
if($_POST['enviar']) { 
$primero = $_POST["primero"];  
$segundo = $_POST["segundo"]; 
$oper = $_POST["operador"]; 
if($oper == '+'){ 
$result = ($primero) + ($segundo); 
} 

//si es restaresta 
if($oper == '-'){ 
$result = ($primero) - ($segundo); 
} 

//si es multiplicación 
if($oper == '*'){ 
$result = ($primero) * ($segundo); 
} 

//si es división 
if($oper == '/'){ 
$result = ($primero) / ($segundo); 
} 

//Verifica que $oper si sea un caracter correcto 
if($oper != '/' || '+' || '-' || '*'){ 
echo 'Debera ingresar un operador correcto [+ - * /]'; 
} 
} 
?>
</Body>

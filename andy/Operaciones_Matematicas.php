

<htmL>
<header><img src="logo.gif" width"90" height"40"></header>
<head>
<title>  G.H.V  </title>
</head>


<style type="text/css">
#navegador ul{
   list-style-type: none;
   text-align: center;
}
#navegador li{
   display: inline;
   text-align: center;
   margin: 0 10px 0 0;
}
#navegador li a {
   padding: 2px 7px 2px 7px;
   color: #681ACC;
   background-color: #08088A;
   border: 1px solid #ccc;
   text-decoration: none;
}
#navegador li a:hover{
   background-color: #2123A9;
   color: #ffffff;
}
   </style>
	
<link rel="stylesheet" type="text/css" a href="estilos/estilos.css">
<link rel="stylesheet"  href="estilos/fonts.css">


 

<script type="text/javascript" src="https://counter1.fcs.ovh/private/counter.js?c=37nwfaa2yytkaqpcna9t3qlh1dun24h1"></script>
<noscript><a href="https://www.contadorvisitasgratis.com" title="contador web"><img src="https://counter1.fcs.ovh/private/contadorvisitasgratis.php?c=37nwfaa2yytkaqpcna9t3qlh1dun24h1" border="0" title="contador web" alt="contador web"></a></noscript>

         


<body background="ff.jpg">

<h1>Calculadora</h1>
		<form action="s.php" method="post">
			<select name="operador">
				<option value="suma">Suma</option>
				<option value="resta">Resta</option>
				<option value="multiplicacion">Multiplicaci&oacute;n</option>
				<option value="division">Divisionn</option>
			</select><br />
			Digita primer valor:<br />
			<input type="text" name="valor1"><br />
			Digita segundo valor:<br />
			<input type="text" name="valor2"><br>
			<input type="reset" value="Borrar">
			<input type="submit" value="Enviar">
		
		</form>
		
		
		<?php 
	if ($_POST ["valor1"] !="" and $_POST ["valor2"]!=""){
		if ($_POST["operador"] == "suma") {
			print ($resultado = $_POST ["valor1"] + $_POST ["valor2"]);
			print ('<br /><a href="s.php">Volver</a>');
		} elseif ($_POST["operador"] == "resta") {
			print ($resultado = $_POST ["valor1"] - $_POST ["valor2"]);
			print ('<br /><a href="s.php">Volver</a>');
		} elseif ($_POST["operador"] == "multiplicacion") {
			print ($resultado = $_POST ["valor1"] * $_POST ["valor2"]);
			print ('<br /><a href="s.php">Volver</a>');
		} elseif ($_POST["operador"] == "division") {
			print ($resultado = $_POST ["valor1"] / $_POST ["valor2"]);
			print ('<br /><a href="s.php">Volver</a>');
		}
	} else {
		print("Ingresa algun valor");
		print ('<br /><a href="Operaciones_Matematicas.php">Volver</a>');
	}
?>

<?php
	for($i=1;$i<=12;$i++){
		echo $i;
		echo "<br/>";
	}
?>

<H1><CENTER><font face="Comic Sans MS"><I><div class="stage">
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
</div></I></font></CENTER> </H1>
</div >
<HR COLOR=WHITE></HR> 

<CENTER>
<H2><article><aside>
<P>suma,resta,multiplicacion y division</aside></article></H2>
</CENTER>





<div class="social">
		<ul>
			<li><a href="http://www.facebook.com" target="_blank" class="icon-facebook2"></a></li>
			<li><a href="http://www.twitter.com" target="_blank" class="icon-twitter"></a></li>
			<li><a href="mailto:armonyfester@gmail.com" class="icon-mail"></a></li>
                        <li><a href="http://www.youtube.com" target="_blank" class="icon-youtube"></a></li>
		</ul>
	</div>
</body>










	   </html>  
	     	     









	

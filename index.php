<!DOCTYPE html>
<html>
<head>
	<title>Farmed</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="_css/mode-1.css">
	<script type="text/javascript" src="../_js/cycle.js"></script>
	<script type="text/javascript" src="../_js/jquery.js"></script>
<script language="Javascript">
function skin1()
{
document.bgColor='red';
}
function skin2()
{
document.bgColor='green';
}
function skin3()
{
document.bgColor='yellow';
}
function skin4()
{
document.bgColor='#FFFFCC';
}

</script>

</head>

<body>
<form name="cores">
<input type="radio" name="campo" onclick="skin1();">Fundo vermelho<br>
<input type="radio" name="campo" onclick="skin2();">Fundo verde<br>
<input type="radio" name="campo" onclick="skin3();">Fundo amarelo<br>
<input type="radio" name="campo" onclick="skin4();">Fundo amarelo<br>
</form>

<?php
include "obj-menu.php";
?>

<div id="geral">
<form id="LG" method="POST" action="index.php">

<label>Login:</label> <input type="text" name="login">
<label>Senha:</label> <input type="password" name="senha">
<spam> <sup> <a href="">Registrar</a> | <a href="">Esqueci a senha</a></sup></spam>
<input type="submit" name="Entrar" value=" Entrar " >
</form>
</div>




</body>
</html>

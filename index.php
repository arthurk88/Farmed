<!DOCTYPE html>
<html>
<head>
	<title>Farmed</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="_css/mode-1.css">
	<script type="text/javascript" src="../_js/cycle.js"></script>
	<script type="text/javascript" src="../_js/jquery.js"></script>


<script>
var id = 0;
var imgs = new Array();
imgs[0] = "http://garotasquecurtemanimes.com.br/wp-content/uploads/2017/03/%E7%AC%AC%E4%B8%80%E6%AC%A1%E7%9A%84%E8%BE%A3%E5%A6%B9-800x400.jpg";
imgs[1] = "http://garotasquecurtemanimes.com.br/wp-content/uploads/2017/03/%E7%AC%AC%E4%B8%80%E6%AC%A1%E7%9A%84%E8%BE%A3%E5%A6%B9-800x400.jpg";
imgs[2] = "http://garotasquecurtemanimes.com.br/wp-content/uploads/2017/03/%E7%AC%AC%E4%B8%80%E6%AC%A1%E7%9A%84%E8%BE%A3%E5%A6%B9-800x400.jpg";
imgs[3] = "http://garotasquecurtemanimes.com.br/wp-content/uploads/2017/03/%E7%AC%AC%E4%B8%80%E6%AC%A1%E7%9A%84%E8%BE%A3%E5%A6%B9-800x400.jpg";
//Aqui apenas adicione mais imagens
function troca(){
	if (id<imgs.length-1){
	id++;	
	}else{
		id=0
	}
	$("#box").fadeOut(500);
	setTimeout("$('#box').html('<img src=\""+imgs[id]+"\" width=\"100%\" height=\"100%\" />');$('#box').fadeIn(500);",500);
}
var segundos = 3; //Segundos entre cada imagem
setInterval("troca();",segundos*1s00);
</script>
</head>

<body>
<div id="box"><img src="img1.jpg" width="100%" height="100%" /></div>

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

<!DOCTYPE html>
<html>
<head>
	<title>Farmed</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="_css/mode-1.css">
	<script type="text/javascript" src="_js/cycle.js"></script>
	<script type="text/javascript" src="_js/jquery.js"></script>
<style>
#box{
	position:absolute;
	width:100%;
	height:100%;
	margin: 0px;
	overflow: hidden;
	top:0px;
	left:0px;
	z-index:-1;
}
</style>
<script type="text/javascript">
	var id = 0;
var imgs = new Array();
imgs[0] = "_imagens/Tela-1.jpg";
imgs[1] = "_imagens/Tela-2.jpg";
imgs[2] = "_imagens/Tela-3.jpg";

//Aqui apenas adicione mais imagens
function troca(){
	if (id<imgs.length-1){
	id++;	
	}else{
		id=0
	}
	$("#box").fadeOut(600);
	setTimeout("$('#box').html('<img src=\""+imgs[id]+"\" width=\"100%\" height=\"100%\" />');$('#box').fadeIn(500);",500);
}
var segundos = 5; //Segundos entre cada imagem
setInterval("troca();",segundos*1000);
</script>
</script>
<script src="jquery.js"></script>

</head>

<body >
<div id="box"><img src="_imagens/Tela-1.jpg" width="100%" height="100%" /></div>
<audio src="_som/index.mp3" autoplay loop>
</audio>
<section class="fadeIn">
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
</section>



</body>
</html>

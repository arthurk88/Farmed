<!DOCTYPE html>
<html>
<head>
	<title>Farmed</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="_css/mode-1.css">
	<script type="text/javascript" src="../_js/cycle.js"></script>
	<script type="text/javascript" src="../_js/jquery.js"></script>
<script type="text/javascript">// <![CDATA[
var imageCount = 0;
var currentImage = 0;
var images = new Array();
 
images[0] = '_imagens/Tela-1.jpg';
images[1] = '_imagens/Tela-2.jpg';

 
var preLoadImages = new Array();
for (var i = 0; i < images.length; i++)
{
   if (images[i] == "")
      break;
 
   preLoadImages[i] = new Image();
   preLoadImages[i].src = images[i];
   imageCount++;
}
 
function startSlideShow()
{
   if (document.body && imageCount > 0)
   {

      document.body.style.backgroundImage = "url("+images[currentImage]+")";    
      document.body.style.backgroundAttachment = "fixed";
      document.body.style.backgroundRepeat = "repeat";
      document.body.style.backgroundPosition = "left top";
 
      currentImage = currentImage + 1;
      if (currentImage > (imageCount-1))
      { 
         currentImage = 0;
      }
      setTimeout('startSlideShow()', 3000);
   }
}
startSlideShow();
</script>

</head>
<audio src="_som/index.mp3" autoplay loop>
</audio>
<body onLoad="startSlideShow()">

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

<!DOCTYPE html>
<html>
<head>
	<title>Farmed</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="_css/mode-1.css">
	<script type="text/javascript" src="_js/cycle.js"></script>
	<script type="text/javascript" src="_js/jquery.js"></script>
	<script type="text/javascript" src="_js/trocafundo.js"></script>
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
</script>
	<script type="text/javascript">
var segundos = 5; //Segundos entre cada imagem
setInterval("troca();",segundos*1000);
troca();
</script>

</head>

<body>

	<header>
		<nav>
			<ul>
				<li><a href="index.php">Inicio</a></li>
				<li><a href="index.php">Sobre Nós</a></li>
				<li><a href="index.php">Ranking</a></li>
				<li><a href="index.php">Ajuda</a></li>
				<li><a href="index.php">Contato</a></li>
			</ul>
		</nav>
	</header>

	<div id="box"><img src="_imagens/Tela-1.jpg" width="100%" height="100%" /></div>

	<audio src="_som/index.mp3" autoplay loop></audio>

<div>
	<form>
		<div>
			<button>Login</button>
			<button>Cadastre-se</button>
		</div>
		<div>	
			<input type="" name="" placeholder="User ou e-mail">
			<span>Esqueceu o e-mail?</span>
			<input type="" name="" placeholder="Password">
			<span>Esqueceu o senha?</span>
			<input type="checkbox" name=""> Aceito os termo.
			<input type="submit" name="" value="Entrar">

		</div>
		<div>
			<button>FACEBOOK</button>
			<button>GOOGLE</button>
		</div>
	</form>
</div>

</body>
</html>

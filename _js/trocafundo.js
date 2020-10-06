<script type="text/javascript" src="cycle.js"></script>
<script type="text/javascript" src="jquery.js"></script>
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


<script type="text/javascript">
var imagens        = new Array( 'sabesp.gif', 'petrobras.gif', 'CVRD.gif');
var num_img    = 3;
var img_atual =0;

function ChangeImg()
{
    if (img_atual < (num_img - 1) )
   {
        img_atual = img_atual + 1;
   }
   else
   {
        img_atual = 0;
   }
    document["img_apoio"].src    = "dir_img/" + imagens[img_atual];
   var x = setTimeout ("ChangeImg()", 5000);
}
</script>


    var id = 0;
    var imgs = [
        "public/image/Tela-1.jpg",
        "public/image/Tela-2.jpg",
        "public/image/Tela-3.jpg",
    ]

    $('#box').css("background-image", `url(${imgs[id]})`);
    //Aqui apenas adicione mais imagens

    function trocar() {
        if (id < imgs.length - 1) {
            id++;
        } else {
            id = 0
        }
        $('#box').fadeOut(500);
        setTimeout(function(){
            $('#box').css('background-image', `url(${imgs[id]})`);
            $('#box').fadeIn(500);
        }, 500);
    };

    var segundos = 5; //Segundos entre cada imagem
    setInterval(trocar, segundos * 1000);

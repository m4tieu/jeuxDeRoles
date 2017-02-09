$(document).ready(function(){
//    // on recupère les dimensions de la fenetre
//    var w = $(window).width();
//    var h = $(window).height();
//    //on récupère les dimension du bouton
//    var buttonw = $("button").width();
//    var buttonh = $("button").height();
//    //on calcule la position du boutton afin qu'il soit au centre
//    var top = (h - buttonh)/2;
//    var left = (w - buttonw)/2;
//    // on affecte les nouvelles positions calculées
//    $("button").css({
//        "left": left+"px",
//        "top" : top+"px"
//    });
    centrerButton();
    centrerFormulary();
    $("body").css("visibility","visible");
});

$(window).resize(function() {
    centrerButton();
    centrerFormulary();
});

$("button").click(function(){
    $(this).fadeOut(1000, function(){
        $("#selection").fadeIn(750);
    });
});
    
function centrerButton(){
    
    var w = $(window).width();
    var h = $(window).height();
    //on récupère les dimension du bouton
    var buttonw = $("button").width();
    var buttonh = $("button").height();
    //on calcule la position du boutton afin qu'il soit au centre
    var top = (h - buttonh)/2;
    var left = (w - buttonw)/2;
    // on affecte les nouvelles positions calculées
    $("button").css({
        "left": left+"px",
        "top" : top+"px"
    });
}
function centrerFormulary(){
    
    var w = $(window).width();
    var h = $(window).height();
    //on récupère les dimension du bouton
    var buttonw = $("#selection").width();
    var buttonh = $("#selection").height();
    //on calcule la position du boutton afin qu'il soit au centre
    var top = (h - buttonh)/2;
    var left = (w - buttonw)/2;
    // on affecte les nouvelles positions calculées
    $("#selection").css({
        "left": left+"px",
        "top" : top+"px"
    });
    }
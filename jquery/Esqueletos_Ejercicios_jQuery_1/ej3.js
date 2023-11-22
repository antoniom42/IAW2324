$(document).ready(function () {
    $("#esconder").click(function(){
        let tamaño= $(".pares").css("font-size");
        $(".pares").css("font-size", parseInt(tamaño)*5+"px")
    });
});
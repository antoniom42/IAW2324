$(document).ready(function () {
    $("#esconder").click(function(){
        let entrada = prompt("Por favor, ¿Qué párrafo desea esconder?");

        if (entrada=="todos") {
            $("p").hide();
        } else {
            $("#" + entrada).hide(); 
        }
    });
});
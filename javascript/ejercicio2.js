function euadol() {
    var eur = document.getElementById("eur").value;

    if (eur >= 0) {
    document.getElementById("resultado").innerHTML="Su cantidad corresponde a " + eur*1.07 + " dólares";
    } else {
        document.getElementById("resultado").innerHTML="La cantidad introducida no es válida"
    }
}

function dolaeu() {
    var dol = document.getElementById("dol").value;
    if (dol >= 0) {
    document.getElementById("resultado2").innerHTML="Su cantidad corresponde a " + dol*0.94 + " euros";
    } else {
        document.getElementById("resultado2").innerHTML="La cantidad introducida no es válida"
    }
}
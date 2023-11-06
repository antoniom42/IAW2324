function sumar(){
    let uno = parseFloat(document.getElementById('numuno').value);
    let dos = parseFloat(document.getElementById('numdos').value);
    document.getElementById('demo').innerHTML=uno+dos;
}
function restar(){
    let uno = parseFloat(document.getElementById('numuno').value);
    let dos = parseFloat(document.getElementById('numdos').value);
    document.getElementById('demo').innerHTML=uno-dos;
}
function multiplicar(){
    let uno = parseFloat(document.getElementById('numuno').value);
    let dos = parseFloat(document.getElementById('numdos').value);
    document.getElementById('demo').innerHTML=uno*dos;
}
function dividir(){
    let uno = parseFloat(document.getElementById('numuno').value);
    let dos = parseFloat(document.getElementById('numdos').value);
    document.getElementById('demo').innerHTML=uno/dos;

    if (dos==0) {
        document.getElementById('demo').innerHTML="No se puede dividir por cero";
    }
}
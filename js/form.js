function change() {
    let mujer = document.getElementById('l1');
    let men = document.getElementById('l2');
    mujer.style.background="#03dac5";
    men.style.background = "rgba(3, 218, 197, 0.5)";

}
function change2(){
    let mujer = document.getElementById('l1');
    let men = document.getElementById('l2');
    men.style.background="#03dac5";
    mujer.style.background = "rgba(3, 218, 197, 0.5)";
}
function cambiar() {
    var pdrs = document.getElementById('archivo').value;
    document.getElementById('info').innerHTML ="Archivo: "+pdrs;
    if (pdrs.length > 15     ) {
        pdrs.style.fontSize = "15px";
    } else {
        
    }
}

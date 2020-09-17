var entrada = document.getElementById("entrada");
//entrada.disabled = true;
var button = document.getElementById("button");
var cronometro = document.getElementById("cronometro");
var ativar = false;
cronometro.innerText = "00:00:00";

button.onclick = function () {
    iniciarParar();
};
var hora = 0;
var minutos = 0;
var segundos = 0;
var intervalo = null;


function iniciarParar(){

    if(ativar){
        clearInterval(intervalo);
        ativar = false;
        button.innerHTML = "<div>play<div>";
        entrada.disabled = false;
        
    }else{
        hora = parseInt(entrada.value / 60);
        minutos = entrada.value % 60;
        segundos = 0;
        intervalo = setInterval(function(){calc()},1000);
        ativar = true;
        button.innerHTML = "<div>stop</div>"
        entrada.disabled = true;
    }

}

function iniciar(){
    hora = parseInt(entrada.value / 60);
    minutos = entrada.value % 60;
}

function calc(){

    if(segundos == 0 ){
        segundos = 60;
        if(minutos > 0){
            
            minutos--;
        }

    }
    if(minutos == 0){

        if(hora > 0){
            minutos = 59;
            hora--;
        }
    }
    if(segundos == 0 & minutos == 0 & hora == 0){
        clearInterval(intervalo);
    }else{
        segundos--;
    }

    if (hora > 9){
        var a = hora.toString();
    }else{
        var a = "0" + hora.toString();
    }

    if (minutos > 9){
        var b = minutos.toString();
    }else{
        var b = "0" + minutos.toString();
    }

    if (segundos > 9){
        var c = segundos.toString();
    }else{
        var c = "0" + segundos.toString();
    }
    // var a = hora.toString();
    // var b = minutos.toString();
    // var c = segundos.toString();
    var d = a + ":" + b + ":" + c;
    cronometro.innerText = d;
}
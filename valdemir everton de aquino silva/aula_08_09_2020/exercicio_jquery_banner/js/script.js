
var lista = ["https://wallpaperaccess.com/full/1078158.jpg", "https://wallpaperaccess.com/full/1078159.jpg", "https://wallpaperaccess.com/full/1078193.jpg" ]
var i = 0;
$("#foto").attr("src", lista[i] );
var intervalo = setInterval(function(){banner()}, 3000);

$("#btnleft").click(function(){
    i--;
    if(i<0){
        i = 2
    }
    $("#foto").attr("src", lista[i] );
    clearInterval(intervalo);
    intervalo = setInterval(function(){banner()}, 3000);
});

$("#btnright").click(function(){
    i++;
    if(i>2){
        i = 0
    }
    $("#foto").attr("src", lista[i] );
    clearInterval(intervalo);
    intervalo = setInterval(function(){banner()}, 3000);
    
});

function banner(){
    i++;
    if(i>2){
        i = 0;
    }
    $("#foto").attr("src", lista[i] );  
}
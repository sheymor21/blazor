var fotos = [
    "img/perro.jpg",
    "img/gato.jpg",
    "img/conejo.jpg",
    "img/hamster.jpeg",
    "img/guacamaya.jpg",
    "img/conejilla.jpg",
    "img/perico.jpg",
    "img/cerdo.jpg",
];
var confirmacion;
var seleccion;
var count = 0;
var racha = 0;;
var vidas =8;
var puntos =0;
var mantener;

var id;
var id2;
var clas;
var clas2;
var n;
var n2;
var guardar;
var guardar2;
var orden1 = [0,1,2,3,4,5,6,7];
var orden2 = [0,1,2,3,4,5,6,7];

function aleatorio(){

    var i,j,k;
    var t,f,a;

    for (i = orden1.length; i; i--) {
        j = Math.floor(Math.random() * i);
        k = orden1[i - 1];
        orden1[i - 1] = orden1[j];
        orden1[j] = k;
    }

    for (t = orden2.length; t; t--) {
        f = Math.floor(Math.random() * t);
        a = orden2[t - 1];
        orden2[t - 1] = orden2[f];
        orden2[f] = a;
    }
}

function cambio(numero){
    count++;
    mantener = numero;
    if(numero == 1){
        const column = document.getElementById('columna-1');
        const img = document.getElementById('inter-1-1');
        img.setAttribute('src',fotos[orden1[0]]);
        img.setAttribute('class','mostrar');

        img.removeAttribute('onClick');
        id = img.getAttribute('id');
        clas = img.getAttribute('class');
        n = 1;
        cl = 1;
        select(img.getAttribute('src'));
    }
    if(numero == 2){
        const column = document.getElementById('columna-1');
        const img = document.getElementById('inter-1-2');
        img.setAttribute('src',fotos[orden1[1]]);
        img.setAttribute('class','mostrar');
        img.removeAttribute('onClick');
        id = img.getAttribute('id');
        clas = img.getAttribute('class');
        n = 2;
        cl = 1;
        select(img.getAttribute('src'));
    }
    if(numero == 3){
        const column = document.getElementById('columna-1');
        const img = document.getElementById('inter-1-3');
        img.setAttribute('src',fotos[orden1[2]]);
        img.setAttribute('class','mostrar');
        img.removeAttribute('onClick');
        id = img.getAttribute('id');
        clas = img.getAttribute('class');
        n = 3;
        cl = 1;
        select(img.getAttribute('src'));
    }
    if(numero == 4){
        const column = document.getElementById('columna-1');
        const img = document.getElementById('inter-1-4');
        img.setAttribute('src',fotos[orden1[3]]);
        img.setAttribute('class','mostrar');
        img.removeAttribute('onClick');
        id = img.getAttribute('id');
        clas = img.getAttribute('class');
        n = 4;
        cl = 1;
        select(img.getAttribute('src'));
    }
    if(numero == 5){
        const column = document.getElementById('columna-2');
        const img = document.getElementById('inter-2-1');
        img.setAttribute('src',fotos[orden1[4]]);
        img.setAttribute('class','mostrar');
        img.removeAttribute('onClick');
        id = img.getAttribute('id');
        clas = img.getAttribute('class');
        n = 5;
        cl = 2;
        select(img.getAttribute('src'));
    }
    if(numero == 6){
        const column = document.getElementById('columna-2');
        const img = document.getElementById('inter-2-2');
        img.setAttribute('src',fotos[orden1[5]]);
        img.setAttribute('class','mostrar');
        img.removeAttribute('onClick');
        id = img.getAttribute('id');
        clas = img.getAttribute('class');
        n = 6;
        cl = 2;
        select(img.getAttribute('src'));
    }
    if(numero == 7){
        const column = document.getElementById('columna-2');
        const img = document.getElementById('inter-2-3');
        img.setAttribute('src',fotos[orden1[6]]);
        img.setAttribute('class','mostrar');
        img.removeAttribute('onClick');
        id = img.getAttribute('id');
        clas = img.getAttribute('class');
        n = 7;
        cl = 2;
        select(img.getAttribute('src'));
    }
    if(numero == 8){
        const column = document.getElementById('columna-2');
        const img = document.getElementById('inter-2-4');
        img.setAttribute('src',fotos[orden1[7]]);
        img.setAttribute('class','mostrar');
        img.removeAttribute('onClick');
        id = img.getAttribute('id');
        clas = img.getAttribute('class');
        n = 8;
        cl = 2;
        select(img.getAttribute('src'));
    }
    if(numero == 9){
        const column = document.getElementById('columna-3');
        const img = document.getElementById('inter-3-1');
        img.setAttribute('src',fotos[orden2[0]]);
        img.setAttribute('class','mostrar');
        img.removeAttribute('onClick');
        id2 = img.getAttribute('id');
        clas2 = img.getAttribute('class');
        n2 = 9;
        cl = 3;
        confirm(img.getAttribute('src'));
    }
    if(numero == 10){
        const column = document.getElementById('columna-3');
        const img = document.getElementById('inter-3-2');
        img.setAttribute('src',fotos[orden2[1]]);
        img.setAttribute('class','mostrar');
        img.removeAttribute('onClick');
        id2 = img.getAttribute('id');
        clas2 = img.getAttribute('class');
        n2 = 10;
        cl = 3;
        confirm(img.getAttribute('src'));
    }
    if(numero == 11){
        const column = document.getElementById('columna-3');
        const img = document.getElementById('inter-3-3');
        img.setAttribute('src',fotos[orden2[2]]);
        img.setAttribute('class','mostrar');
        img.removeAttribute('onClick');
        id2 = img.getAttribute('id');
        clas2 = img.getAttribute('class');
        n2 = 11;
        cl = 3;
        confirm(img.getAttribute('src'));
    }
    if(numero == 12){
        const column = document.getElementById('columna-3');
        const img = document.getElementById('inter-3-4');
        img.setAttribute('src',fotos[orden2[3]]);
        img.setAttribute('class','mostrar');
        img.removeAttribute('onClick');
        id2 = img.getAttribute('id');
        clas2 = img.getAttribute('class');
        n2 = 12;
        cl = 3;
        confirm(img.getAttribute('src'));
    }
    if(numero == 13){
        const column = document.getElementById('columna-4');
        const img = document.getElementById('inter-4-1');
        img.setAttribute('src',fotos[orden2[4]]);
        img.setAttribute('class','mostrar');
        img.removeAttribute('onClick');
        id2 = img.getAttribute('id');
        clas2 = img.getAttribute('class');
        n2 = 13;
        cl = 4;
        confirm(img.getAttribute('src'));
    }
    if(numero == 14){
        const column = document.getElementById('columna-4');
        const img = document.getElementById('inter-4-2');
        img.setAttribute('src',fotos[orden2[5]]);
        img.setAttribute('class','mostrar');
        img.removeAttribute('onClick');
        id2 = img.getAttribute('id');
        clas2 = img.getAttribute('class');
        n2 = 14;
        cl = 4;
        confirm(img.getAttribute('src'));
    }
    if(numero == 15){
        const column = document.getElementById('columna-4');
        const img = document.getElementById('inter-4-3');
        img.setAttribute('src',fotos[orden2[6]]);
        img.setAttribute('class','mostrar');
        img.removeAttribute('onClick');
        id2 = img.getAttribute('id');
        clas2 = img.getAttribute('class');
        n2 = 15;
        cl = 4;
        confirm(img.getAttribute('src'));
    }
    if(numero == 16){
        const column = document.getElementById('columna-4');
        const img = document.getElementById('inter-4-4');
        img.setAttribute('src',fotos[orden2[7]]);
        img.setAttribute('class','mostrar');
        img.removeAttribute('onClick');
        id2 = img.getAttribute('id');
        clas2 = img.getAttribute('class');
        n2 = 16;
        cl = 4;
        confirm(img.getAttribute('src'));
    }

    perder();
  puntuacion();

}

function select(src){
    switch(src){
        case 'img/perro.jpg':
            seleccion = 'perro';
            break;
        case"img/gato.jpg":
            seleccion = "gato";
            break;
        case"img/conejo.jpg":
            seleccion = "conejo";
            break;
        case"img/hamster.jpeg":
            seleccion = "hamster";
            break;
         case"img/guacamaya.jpg":
            seleccion = "guacamaya";
            break;
        case"img/perico.jpg":
            seleccion = "perico";
            break;
         case"img/conejilla.jpg":
            seleccion = "conejilla";
            break;
         case"img/cerdo.jpg":
            seleccion = "cerdo";
            break;
    }
}

function confirm(src){
    switch(src){
        case 'img/perro.jpg':
            confirmacion = 'perro';
            break;
        case"img/gato.jpg":
        confirmacion = "gato";
            break;
        case"img/conejo.jpg":
        confirmacion = "conejo";
            break;
        case"img/hamster.jpeg":
        confirmacion = "hamster";
            break;
         case"img/guacamaya.jpg":
         confirmacion = "guacamaya";
            break;
        case"img/perico.jpg":
        confirmacion = "perico";
            break;
         case"img/conejilla.jpg":
         confirmacion = "conejilla";
            break;
         case"img/cerdo.jpg":
         confirmacion = "cerdo";
            break;
    }
   
}

function limpiar(){
   seleccion = undefined;
   confirmacion = undefined;
}

function puntuacion(){

    const punt = document.getElementById('puntos');
    const vid = document.getElementById('vidas');
    const rach = document.getElementById('racha');
    if(seleccion != undefined){
        if(confirmacion != undefined){

            if(confirmacion == seleccion){
                puntos++;
                racha++;
              limpiar();
              perder();
              count = 0;
              rach.innerText = 'Racha: '+racha;
                punt.innerText = 'Puntos: '+puntos;
            }else{
                vidas--;
                racha =0; 
                limpiar();
                inter(mantener)
                perder();
                //inter();
                count =0;
                rach.innerText = 'Racha: '+racha;
                vid.innerText = 'Vidas: '+vidas;
            }
        }else{
            if(count>1){
                vidas--;
                racha =0;
                rach.innerText = 'Racha: '+racha;
                vid.innerText = 'Vidas: '+vidas;
                count =0;
                limpiar();
                inter(mantener)
                perder();
               
            }
        }

    }else{
        if(confirmacion != undefined && count>1){
            vidas--;
                vid.innerText = 'Vidas: '+vidas;
                count =0;
                racha =0;
                rach.innerText = 'Racha: '+racha;
                inter(mantener);
                perder();
                limpiar();
                
              
        }
    }

}



function perder(){
    if(vidas == 0){
        $('.modal').modal('show');
    }else{
        $('.modal').modal('hide');
    }
}
aleatorio();

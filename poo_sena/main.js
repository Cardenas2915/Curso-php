function promedio() {
    var mensaje = document.querySelector('#mensaje');
    var cantidad = parseInt(prompt("cuantas notas desea ingresar"));
    var notas = 0;
    var promedio = 0;
    
    for (let suma = 1; suma<=cantidad; suma++) {
        notas = parseInt(prompt("Ingresa notas"));

        promedio = notas + promedio;

    }

    promedio = promedio / cantidad;
    promedio=promedio.toFixed(1);

    if(promedio <= 59){
        mensaje.innerHTML = "<h1 class='notification is-info is-light title is-3'>su nota es " + promedio +" su promedio es bajo</h1>";
        
    } else if(promedio <= 69){
        mensaje.innerHTML = "<h1 class='notification is-info is-light title is-3'>su nota es " + promedio +" su promedio es basico</h1>";

    } else if(promedio <= 79){
        mensaje.innerHTML = "<h1 class='notification is-info is-light title is-3'>su nota es " + promedio +" su promedio es alto</h1>";

    } else if(promedio <= 100){
        mensaje.innerHTML = "<h1 class='notification is-info is-light title is-3'>su nota es " + promedio +" su promedio es superior</h1>";
    }
}





function validacion(){

    var mensaje = document.querySelector('#mensaje');
    var caracter = prompt("ingrese su informacion");
    
while(caracter===""){
    alert("ingrese un caracter valido");
    caracter = prompt("ingrese su informacion");
    
}

if(isNaN(caracter)=== true){
    mensaje.innerHTML = "<h1 class='notification is-info is-light title is-3'>Ingresaste una cadena de texto</h1>";

}else{
    mensaje.innerHTML ="<h1 class='notification is-info is-light title is-3'>Ingresaste un numero</h1>";
}
    
}



function generar(){

    var mensaje = document.querySelector('#mensaje');
    var numero = Math.random()*100;
    numero = Math.round(numero)
    
    mensaje.innerHTML = "<h1 class='notification is-info is-light title is-1'>" + numero + "</h1>"
}



function numeros(){


    var ms1 = document.querySelector('#ms1');
    var ms2 = document.querySelector('#ms2');
    var ms3 = document.querySelector('#ms3');

        var numero1 = Math.random()*100;
        numero1 = Math.round(numero1);
        
        ms1.innerHTML = "<h1 class='button box title is-2'>" + numero1 + "</h1>"

        var numero2 = Math.random()*100;
        numero2 = Math.round(numero2);

        if(numero1 == numero2){
            numero1++;
        }
            ms2.innerHTML = "<h1 class='button box title is-2'>" + numero2 + "</h1>"

        var numero3 = Math.random()*100;
        numero3 = Math.round(numero3);

        if(numero2 == numero3 || numero1 == numero3){
            numero3++;
        }
            ms3.innerHTML = "<h1 class='button box title is-2'>" + numero3 + "</h1>"
        
        
        
}

function mayor() {

    var mensajeMayor = document.querySelector('#mensajeMayor');
    var nombre1 = document.querySelector('#nombre1');
    var nombre2 = document.querySelector('#nombre2');
    var nombre3 = document.querySelector('#nombre3');

    var edad1 = document.querySelector('#edad1');
    var edad2 = document.querySelector('#edad2');
    var edad3 = document.querySelector('#edad3');


    var persona1 = prompt("Ingrese el nombre de la primera persona");
    var edadP1 = prompt("Ingrese su edad");

    var persona2 = prompt("Ingrese el nombre de la segunda persona");
    var edadP2 = prompt("Ingrese su edad");

    var persona3 = prompt("Ingrese el nombre de la tercera persona");
    var edadP3 = prompt("Ingrese su edad");

    nombre1.innerHTML = '<p>' + persona1 + '</p>'
    nombre2.innerHTML = '<p>' + persona2 + '</p>'
    nombre3.innerHTML = '<p>' + persona3 + '</p>'

    edad1.innerHTML = '<p>' + edadP1 + '</p>'
    edad2.innerHTML = '<p>' + edadP2 + '</p>'
    edad3.innerHTML = '<p>' + edadP3 + '</p>'

    if(edadP1 > edadP2 && edad1 > edadP3){
        mensajeMayor.innerHTML = "<h1 class='button box title is-2'>" + persona1 + " es mayor</h1>"
    }
    
    if(edadP2 > edadP1 && edad2 > edadP3){
        mensajeMayor.innerHTML = "<h1 class='button box title is-2'>" + persona2 + " es mayor</h1>"
    }

    if(edadP3 > edadP1 && edadP3 > edadP2){
        mensajeMayor.innerHTML = "<h1 class='button box title is-2'>" + persona3 + " es mayor</h1>"
    }

}
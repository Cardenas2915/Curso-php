function promedio() {

    var cantidad = parseInt(prompt("Ingresa  cuantas notas desea ingresar"));
    var notas = 0;
    var promedio = 0;
    
    for (let suma = 1; suma<=cantidad; suma++) {
        notas = parseInt(prompt("Ingresa notas"));

        promedio = notas + promedio;

    }

    promedio = promedio / cantidad;
    promedio=promedio.toFixed(1);

    if(promedio <= 59){
        document.write("su nota es "  + promedio +  " usted tiene un desempeño bajo");
        
    } else if(promedio <= 69){
        document.write("su nota es "  + promedio +  " usted tiene un desempeño basico");

    } else if(promedio <= 79){
        document.write("su nota es "  + promedio +  " usted tiene un desempeño alto");

    } else if(promedio <= 100){
        document.write("su nota es "  + promedio +  " usted tiene un desempeño superior");
    }
}






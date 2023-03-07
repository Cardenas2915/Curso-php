<?php

class Saiyajin{

    public string $nombre;
    public int $nivel_pelea;

    public function __construct($nombre,$nivel_pelea){
        $this->nombre=$nombre;
        $this->nivel_pelea=$nivel_pelea;
    }

    public function saludar($texto="hola soy "){
        return $texto.$this->nombre;

    }

    public function NivelDePelea(){
    return $this->nombre." tiene un nivel de pelea de ".$this->nivel_pelea;
    }
}

$goku = new Saiyajin("goku",1000);
echo $goku->saludar();
//var_dump($goku) esto es para ver que tipo de datos es esta variable

echo '<br>';
echo '<br>';

$vegueta = new Saiyajin("vegeta",950);
echo $vegueta->saludar("mi nombre es ");
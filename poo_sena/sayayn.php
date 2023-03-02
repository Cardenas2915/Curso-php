<?php

class Saiyajin{

    public string $nombre="Goku";
    public int $nivel_pelea=1000;

    public function saludar(){
        return "hola soy ".$this->nombre

    }

    public function NivelDePelea(){
    return $this->nombre." tiene un nivel de pelea de ".$this->nivel_pelea
    }
}

$goku = new Saiyajin();
//var_dump($goku) esto es para ver que tipo de datos es esta variable

echo $goku->nombre;
echo $goku->NivelDePelea();

$vegueta = new Saiyajin();
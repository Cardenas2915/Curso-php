<?php


date_default_timezone_set("America/El_Salvador");


function fecha_español(){

    $fecha_dia = date("d");
    $fecha_mes = date("m");
    $fecha_year = date("Y");

    $dia_semana = [
        "Monday" => "Lunes",
        "Tuesday" => "Martes",
        "Wednesday" => "Miercoles",
        "Thursday" => "Jueves",
        "Friday" => "Viernes",
        "Saturday" => "Sabado",
        "Sunday" => "Domingo"

    ];

    $mes_year = [
        "01" => "Enero",
        "02" => "Febrero",
        "03" => "Marzo",
        "04" => "Abril",
        "05" => "Mayo",
        "06" => "Junio"
    ];

    $fecha_final = $dia_semana[date("l")]. " " . $fecha_dia . " " . $mes_year[$fecha_mes] . " de " . $fecha_year ; 

    return $fecha_final;

}

echo fecha_español();

echo "<br>";

function fecha_corta($fecha = ""){

    if($fecha == ""){
        $fecha = date("d-m-Y");

    }else{
        $fecha = date("d-m-Y",strtotime($fecha));
    }

    $fecha = explode("-",$fecha);

    $fecha_dia = $fecha[0];
    $fecha_mes = $fecha[1];
    $fecha_year = $fecha[2];

    $dia_semana = [
        "Monday" => "Lunes",
        "Tuesday" => "Martes",
        "Wednesday" => "Miercoles",
        "Thursday" => "Jueves",
        "Friday" => "Viernes",
        "Saturday" => "Sabado",
        "Sunday" => "Domingo"

    ];

    $mes_year = [
        "01" => "Enero",
        "02" => "Febrero",
        "03" => "Marzo",
        "04" => "Abril",
        "05" => "Mayo",
        "06" => "Junio"
    ];

    $fecha_final = $fecha_dia . " " . $mes_year[$fecha_mes] . " de " . $fecha_year ; 

    return $fecha_final;

}

echo fecha_corta("06/03/2023");

echo "<br>";

?>
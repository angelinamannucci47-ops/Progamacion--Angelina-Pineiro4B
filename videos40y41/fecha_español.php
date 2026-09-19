<?php 

date_default_timezone_set("America/El_Salvador");
function fecha_espanol_larga(){
}
echo fecha_espanol_larga();

echo "<br>";
function fecha_espanol_corta($fecha=""){

    if($fecha==""){
        $fecha=date("d-m-Y");
    }else{
        $fecha=date("d-m-Y", strtotime($fecha));
    }

    $fecha=explode("-", $fecha);

    $fecha_dia=$fecha[0];
    $fecha_mes=$fecha[1];
     $fecha_year=$fecha[2];


     $mese_year=[
         "01"=>"Enero",
         "02"=>"Febrero",
         "03"=>"Marzo",
         "04"=>"Abril",
         "05"=>"Mayo",
         "06"=>"Junio",
         "07"=>"Julio",
         "08"=>"Agosto",
         "09"=>"Septiembre",
         "10"=>"Octubre",
         "11"=>"Noviembre",
         "12"=>"Diciembre",

     ];

     $fecha_final=$fecha_dia." de "." ".$mese_year[$fecha_mes]." de ". $fecha_year;
     return $fecha_final;
}
echo fecha_espanol_corta();

echo "<br>";
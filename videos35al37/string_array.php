<?php
$fecha_1="2021/11/29";
$fecha_2="2021/11/30";
$numeros= "Uno Dos Tres Cuatro Cinco Seis Siete";

#1 para convertirlos en array:

$array_fecha=explode("/","$fecha_1");

echo $array_fecha[0];
echo "<br>";
#2
$fecha_1="2021-11-29";
$fecha_2="2021-11-30";
$numeros= "Uno Dos Tres Cuatro Cinco Seis Siete";

$array_fecha=explode("-","$fecha_2");

echo $array_fecha[2];

echo "<br>";
#3
$fecha_1="2021-11-29";
$fecha_2="2021-11-30";
$numeros= "Uno Dos Tres Cuatro Cinco Seis Siete";

$array_fecha=explode("-","$fecha_2");

echo $array_fecha[1];
echo "<br>";
#4
$fecha_1="2021-11-29";
$fecha_2="2021-11-30";
$numeros= "Uno Dos Tres Cuatro Cinco Seis Siete";

$array_numeros=explode(" ",$numeros);

echo $array_numeros[6];
echo "<br>";

#5
$fecha_1="2021-11-29";
$fecha_2="2021-11-30";
$numeros= "Uno Dos Tres Cuatro Cinco Seis Siete";

$array_numeros=explode(" ",$numeros);

echo $array_numeros[2];
echo "<br>";

#6
$fecha_1="2021-11-29";
$fecha_2="2021-11-30";
$numeros= "Uno Dos Tres Cuatro Cinco Seis Siete";

$array_numeros=explode(" ",$numeros,2);

echo $array_numeros[0];
echo "<br>";

#7
$fecha_1="2021-11-29";
$fecha_2="2021-11-30";
$numeros= "Uno Dos Tres Cuatro Cinco Seis Siete";

$array_numeros=explode(" ",$numeros,2);

echo $array_numeros[1];
echo "<br>";

#8
$fecha_1="2021-11-29";
$fecha_2="2021-11-30";
$numeros= "Uno Dos Tres Cuatro Cinco Seis Siete";

$array_numeros=explode(" ",$numeros,3);

echo $array_numeros[2];
echo "<br>";

#9
$fecha_1="2021-11-29";
$fecha_2="2021-11-30";
$numeros= "Uno Dos Tres Cuatro Cinco Seis Siete";

$array_numeros=explode(" ",$numeros,3);

echo $array_numeros[1];
echo "<br>";

#10
$fecha_1="2021-11-29";
$fecha_2="2021-11-30";
$numeros= "Uno Dos Tres Cuatro Cinco Seis Siete";

$array_numeros=explode(" ",$numeros,-1);

echo $array_numeros[5];
echo "<br>";

#11
$fecha_1="2021-11-29";
$fecha_2="2021-11-30";
$numeros= "Uno Dos Tres Cuatro Cinco Seis Siete";

$array_numeros=explode(" ",$numeros,-2);

echo $array_numeros[4];
echo "<br>";
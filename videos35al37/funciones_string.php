<?php
#1
$cadena_texto="Hola mundo";

echo strtolower($cadena_texto);
echo "<br>";

#2
$cadena_texto1="Hola mundo";
$cadena_texto1= strtolower($cadena_texto1);
echo $cadena_texto1;

echo "<br>";

#3
$cadena_texto2="Hola mundo";
$cadena_texto2= strtoupper($cadena_texto2);
echo $cadena_texto2;

echo "<br>";

#4
$cadena_texto3="Hola mundo";
$cadena_texto3= ucfirst($cadena_texto3);
echo $cadena_texto3;

echo "<br>";

#4
$cadena_texto4="Hola mundo";
$cadena_texto4= ucwords($cadena_texto4);
echo $cadena_texto4;

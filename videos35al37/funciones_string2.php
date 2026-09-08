<?php
#1
$cadena_texto="Hola mundo";

$longitud=strlen($cadena_texto);

echo $longitud;
echo "<br>";

#2
$cadena_texto="Hola mundo";

$longitud=strlen($cadena_texto);

echo $cadena_texto." tiene ".$longitud." caracteres";
echo "<br>";


#3
$cadena_texto="Hola mundo";

$longitud=strlen($cadena_texto);

echo $cadena_texto." tiene ".$longitud." caracteres";
echo "<br>";

$palabras=str_word_count($cadena_texto);

echo $cadena_texto." tiene ".$palabras." palabras";
echo "<br>";

#4
$cadena_texto="Hola mundo php";

$longitud=strlen($cadena_texto);

echo $cadena_texto." tiene ".$longitud." caracteres";
echo "<br>";

$palabras=str_word_count($cadena_texto);

echo $cadena_texto." tiene ".$palabras." palabras";
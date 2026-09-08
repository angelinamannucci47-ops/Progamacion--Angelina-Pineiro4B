<?php
#ej1
echo "Ej 1";
echo "<br>";
$cadena_texto="Hola Mundo";
echo $cadena_texto." es una: ";

$longitud=strlen($cadena_texto);

if ($longitud > 5):
    echo " Cadena es larga";
else:
    echo " Cadena es corta";
endif;

echo "<br>";
echo "<br>";
echo "<br>";

#ej2 Crear un programa en PHP que utilice un ciclo do while para mostrar los números del 1 al 5. El programa debe comenzar con el número 1 y aumentar su valor en cada repetición hasta llegar al número 5.
echo "Ej 2";
echo "<br>";
$cadena_texto="Hola Mundo";
echo $cadena_texto." es una: ";

$longitud=strlen($cadena_texto);

if ($longitud > 5):
    echo " Cadena es larga";
else:
    echo " Cadena es corta";
endif;

echo "<br>";


$numero=1;
do {
echo $numero;
echo "<br>";

$numero++;
}while ($numero <= 5);
echo "<br>";
echo "<br>";
echo "<br>";

#ej3 utilice una variable booleana para indicar si una palabra fue encontrada en un array. Si el valor es true, mostrar "La palabra fue encontrada". Si el valor es false, mostrar "La palabra no fue encontrada".
echo "Ej 3";
echo "<br>";
$numeros= "Uno Dos Tres Cuatro Cinco Seis Siete";

$array_numeros=explode(" ",$numeros);

$encontrado=true;

if ($encontrado):
    echo " La palabra fue encontrada";
else:
    echo " La palabra no fue encontrada";
endif;
echo "<br>";
echo "<br>";
echo "<br>";
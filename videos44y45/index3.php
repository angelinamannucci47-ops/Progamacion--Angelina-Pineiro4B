<?php

#1para probarlo ir borrando para que te quede solo es que probas, si no no te sirve sidejas los otros
var_dump($_POST['asignatura']);

#2
$materas=$_POST['asignatura'] ;
#2 para que salga el nombre de la asiganrura uno abajo del otro
foreach($_POST['asignatura'] as $asignatura){
    echo $asignatura;
    echo "<br>";
}

echo "<br>";
echo "<br>";
echo "<br>";

$fresa=$_POST['frutas'];  #este array tiene todos los datos que estamos envando desde el formulario
foreach($fresa as $fruta){ # queremos recorrer el array $fresa en una variable llamada $fruta
    echo $fruta;
    echo "<br>";
}
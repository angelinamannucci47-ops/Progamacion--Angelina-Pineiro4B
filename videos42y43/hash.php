<?php

#1 - Antiguo
$clave="HolaMundo123";
echo md5($clave);
echo "<br>";

#2 - Antiguo
$clave="HolaMundo123";
echo sha1($clave);
echo "<br>";

#3 
$clave="HolaMundo123";
echo hash("md5", $clave);
echo "<br>";

#4, con ambas funciones se obtiene el mismo resultado
$clave="HolaMundo123";
echo hash("md5", $clave);
echo "<br>";
echo md5($clave);
echo "<br>";

#5
$clave="HolaMundo123";
echo hash("md5", $clave);
echo "<br>";

foreach(hash_algos() as $algoritmos){
    echo $algoritmos."<br>";
}

#6
$clave="HolaMundo123";
echo hash("md5", $clave);
echo "<br>";

foreach(hash_algos() as $algoritmos){
    echo $algoritmos."  -  ".hash($algoritmos,$clave)."<br>";
}

#7 - más recomendable de usar... cada vez que recargues la pag, sale una contraseña diferen¿nte
$clave="HolaMundo123";

echo password_hash($clave,PASSWORD_DEFAULT);
echo "<br>";

#8
$clave="HolaMundo123";

echo password_hash($clave,PASSWORD_BCRYPT);
echo "<br>";

#9
$clave="HolaMundo123";

echo password_hash($clave,PASSWORD_BCRYPT,["cost"=>10]);
echo "<br>";

#10
$clave="HolaMundo123";

echo password_hash($clave,PASSWORD_BCRYPT,["cost"=>11]);
echo "<br>";

#11 como verificar un hash:
$clave="HolaMundo123";

$clave_procesada=password_hash($clave,PASSWORD_BCRYPT,["cost"=>11]);

echo password_verify($clave,$clave_procesada);
echo "<br>";

#12
$clave="HolaMundo123";

$clave_procesada=password_hash($clave,PASSWORD_BCRYPT,["cost"=>11]);

if(password_verify($clave,$clave_procesada)){
    echo "Las claves coinciden";
}

echo "<br>";


#13
$clave="HolaMundo123";

$clave_procesada=password_hash($clave,PASSWORD_BCRYPT,["cost"=>11]);

$clave_2="1234567";

if(password_verify($clave_2,$clave_procesada)){
    echo "Las claves coinciden";
}else{
     echo "Las claves no coinciden";
}

echo "<br>";
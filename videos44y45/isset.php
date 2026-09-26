<?php
#ej1
$numero=NULL;

if(is_null($numero)){
    echo "Es nula";
}else{
    echo "No es nula";
}
echo "<br>";


#ej2 unset sirve para eliminar la variable 
$numero1="9";

unset($numero1);

if(is_null($numero1)){
    echo "Es nula";
}else{
    echo "No es nula";
}

echo "<br>";
echo "<br>";

#ej3
$numero2="9";

if(is_null($numero2)){
    echo "Es nula";
}else{
    echo "No es nula";
}
echo "<br>";
echo "<br>";
#ej4
$numero3="9";

if(empty($numero3)){
    echo "Esta vacía";
}else{
    echo "No esta vacía";
}
echo "<br>";
echo "<br>";

#ej5
$numero3=0;

if(empty($numero3)){
    echo "Esta vacía";
}else{
    echo "No esta vacía";
}

echo "<br>";
echo "<br>";

#ej6
$numero3="";

if(empty($numero3)){
    echo "Esta vacía";
}else{
    echo "No esta vacía";
}

echo "<br>";
echo "<br>";

#ej7
$numero=$_GET['numero'];

if(isset($numero)){
    echo "Esta definida";
}else{
    echo "No esta definida";
}
echo "<br>";
echo "<br>";
#ej8
$numero=NULL;

if(isset($numero)){
    echo "Esta definida";
}else{
    echo "No esta definida";
}
echo "<br>";
echo "<br>";

#ej9
$numero=7;

if(isset($numero)){
    echo "Esta definida";
}else{
    echo "No esta definida";
}
echo "<br>";
echo "<br>";

#ej10
$numero=7;
unset($numero);
if(isset($numero)){
    echo "Esta definida";
}else{
    echo "No esta definida";
}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="for.php" method="POST">
    <input type="text" name="numero">
    <button type="submit">Enviar</button>
</form>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="GET">

    <div>
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre">
    </div>

    <br>

    <label for="asignatura">Asignatura</label>
    <select id="asignatura" name="asignatura">
        <option value="ingles">Inglés</option>
        <option value="matematicas">Matemáticas</option>
        <option value="ciencia">Ciencia</option>
        <option value="lenguajes">Lenguajes</option>
    </select>

    <br><br>

    <label for="option-1">
    <input type="checkbox" value="Manzana" id="option-1" name="frutas">
    Manzana
    </label>

    <br><br><br>

    <button type="submit">Enviar</button>

</form>


</body>
</html>
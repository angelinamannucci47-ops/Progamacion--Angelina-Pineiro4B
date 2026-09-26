<title>Document</title>
</head>
<body>

    <form action="index3.php" method ="POST">
       

        <label for="asignatura">Asignatura</label> 
        <select id="asignatura" name="asignatura[]" multiple  >  <!--para seleccionar mas de una opcion al mismo tiempo. con esto decimos que es un array: asignatura[] -->
            <option value="Ingles">Ingles</option>
            <option value="Matematicas">Matemáticas</option>
            <option value="Ciencia">Ciencia</option>
            <option value="Lenguaje">Lenguaje</option>
        </select>

        <br><br>

        <br><br>

        <label for="opcion-1">
            <input type="checkbox" value="Manzana" id="opcion-1" name="frutas[]"> <!--se le pone corchetes para decir que es un array de datos -->
            Manzana
        </label>

        
        <label for="opcion-2">
            <input type="checkbox" value="Fresa" id="opcion-2" name="frutas[]">
            Fresa
        </label>

        
        <label for="opcion-3">
            <input type="checkbox" value="Uva" id="opcion-3" name="frutas[]">
            Uva
        </label>

        <br><br><br>

        <button type="submit" >Enviar</button>
    </form>

</body>
</html>
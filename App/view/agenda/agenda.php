<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <div class="formulario">
            <form action="../../controller/Armazenar.php" method="GET">
                <input type="text" name="titulo" placeholder="Título" required><br><br>
                <textarea name="descricao" id="" placeholder="Descrição" required></textarea><br><br>
                <input type="date" name="data" required><br><br>
                <input type="submit" value="Cadastrar">
            </form>
        </div>
    </body>
</html>
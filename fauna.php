<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AprendendoPHP</title>
    <style>
        body {
            background-color: greenyellow;
        }
    </style>
</head>

<body>
    <form action="flora.php" method="get">
        Nome: <input type="text" name="nome"><br>
        Ano de Nascimento: <input type="number" name="ano"><br>
        <fieldset>
            <legend>sexo</legend>
            <input type="radio" name="sexo" id="masc" value="homem"/>
            <label for="masc">Masculino</label><br>
            <input type="radio" name="sexo" id="fem" value="mulher"/>
            <label for="fem">feminino</label>
        </fieldset><br />
        <input type="submit" value="Enviar" />

    </form>

</body>

</html>
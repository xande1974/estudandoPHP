<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codigos PHP</title>
</head>

<body>
    <?php
    $nome = $_GET['nome'];
    $ano = $_GET['ano'];
    $sexo = $_GET['sexo'];
    
    $idade = date("Y") - $ano;
    echo "Eu sou $nome sou $sexo e tenho $idade anos de idade";
    echo "<br>";
   
    ?>
    <a href="fauna.php">voltar</a>

</body>

</html>
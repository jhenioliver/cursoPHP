<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dados pessoais</title>
</head>
<body>
    <?php

    //para não dar erro ao abrirmos o arquivo php antes do html, vamos usar o operador ternário
    //além disso, o 'isset' que significa "foi consfigurado/se foi passado como parâmetro"

    $nome = isset ($_GET["nNome"])?$_GET["nNome"]:["Nome não informado"];
    $sexo = isset ($_GET["nSexo"])?$_GET["nSexo"]:["Sexo não informado"];
    $ano = isset ($_GET["nAno"])?$_GET["nAno"]:0;
    $idade = date("Y") - $ano;

    //a função date traz a data atual
    //o Y em maiusculo traz o ano com 4 digitos (2023), já o y em minusculo traz com 2 digitos (23)
    //para uma data completa: date("D/M/Y");

    echo "$nome é $sexo e tem $idade anos! </br>";

    ?>
</body>
</html>
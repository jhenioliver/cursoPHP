<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis no PHP</title>
</head>
<body>
    <?php

        $num = 4;
        $num2 = (int) 5;
        $resultado = 9;
        //o PHP identifica a variável (coersão), não precisa declarar.
        //mas pode forças a conversão
        //inteiro(int), real (real) e caractere(string).
        echo $num;

        //para fazer a concatenação, há duas formas
        //usando ponto (.) para separar:
        echo $num." somado com ".$num2." é igual a ".$resultado ;

        //ou apenas colocando tudo junto DENTRO DE ASPAS DUPLAS, o PHP vai reconhecer por causa do $ da variável.
        $nome = "jheniffer";
        $idade = 17;
        echo "$nome tem $idade anos!";
        
        //lembrar que o PHP faz diferença entre maiúscula e minúscula
                
    ?>
</body>
</html>
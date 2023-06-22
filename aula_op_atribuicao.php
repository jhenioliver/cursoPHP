<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Atribuição</title>
</head>
<body>
    <h3>Operadores de Atribuição</h3>
   <?php

   /*os operadores de atribuição são usadas para substituir algumas atribuições nas variáveis
   quando a variavel no inicio se repete na atribuição
   por exemplo: $a = $a + $b
   o a repete na direita e esquerda da atribuição, por isso os operadores:*/
   $a = 2;
   $b = 3;

   $a = $a + $b;
   $a += $b;

   $a -= $b;
   $a *= $b;
   $a /= $b;
   $a %= $b;
   $a .= $b;

    //e quando a variável estiver especificamente recebendo ela mesma + 1, podemos substituir:
    $a = $a + 1;
    $a++;
    //o mesmo ocorre com menos:
    $a  = $a -1;
    $a--;

    //atividade: desconto em um produto
    $preco = $_GET["p"];
    echo "O preço do produto é R$ ".number_format($preco,2). "</br>";
    $preco -= $preco*10/100;
    echo "O preço do produto com 10% desconto é R$ ".number_format($preco,2). "</br>";
    ?>

    <h3>Operadores de Incremento</h3>

    <?php
    //operadores de incremento:
    //pré-incremento: primeiro vai incrementar o +1, e depois usar a variável
    $a = $a + 1;      //sem operador
    ++$a;            //com operador
    //pós-incremento: primeiro usa a variavel, e só depois incrementa o valor.
    $a ++;
    //pré-decremento: funciona da mesma forma que pré-incremento, mas decrementando o valor
    --$b;
    //pós-decremento:
    $b--;

    //atividade: ver o ano atual, anterior e o que vem
    $ano = $_GET["aa"];
    echo "O ano atual é: ".$ano."</br>";
    echo "O ano passado foi: ".--$ano."</br>";
    ?>

    <h3>Referências entre variáveis</h3>

    <?php
    //referência entre variáveis:
    //sem referência:
    $c = 3;  //o valor de c será 3
    $d = $c;  //o valor de d será o mesmo de c, ou seja, 3
    $d += 5;  //será d + 5, ou seja, 3+5=
    echo $c."</br>"; //porém, c continua com o mesmo valor inicial, 3
    echo $d."</br>"; //enquanto b vai ficar com o valor daquela soma, 8

    //com referência
    $e = 4;  //o valor de e será 3
    $f = &$e;  //f receberá o valor de e, ou seja, 3
    $f += 5; //o E comercial (&) é o caractere de referência
    //agora, as duas variáveis estão "conectadas", quando o valor de uma mudar, a outra muda também
    echo $e."</br>";
    echo $f."</br>";
    ?>

    <h3>Variáveis de variáveis</h3>

    <?php
    $x = "abc";
    $$x = 123;
    echo $x."</br>";
    echo $abc."</br>";  
    ?>
</body>
</html>
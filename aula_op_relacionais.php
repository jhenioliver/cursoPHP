<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Relacionais</title>
</head>
<body>
    <h3>Operadores Relacionais</h3>
    <?php
    
    $a = 10;
    $b = 5;

    $a > $b;  //maior
    $a < $b;  //menor
    $a >= $b;  //maior ou igual
    $a <= $b;  //menor ou igual
    $a <> $b; //diferente
    $a != $b; //diferente
    $a == $b; //igual (em valor)
    $a === $b; //igual e do mesmo tipo
    ?>

    <h3>Operador Unário</h3>
    <?php
    /*

    expressão?verdadeiro:falso

    exemplo:
        $maior= $a > $b ? $a : $b ; 
    se a for maior que b, então a variável "maior" irá receber o valor a, se não, irá receber o valor de b.
    
    em portugol, ficaria assim:
        Se (a>b) entao
            maior <- a
        senao
            maior <- b
        FimSe

    outros exemplos:

        $r= $a>$b ? $a+$b : $a-$b ;
    se a for maior que b, a variável r receberá a soma de a e b, se não, receberá a subtração.

        $situacao = $m<6 ? "recuperação" : "aprovado" ;
    se a média ($m) for menor que 6, a variável recebe "recuperação", se não, "aprovado".
    */

    //exercício 01

    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $c = $_GET["c"];

    echo "Os números recebidos foram: $n1 e $n2. </br>";
    echo "Digite na URL 's' para soma e 'm' para multiplicação. </br>";
     
    $r = ($c == "s")?$n1+$n2:$n1*$n2;

    echo "O resultado é $r. </br>";
    echo "</br>";

    //verificando se o número é igual ou idêntico

    $nm1 = "3";
    $nm2 = 3;
    $resp1 = ($nm1 === $nm2) ? "Idêntico" : "Não idêntico";
    $resp2 = ($nm1 == $nm2) ? "Igual" : "Não igual";
    echo "as variáveis nm1 e nm2 são IDÊNTICAS? $resp1 </br>";
    echo "as variáveis nm1 e nm2 são IGUAIS? $resp2 </br>";
    echo "</br>";

    //calcular a média e mostrar a situação do aluno (aprovado ou não)
    //e poupando variáveis usando o operador unário no echo:

    $nota1 = $_GET["nt1"];
    $nota2 = $_GET["nt2"];
    $media = (($nota1 + $nota2)/2);
    echo "Sua média entre sua nota $nota1 e $nota2 é $media. </br>";
    echo "Sua situação final é ".(($media >= 6) ? "Aprovado" : "Reprovado");
    echo "</br>"

    /*
    ao invés de criar uma variável situação e colocar o operador unário dentro, foi concatenado o texto
    do echo, e colocado toda a expressão unário dentro de parênteses.
    */
    ?>

    <h3>Operadores Lógicos</h3>

        <section class="op">
            <img src="operadores_logicos.png">
        </section>

        <style>
            .op {
                float: left;
            }

            .op img {
                width: 50%;
                height: 50%;
            }
        </style>

</body>
</html>
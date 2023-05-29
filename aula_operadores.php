<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritmeticos</title>
</head>
<body>
    <?php
    $n1 = 2;
    $n2 = 3;
    $s = $n1 + $n2;
    echo "A soma vale $s";

    //com outras operações:
    echo "A soma vale ". ($n1+$n2);
    echo "<br/> A subatracao vale ". ($n1-$n2);
    echo "<br/> A multiplicacao vale ". ($n1*$n2);
    echo "<br/> A divisao vale ". ($n1/$n2);
    echo "<br/> O modulo vale ". ($n1%$n2);

    //utilizando valores personalizados
    //no URL em que estamos executando o PHP no navegador, vai ser passado os parametros.
    //no fim da URL normal, adiciona, por exemplo "?a=3&b=5"
    //nas variaveis, iremos puxar os valores definidos para a & b.
    $nm1 = $_GET["a"];
    $nm2 = $_GET["b"];

    //agora o valor das variaveis, sera o valor passado na URL.
    echo "valores recebidos: $nm1 e $nm2";

    //outros operadores:
    
    echo "O valor absoluto de $nm1 e ". abs($nm1);
    //o valor absoluto sera o valor positivo dele.

    ?>
</body>
</html>

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
    echo "<h3> Valores recebidos no codigo: $n1 e $n2 </h3>";
    echo "A soma de $n1 e $n2 vale $s <br/>";

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
    echo "<h3> Valores recebidos na URL: $nm1 e $nm2 </h3>";

    //outros operadores:
    
    echo "<br/> O valor absoluto de $nm1 e ". abs($nm1);
    //o valor absoluto sera o valor positivo dele.

    echo "<br/> O valor de $nm1<sup>$nm2</sup> e ". pow($nm1, $nm2);
    //a tag html sup foi usada para colocar o nmero em potenciacao
    //e o pow fez a potenciacao

    echo "<br/> A raiz de $nm1 e ". sqrt($nm1);
    // sqrt = raiz quadrada

    echo "<br/> O valor de $nm2 arredondado e ". round($nm2);
    //roun = valor arredondado
    //pode ser utilizado ceil e floor tambem, basta substituir
    //o ceil arredonda sempre para cima, e floor sempre para baixo.

    echo "<br/> A parte inteira de $nm2 e ". intval($nm2);
    //vai mostrar a parte inteira do numero, como um trunc

    echo "<br/> O valor de $nm1 em moeda e ". number_format($nm1, 2, ",", ".");
    //(numero a ser formatado, o numero de casa decimais, o tipo de separador decimal e separador de milhar.)

    ?>
</body>
</html>

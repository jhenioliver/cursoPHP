<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calcular raiz</title>
</head>
<body>
    <?php
    $valor = $_GET["v"];
    $rq = sqrt($valor);
    echo "o valor enviado foi $valor </br>";
    echo "e a raiz quadrada de $valor é " . number_format($rq,2) . "</br>";
    ?>

    <a href="01exercicio.html">voltar</a>

</body>
</html>
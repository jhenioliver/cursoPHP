<!DOCTYPE html>
<html lang="pt-br">
<head>

    <?php
        $txt = isset($_GET["nTxt"])?$_GET["nTxt"]:"Texto Padrão";
        $tam = isset($_GET["nTam"])?$_GET["nTam"]:"15px";
        $cor = isset($_GET["nCor"])?$_GET["nCor"]:"#000000";
    ?>

    <style>
        span.texto{
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<span class='texto'>$txt</span>"
    ?>
</body>
</html>
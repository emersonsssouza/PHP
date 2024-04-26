<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de PHP</title>
</head>

<body>
    <h1>Testando PHP</h1>
    <?php 
        date_default_timezone_set("America/Sao_Paulo"); //GMT-3
        echo "Hoje é dia " . date("d/M/Y");
        echo "A hora atual é " . date("G:i:s");
    ?>
</body>

</html>
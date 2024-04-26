<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis e Constantes</title>
</head>

<body>
    <?php
        $nome = "Emerson";
        $sobrenome = "Santos";
        $nome = "Kaike";

        echo "Olá, $nome $sobrenome!";

        const PAIS = "Brasil";

        echo "muito prazer, $nome $sobrenome! Voce mora no " . PAIS ;
    ?>

    <?php 
        $nome = "Emerson";
        $salario = 1700;
        echo "Seu nome é $nome voce recebe R$: $salario Reais por mes ";      
    ?>

</body>

</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Gerador de números</title>
</head>

<body>
    <section class="box">
        <h1>Gerando um número aleatório</h1>
        <p>Gerando um número aleatório entre 0 e 100...</p>
        <?php
        //(rand) = 1951 - Linear congrential Generator;
        //mt_rand() = 1997 - Mersenne Twister;
        //ramdom_int() gera números aleatorios criptograficamente seguros;

            $numMin = 0;
            $numMax = 100;
            function numAleatorio($numMin, $numMax) {
                $geraNum = mt_rand($numMin, $numMax); 
                    echo "<p>O valor gerado foi: $geraNum </p>";
            }

            if(isset($_REQUEST['gerarNumero'])) {
                numAleatorio($numMin, $numMax);
            }
        ?>
        <form action="" method="post">
            <button type="submit" name="gerarNumero">Gerar outro número</button>
        </form>

    </section>
</body>

</html>
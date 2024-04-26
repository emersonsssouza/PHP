<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculando Idade</title>
</head>

<body>
    <?php
    ini_set('display_errors', 1);
    error_reporting(0);
    $DataAtual = date('Y');
    $verificarSubmit = isset($_REQUEST['num1, num2']) ? $_REQUEST['num1, num2'] : null;
    $nasc = $_REQUEST['num1'] ?? 0;
    $AnoIdade = $_REQUEST['num2'] ?? 0;
    $idade = abs(intval($nasc - $AnoIdade));

    ?>
    <main>
        <h1>Informe um Número</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get" onsubmit="return analisar()">
            <label for="numero">Em que ano voce nasceu?</label>
            <input type="number" name="num1" id="num" step="0.1">

            <label for="numero">Quer saber sua idade em que ano ?</label>
            <input type="number" name="num2" id="num" step="0.1" value="<?php echo $DataAtual ?>">

            <button type="submit" onclick="analisar()">Qual será minha idade?</button>

            <?php
            echo "<p>Atualmente estamos em $DataAtual</p>";
            ?>
        </form>

        <section>
            <h1>Resultado</h1>
            <div class=" container">
                <?php
                if ($AnoIdade < $nasc) {
                    echo "<p>Voce ainda não tinha nascido!</p>";
                } else if ($nasc == 0 || $nasc === 0) {
                    echo "<p>Preencha os dados corretamente por favor</p>";
                } else {
                    echo "<p>Quem nasceu em $nasc vai ter $idade anos em $AnoIdade </p>";
                }
                ?>
            </div>
        </section>
    </main>

    <script>
        function analisar() {
            let numInput = document.getElementById('num');
            let num = numInput.value;
            if (num === '') {
                numInput.style.border = '2px solid';
                numInput.style.borderColor = 'red';
                alert("Por favor, insira um valor para calcular!");
                return false;
            } else {
                numInput.style.borderColor = '';
                return true;
            }
        }
    </script>

</body>

</html>
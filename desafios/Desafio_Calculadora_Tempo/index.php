<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora de Tempo</title>
</head>

<body>
    <?php
    ini_set('display_errors', 1);
    error_reporting(0);
    $verificarSubmit = isset($_REQUEST['numero']) ? $_REQUEST['numero'] : null;
    $num = $_REQUEST['numero'] ?? 0;
    $sobra = $num;
    //Total de Semanas
    $semana = (int)($sobra / 604800);
    $sobra = $sobra % 604800;
    //Total de Dias
    $dia = (int)($sobra / 86400);
    $sobra = $sobra % 86400;
    //Total de Horas
    $hora = (int)($sobra / 3600);
    $sobra = $sobra % 3600;
    //Total de Minutos
    $minuto = (int)($sobra / 60);
    $sobra = $sobra % 60 /
        //Total de Segundos
        $segundo = $sobra % 60;
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get" onsubmit="return analisar()">
            <label for="numero">Qual é o total de segundos?</label>
            <input type="number" name="numero" id="num" step="0.1" value="0">
            <button type="submit" onclick="analisar()">Calcular</button>
        </form>

        <section>
            <h1>Resultado Final</h1>
            <div class="container">
                <?php
                echo  "<p>Analisando o valor que voce digitou</p>";
                echo "<p><strong>"  . number_format($num, 0, ".", ",") . " segundos</strong>,
                equivalem a um total de:</p>";
                echo "<p>✅" . number_format($semana, 0, ".", ",") . " Semanas</p>";
                echo "<p>✅" . number_format($dia, 0, ".", ",") . " Dias</p>";
                echo "<p>✅" . number_format($hora, 0, ".", ",") . " Horas</p>";
                echo "<p>✅" . number_format($minuto, 0, ".", ",") . " Minutos</p>";
                echo "<p>✅" . number_format($segundo, 0) . " Segundos</p>"
                ?>
            </div>
        </section>
    </main>

    <script>
        function analisar() {
            let numInput = document.getElementById('num');
            let num = numInput.value;
            if (num === '') {
                numInput.style.border = '2px solid'
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
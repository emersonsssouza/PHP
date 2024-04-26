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
    date_default_timezone_set('America/Sao_Paulo');
    $Data = date("d/m/Y");
    $Hora = date("H:i:s");
    $preço_Produto = $_REQUEST['preco'] ?? 0;
    $porcentagem = $_REQUEST['Reaj'] ?? 0;
    $reajuste = $preço_Produto *  ($porcentagem / 100);
    $novoValor = $preço_Produto + $reajuste;
    ?>
    <main>
        <h1>Informe um Número</h1>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get" onsubmit="return analisar()">
            <label for="numero">Preço do Produto?</label>
            <input type="number" name="preco" id="preco" step="0.1" value="0">

            <label for="reajuste">Qual será o percentual de reajuste <strong><span id="p"></span>%</strong>?</label>

            <input type="range" name="Reaj" id="Reaj" min="0" max="100" value="0" step="1" oninput="mudaValor()">

            <button type="submit" onclick="analisar()">Reajustar</button>
            <?php
            echo "<p>Data: $Data</p>";
            echo "<p>Hora: $Hora</p>"
            ?>
        </form>

        <section>
            <h1>Resultado do Reajuste</h1>
            <div class="container">
                <?php
                echo "<p>O produto que custava <strong>R$" . number_format($preço_Produto, 2, ",", ".") . " </strong> com <strong>$porcentagem" . '%' . " ", " de aumento </strong> ", "</p>";
                echo "<p>vai passar a custar <strong>R$" . number_format($novoValor, 2, ",", ".") . " </strong> a partir de agora</p>";
                ?>
            </div>
        </section>
    </main>

    <script>
    mudaValor()

    function mudaValor() {
        p.innerText = Reaj.value
    }

    function analisar() {
        let numInput = document.getElementById('preco');
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
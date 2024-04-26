<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Caixa Eletrônico</title>
</head>

<body>
    <?php
    ini_set('display_errors', 1);
    error_reporting(0);
    date_default_timezone_set('America/Sao_Paulo');
    $DataAtual = date("d/m/Y");
    $HoraAtual = date("H:i:s");
    $verificarSubmit = isset($_REQUEST['valorSaque']) ? $_REQUEST['valorSaque'] : null;

    $ValorSaque = $_REQUEST['valorSaque'] ?? 0;
    $Resto = $ValorSaque;

    $nota100 = floor($Resto / 100);
    $Resto %= 100;

    $nota50 = floor($Resto / 50);
    $Resto %= 50;

    $nota10 = floor($Resto / 10);
    $Resto %= 10;

    $nota05 = floor($Resto / 5);
    $Resto %= 5;
    ?>

    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get" onsubmit="return analisar()">
            <label for="numero">Qual valor voce deseja sacar? (R$)</label>
            <input type="number" name="valorSaque" id="valorSaque" step="5">
            <p>*Notas disponiveis: R$100, R$50, R$10</p>

            <button type="submit" onclick="analisar()">Sacar</button>
        </form>

        <section>
            <p>
                Saque de<strong>🤑R$</strong>
                <?php
                echo " <strong>" . number_format($ValorSaque, 2, ",", ".") .  " 💸 </strong>", "<br> realizado com sucesso em $DataAtual as $HoraAtual";
                ?>
            </p>

            <div class="container">
                <?php
                $image_Cedula_01 = "Cedulas/Cedula-100.jpg";
                $image_Cedula_02 = "Cedulas/Cedula-50.jpg";
                $image_Cedula_03 = "Cedulas/Cedula-10.jpg";
                $image_Cedula_04 = "Cedulas/Cedula-05.jpg";

                echo "<li><img src=\"$image_Cedula_01\" width=\"150\" height=\"50\"> X $nota100 💰</li>";

                echo "<li><img src=\"$image_Cedula_02\" width=\"150\" height=\"50\"> X $nota50 💰</li>";
                echo "<li><img src=\"$image_Cedula_03\" width=\"150\" height=\"50\"> X $nota10 💰</li>";
                echo "<li><img src=\"$image_Cedula_04\" width=\"150\" height=\"50\"> X $nota05 💰</li>";
                ?>
            </div>
        </section>
    </main>

    <script>
        function analisar() {
            let numInput = document.getElementById('valorSaque');
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
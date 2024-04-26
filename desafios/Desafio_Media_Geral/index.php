<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Media Geral</title>
</head>

<body>
    <main>
        <h1>Informe um Número</h1>
        <form action="index.php" method="get">
            <label for="numero">1º Valor</label>
            <input type="number" name="numero1" id="numero1" step="0.1" value="0">

            <label for="numero">1º Peso</label>
            <input type="number" name="peso1" id="peso1" step="0.1" value="0">

            <label for="numero">2º Valor</label>
            <input type="number" name="numero2" id="numero2" step="0.1" value="0">

            <label for="numero">2º Peso</label>
            <input type="number" name="peso2" id="peso2" step="0.1" value="0">

            <button type="submit">Calcular Médias</button>
        </form>

        <section>
            <h1>Cálculo das Médias</h1>
            <div class="container">
                <div class="text">
                    <?php
                    ini_set('display_errors', 0);
                    error_reporting(0);
                    $num1 = $_REQUEST['numero1'] ?? 0;
                    $num2 = $_REQUEST['numero2'] ?? 0;
                    $peso1 = $_REQUEST['peso1'] ?? 0;
                    $peso2 = $_REQUEST['peso2'] ?? 0;
                    echo "<p>Analisando os valores $num1 & $num2  </p>"
                    ?>

                    <?php
                    $soma_Art = intval($num1 + $num2) / 2;
                    $soma_Pdr = intval($peso1 * $num1 + $peso2 * $num2) / intval($peso1 + $peso2);
                    echo "<p>A <strong>Média Aritmetica Simplis</strong> entre os valores é igual a " . number_format($soma_Art, 2, ",", "") . "</p>";
                    echo "<p>A <strong>Média Ponderada</strong> com pesos $peso1 & $peso2 é igual a  "  . number_format($soma_Pdr, 2, ",", "") . "</p>";
                    ?>
                </div>
            </div>
        </section>
    </main>
</body>

</html>
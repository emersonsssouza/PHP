<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Anatomia da divisão</title>
</head>

<body>
    <?php
    ini_set('display_errors', 1);
    error_reporting(0);
    $verificarSubmit = isset($_REQUEST['salario']) ? $_REQUEST['salario'] : null;
    $salario = $_REQUEST['salario'] ?? $salario_minimo;
    $salario_minimo = 1420;
    $resto = $salario % $salario_minimo;
    $num_Salario_Minimo = $salario / $salario_minimo;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="index.php" method="get" onsubmit="return calcular()">
            <label for="salario">Sálario</label>
            <input type="number" name="salario" id="sal" step="0.1" value="0">

            <button type="submit" onclick="calcular()">Calcular</button>
            <p id="text-salario">Sálario mínimo atual: R$: <?php echo number_format($salario_minimo, 2, ".", ",") ?></p>
        </form>

        <section>
            <h1>Resultado Final</h1>
            <div class="container">
                <?php
                echo "Quem recebe um  sálario de R$ " . number_format($salario, 2, ',', '.') . " recebe ate " . round($num_Salario_Minimo, 2, PHP_ROUND_HALF_EVEN) . " <strong>sálarios mínimos</strong> + R$ " . Number_Format($resto, 2, ',', '.') . " ";
                ?>
            </div>
        </section>
    </main>

    <script>
    function calcular() {
        let salarioInput = document.getElementById('sal');
        let salario = salarioInput.value;
        if (salario === '') {
            salarioInput.style.border = '2px solid'
            salarioInput.style.borderColor = 'red';
            alert("Por favor, insira um valor para calcular!");
            return false;
        } else {
            salarioInput.style.borderColor = '';
            return true;
        }
    }
    </script>

</body>

</html>
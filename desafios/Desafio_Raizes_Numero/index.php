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
    $verificarSubmit = isset($_REQUEST['numero']) ? $_REQUEST['numero'] : null;
    $num = $_REQUEST['numero'] ?? 1;
    $raizquadrada = sqrt($num);
    $raizcubica = pow($num, 1 / 3);

    ?>
    <main>
        <h1>Informe um Número</h1>
        <form action="index.php" method="get" onsubmit="return analisar()">
            <label for="numero">Número</label>
            <input type="number" name="numero" id="num" step="0.1" value="0">

            <button type="submit" onclick="analisar()">Calcular Raizes </button>
        </form>

        <section>
            <h1>Resultado Final</h1>
            <div class="container">
                <?php
                echo "<p>Analisando o número $num</p>";
                echo "
                    <p>A sua raiz quadrada é "  . number_format($raizquadrada, 3, ',', '') . " </p>
                    <p>A sua raiz cúbica é " . number_format($raizcubica, 3, ',', '') . "</p>";
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
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cad.css">
    <title>Resultado</title>
</head>

<body>

</html>
<section class="formulario">
    <header>
        <h1>Conversor de moedas</h1>
    </header>

    <?php
    ini_set('display_errors', 'Off');
    ini_set('log_errors', 'On');

    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

    $validator = $_REQUEST["number"];
    $real = $_REQUEST["number"] ?? "Sem número";

    if ($validator == '') {
        echo "Digite um valor por favor!";
    } else if ($validator == 0 || $validator < 0) {
        echo "Digite um valor valido por favor!";
    } else if ($validator = !'') {
        $dolar = $real / 4.85;
        $converter = $real / $dolar;
        echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . "
           equivalem a " . numfmt_format_currency($padrao, $dolar, "USD") . "
           </p>";
    }
    ?>
    <p>
        <button id="btn" onclick="javascript:history.go(-1)">Voltar</button>
    </p>

    <script>
        let btn = document.getElementById('btn');
        btn.style.backgroundColor = "blue";
        btn.style.color = "white";
        btn.style.padding = "5px";
        btn.style.border = "none";
        btn.style.borderRadius = "4px";
        btn.style.cursor = "pointer";
        btn.style.display = "block";
        btn.style.margin = "auto";
        btn.style.fontSize = "17px";
        btn.style.fontWeight = "bold";
    </script>

</section>

</html>
</body>
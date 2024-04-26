<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cad.css">
    <title>Sucessor e Antecessor</title>
</head>

<body>
    <section class="formulario">
        <header>
            <h1>Resultado Final</h1>
        </header>

        <?php
            ini_set('display_errors', 'Off');
            ini_set('log_errors' , 'On');

            $num = $_REQUEST["number"] ?? "Sem número";
            $ant = $num - 1;
            $sucessor = $num + 1;
            
            echo "Voce digitou $num";
                echo "<p>O número antecessor a $num é $ant</p>";
                    echo"<p>O número sucessor de $num é $sucessor</p>";         
        ?>

        <button><a href="index.html">Voltar</a></button>
    </section>

    <script>

    </script>

</body>

</html>
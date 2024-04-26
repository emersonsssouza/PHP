<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="html.css">
    <title>Anatomia da divisão</title>
</head>

<body>
    <?php
    ini_set('display_errors', 1);
    error_reporting(0);
    $dividendo = $_REQUEST['dividendo'] ?? 0;
    $divisor = $_REQUEST['divisor'] ?? 1;
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="index.php" method="get">
            <label for="">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" value="0">
            <label for="">Divisor</label>
            <input type="number" name="divisor" id="divisor" value="0" min="1" step="0.1">
            <button type="submit">Analisar</button>
        </form>

        <section>
            <h1>Estrutura da Divisão</h1>
            <section class="container">
                <div class="DD">
                    <div class="DD-01">
                        <!--Area de resultado DIVIDENDO-->
                        <?php
                        echo " $dividendo";
                        ?>
                    </div>
                    <div class="DD-02">
                        <!--Area de resultado RESTO-->
                        <?php
                        echo " " . $dividendo % $divisor . "";
                        ?>
                    </div>
                </div>
                <div class="RD">
                    <div class="RD-01">
                        <!--Area de resultado DIVISOR-->
                        <?php
                        echo "$divisor";
                        ?>
                    </div>
                    <div class="RD-02">
                        <!--Area de resultado QUOCIENTE-->
                        <?php
                        $RESTO = $dividendo % $divisor;
                        $QUOCIENTE = intdiv($dividendo, $divisor);
                        echo "$QUOCIENTE";
                        ?>
                    </div>
                </div>
            </section>
        </section>

    </main>

</body>

</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos </title>
</head>

<body>
    <?php 
        $numero = 300;
        $num = 0x2A;
            echo "O valor de numero é: $numero <br>";
                echo "O valor do numero Hexadecimal 0x1A é $num";
        $v = 300;
            echo "<br>";
                echo var_dump($v);
                    echo "<br>";
        $n = 3e2; // 3 x 10(2);
            echo "O valor é $n <br>";

        $numInt = (int) 3e2; // 3 x 10(2) tambem chamado de Coerção;
        var_dump($numInt);
            echo "<br>";
                echo "O valor de 3 x 10 ^ (2) é $numInt";

        $numStr = (int) "950";
            echo "<br>";
        var_dump($numStr);
            echo "<br>";
                echo "O valor de numSTR é $numStr";

        $casado = true;
        var_dump($casado);
            echo "<br>";
                print "O valor de casado é $casado";

        $vet = [6, 2, 6, 10, "maria", 1, 0, 100, "Emerson"];
            echo "<br>";
        var_dump($vet);

        class Pessoa {
            private string $nome;
        }

        $p = new Pessoa;
        echo "<br>";
        var_dump($p);
    ?>

</body>

</html>
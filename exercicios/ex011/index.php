<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Aritméticas do PHP</title>
</head>

<body>
    <?php 
        $res = abs(200);
            print "A resposta é $res";
                echo "<br>";
        $res1 = base_convert(254, 10, 2); //Converter o valor "254" da base '10' para base '8'
            echo ("A resposta é $res1");
                echo "<br>";
        $hip = hypot(6, 8);
            echo "A area da hipotenusa é $hip";
                echo "<br>";
        $intdiv = intdiv(5, 2);
            echo ", e a parte inteira de divisão é $intdiv";
                echo "<br>";
        $min_max = min(50, 2, 20, 3, 4, 1000, 2, 1, 0, -100, -10, -1);
            echo "O menor número é: $min_max", "\n";
                echo "<br>";
        $max_min = max(50, 2, 20, 3, 4, 1000, 2, 1, 0, -100, -10, -1);
            echo "O maior número é: $max_min", "\n";
                echo "<br>";
        $pi = M_PI;
            print "O valor de PI é $pi";
             echo "<br>";
        $potencia = pow(5, 2);
            echo "O resultado da potência é: $potencia";
                echo "<br>";
        //Calculando Seno, Cosseno, Tangente;
        $seno = sin(30);
            echo "O seno de 'X' é $seno";
                echo "<br>";
        $cosseno = cos(30);
            echo "O cosseno de 'X' é $cosseno";
                 echo "<br>";
        $tangente = tan(30);
            echo "A tangente de 'X' é $tangente";
                echo "<br>";
        $raizQ = sqrt(2);
            echo "A raiz quadrada de 'X' é $raizQ";
                echo "<br>";
        //Para calcular a RAIZ CUBICA;  
        $raizC = 2 ** (1/3);
            echo "E a Raiz Cubica de 'X' é $raizC";

    ?>
</body>

</html>
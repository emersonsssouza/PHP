<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritmeticos</title>
</head>

<body>
    <?php 
        $num = "2" + "2";
        echo "$num";
        echo "<br>";
        
        $num0 = 5 + 2;
        $num1 = 5 - 2;
        $num2 = 5 * 2;
        $num3 = 5 / 2;
        $num4 = 5 % 2;
        $num5 = 5 ** 2;

        $vet = [$num0, $num1, $num2, $num3, $num4, $num5];

        print_r($vet);
    ?>
</body>

</html>
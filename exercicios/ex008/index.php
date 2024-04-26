<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de strings com PHP</title>
</head>

<body>
    <?php 
        $nome = "Emerson";
        echo "Olá $nome 🎮\u{1f596}!";
            echo "<br>";
                echo 'Olá $nome \u{1f596} !';
        
        const CIDADE = "Igaratá 💗";
        echo "<br>";
        echo "Eu $nome moro na cidade de " .CIDADE , "onde resido atualmente no ano de " . date('Y');

        $FirstName = "Anderson";
        $MiddleName = "Spider";
        $LastName = "Silva";

        echo "<br>";
            echo "My full name is $FirstName $MiddleName $LastName ";
               echo "<br>";
                    echo "$FirstName\"Aranha\"$LastName";
    ?>
    <h1>HearDoc</h1>
    <?php 
        $curso = "PHP";
        $ano = date('Y');
        echo <<< FRASE
            Estou Estudando $curso em $ano   
        FRASE;
    ?>

</body>

</html>
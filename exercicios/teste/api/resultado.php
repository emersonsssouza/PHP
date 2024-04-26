<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <section>
        <?php
        $senha = $_REQUEST['senha'];
        $email = $_REQUEST['email'];
        echo "A sua senha é <strong>$senha</strong><br>";
        echo "O seu email é <strong>$email</strong>";
        ?>
    </section>
</body>

</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleRes.css">
    <title>Resultado</title>
</head>

<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            $nome = $_REQUEST["nome"] ?? "Sem nome";
            $sobrenome = $_REQUEST["sobrenome"] ?? "Desconhecido";
            echo "<p>È um prazer te conhecer <strong>$nome $sobrenome</strong></p>"
        ?>

        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>

</body>

</html>
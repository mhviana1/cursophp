<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">;
</head>
<body>
    <header>
        <h1>Resultado do Processamento</h1>
    </header>  

    <main>  
        <?php
            $n = $_GET["nome"] ?? "sem nome";
            $s = $_GET["sobrenome"] ?? "desconhecido";
            echo "<p>É um prazer te conhecer, <strong>$n $s</strong>!</p>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para página inicial</a></p>
    </main>

    
</body>
</html>
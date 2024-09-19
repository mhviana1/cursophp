<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php
            $numero_aleatorio = mt_rand(0, 100);
            echo "<h1>Trabalhando com número aleatórios</h1>"; 
            echo "<p> Gerando número aleatório entre 0 e 100...</p>";
            echo "<p> O valor gerado foi <strong>$numero_aleatorio</strong> </p>";    
        ?>

<button onclick="javascript:window.location.href='index.php'">&#x1f504;Gerar outro</button>
    </main>
</body>
</html>
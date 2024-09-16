<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">;
</head>
<body>

    <main>
        <?php
        $n = $_GET["Numero"];
        $na = $n - 1;
        $ns = $n + 1;
        echo "<h1>Resultado Final</h1>";
        echo "<p>O número escolhido foi <strong>$n</strong></p>";
        echo "<p>O seu <em>antecessor</em> é $na</p>";
        echo "<p>O seu <em>sucessor</em> é $ns</p>";
        ?>

        <button onclick="javascript:window.location.href='index.html'">&#x2B05;Voltar</button>
    </main>
    
    
</body>
</html>
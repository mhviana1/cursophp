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
        $real = floatval($_GET["Numero"]);
        $dolar = "5.46";
        $conversao = $real / $dolar;
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
      
        echo "<h1>Conversor de Moedas v1.0</h1>";
        // echo "<p>Seus R$" . number_format($real, 2, ',', '.') . "  equivalem a  <strong>US$ " . number_format($conversao, 2, ',', '.') . "</strong></p>";
        echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a ". numfmt_format_currency($padrao, $dolar, "BRL");
        echo "<p><strong>Contação fixa de R$5,46</strong> informada diretamente no código</p>";
       
        ?>

        <button onclick="javascript:window.location.href='index.html'">&#x2B05;Voltar</button>
    </main>
    
    
</body>
</html>
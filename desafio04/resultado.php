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
        // captura de dados do index.html
        $real = floatval($_GET["Numero"]);

        //atualizacao direto do site do Bacen
        $inicio = date("m-d-Y", strtotime("-1 days"));
        $fim = date("m-d-Y");
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        $dados = json_decode(file_get_contents($url), true);
        $dolar = $dados["value"][0]["cotacaoCompra"];

        //conversao de real p/ dolar
        $conversao = $real / $dolar;

        //padronizacao dos carecteres
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        //data padrao brasileiro
        $data = date("d-m-y");
      
        echo "<h1>Conversor de Moedas v1.0</h1>";
        // echo "<p>Seus R$" . number_format($real, 2, ',', '.') . "  equivalem a  <strong>US$ " . number_format($conversao, 2, ',', '.') . "</strong></p>";
        echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a ". numfmt_format_currency($padrao, $conversao, "USD");
        echo "<p><strong>Cotação fixa de " . numfmt_format_currency($padrao, $dolar, "BRL").  "</strong> ,informada diretamente do Banco Central do Brasil.<br> Referente a data:$data </p>";
       
        ?>

        <button onclick="javascript:window.location.href='index.html'">&#x2B05;Voltar</button>
    </main>
    
    
</body>
</html>
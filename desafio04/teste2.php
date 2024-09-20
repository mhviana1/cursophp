<pre>
    <?php
        // Cotação de hoje
        $hoje = date("m-d-Y");
        $url_hoje = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $hoje . '\'&@dataFinalCotacao=\'' . $hoje . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        $dados_hoje = json_decode(file_get_contents($url_hoje), true);
        $cotacao_hoje = $dados_hoje["value"][0]["cotacaoCompra"];
        
        echo "<h1> A cotação de hoje foi: $cotacao_hoje</h1>";

        // Cotação do dia anterior
        $anterior = date("m-d-Y", strtotime("-1 days"));
        $url_anterior = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $anterior . '\'&@dataFinalCotacao=\'' . $anterior . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        $dados_anterior = json_decode(file_get_contents($url_anterior), true);
        $cotacao_anterior = $dados_anterior["value"][0]["cotacaoCompra"];
        
        echo "<h2> A cotação do dia anterior foi: $cotacao_anterior</h2>";
    ?>
</pre>

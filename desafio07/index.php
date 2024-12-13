<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 07</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $salarioMinimo = 1_450.00;
    $salario = $_GET["salario"] ?? 0;
    $quociente = intdiv($salario, $salarioMinimo);
    $resto = $salario % $salarioMinimo;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="salario"> Salário (R$)</label>
            <input type="number" name="salario" id="salario" min="1412">
            <p>Considerando o salário minimo de <strong>R$<?=number_format($salarioMinimo, 2, ",", ".")?></strong> </p>
            <input type="submit" value="Calcular">
        </form>    
    </main>
    <section>
        <?php
        
        ?>
        <h2>Resultado Final</h2>
        <p>Quem recebe um salário de R$<?=number_format($salario, 2, ",", ".")?> ganha <?=$quociente?> salários mínimos + R$<?=number_format($resto, 2, ",", ".")?></p>
    </section>    
</body>
</html>
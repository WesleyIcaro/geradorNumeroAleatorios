<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteio</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Trabalhando com número aleatórios</h1>
        <p>Gerando um número aleatório entre 0 e 100</p>

        <?php

        // rand() = 1951 - Linear Congretial Generator (Não usar, mesmo que o manual fala que aponta para o mt para se evitar lentidão)
        // mt_rand() = 1997 - Mersenne Twister
        // A partir do PHP 7.1, rand() é um simples apontamento para mt_rand()
        // random_int() gera números aleatórios criptograficamente seguros (Se por algum motivo precisar gerar números seguros, mas é lento, enão usar somente nestes casos)

        
            $sorteio = mt_rand(0, 100);
            echo "<p>O valor gerado foi <strong>$sorteio</strong></p>";        

        ?>
        
            <button type="button" onclick="javascript:window.location.reload()" name="random">&#x1F504;Gerar número</button>
    </main>
</body>

</html>
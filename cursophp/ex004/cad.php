<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Resultado do Processamento</h1>
    </header>
    <main>
        <?php 
        
            $nome = $_GET["nome"];
            $sobrenome = $_GET["sobrenome"];
            echo("Oi, $nome $sobrenome");
        
        
        
        ?>
    </main>
</body>
</html>
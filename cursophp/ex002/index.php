<!DOCTYPE html>
<html lang="pt0br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    date_default_timezone_set('America/Sao_Paulo');
     echo('Hoje é Dia ').date(' D/M/Y <br> ' ); 
     echo('E O Horário É: ').date('G:i:s ');
    
    ?>
    
</body>
</html>
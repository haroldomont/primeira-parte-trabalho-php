<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeira pagina</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="central">
        <div class="cabecalho">
            <?php
                include_once('cabecalho.php');
            ?>
        </div>
        <div class="corpo"> 
            <?php
                if(empty($_SERVER['QUERY_STRING']))
                {
                    $var = "primeiraPagina.php";
                    include_once($var);
                }
                
                else
                {
                    $pg = $_GET['pg'];
                    include_once("$pg.php");
                }
            ?>
        </div> 
        <div class="rodape">
            <?php
                include_once('rodape.php');
            ?>
        </div>
        
    </div>
</body>
</html>
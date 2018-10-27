<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <?php

            include_once 'Leite.php';
            include_once 'DVD.php';
            try {
                $leite = new Leite(1, 2.50, 'Leite', 'Lebom', 2.3, '2018-10-01');
                $dvd = new DVD(2, 20, 'DVD', 'The Hangover', 2016);
            } catch (InformacaoNulaException $e) {
                echo $e->getMessage();
            }      
            echo $leite.'<br>';
            if ($leite->estaVencido())
                echo 'Este produto está vencido!<br>';
            echo $dvd.'<br>';
        ?>
    </body>
</html>
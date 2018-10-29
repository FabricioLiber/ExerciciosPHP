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
        $perguntas = ['Qual é o seu nome?',
                        'Quanto é 2 com 2?'];
        $respostas = ['Fabrício',
            '2'];
        echo $perguntas[rand(0, count($perguntas) - 1)].'<br>';
        echo $respostas[rand(0, count($respostas) - 1)].'<br>';
        $data = getdate();
        echo $data['mday'].'/'.$data['mon'].'/'.$data['year'].' - '.$data['hours'].':'.$data['minutes'].':'.$data['seconds'].'<br>';
        
        $format = "d/m/Y";
        $data_f = DateTime::createFromFormat($format, '29/10/2018');
        echo $data_f->format('Y-m-d');
    ?>
</body>
</html>
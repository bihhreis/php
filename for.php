<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Estrutura de Repetiçao</title>
    </head>
    <body>
        <?php
        for ($i=0; $i <=100 ; ) { 
            if($i % 2 == 0){
                echo $i."<br>";
            }
            $i++
        }

        ?>
    </body>
</html>

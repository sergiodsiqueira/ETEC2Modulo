<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2</title>

    <style>
        img {height: 150px; border: 1px; padding: 4px;}
    </style>

</head>
<body>
    <?php
        for($i=1; $i<20; $i++){
            
            if ($i >= 1 && $i <=9){    
                echo "<img src='img/$i.png' alt=''><br>";
              };
          
            if ($i >= 11 && $i <20){    
                $vlr = $i - 10;
                echo "<img src='img/1.png' alt=''> 
                      <img src='img/$vlr.png' alt=''><br>";
            };
        }    
    ?>
</body>
</html>
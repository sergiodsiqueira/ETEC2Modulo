<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .lnBlue {background: blue; padding=10px;}
        .lnYellow {background: yellow; padding=10px;}
        
        .red {background: red; padding=10px;}
        .green {background: green; padding=10px;}

        .silver {background: silver; padding=10px;}
        .white {background: whitesmoke; padding=10px;}

        .bloco { height: 50px; width: 50px; float: left;}
    </style>

</head>
<body>

    <?php
        for ($i=0; $i < 5; $i++) {
    ?>
        <div class="lnYellow"> Etec 1 </div>
        <div class="lnBlue"> Etec 1 </div>
    <?php
        }
    ?>


    <?php
        for ($i=0; $i < 5; $i++) {
            if ($i%2) {
    ?>
        <div class="red"> Etec 2 </div>
    <?php    
        } else {
    ?>
        <div class="green"> Etec 2 </div>
    <?php 
        }
    }
    ?>

    <?php
        for ($i=0; $i < 5; $i++){
            $classe = $i%2 ? 'silver' : 'white'; //ternário
            echo "<div class='$classe'>Etec 3<div>";
        }
    ?>
    
    <br>
        
    <?php for($i=0; $i<2; $i++) { ?>
    
    <div class="bloco lnYellow"></div>
    <div class="bloco lnBlue"></div>
    <div class="bloco green"></div>
    <div class="bloco red"></div>
    
    <?php } ?>

    
    <?php    
        $blocos =  "<div class='bloco lnYellow'>1</div>
                    <div class='bloco lnBlue'>2</div>
                    <div class='bloco lnYellow'>3</div>
                    <div class='bloco lnBlue'>4</div>";

        for($i=0; $i<2; $i++) {
            echo $blocos;
        }
    ?>
    
</body>
</html>
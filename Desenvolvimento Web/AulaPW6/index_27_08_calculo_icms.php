<?php
    $msg = '';

    if (isset($_POST['valor1']) &&
        isset($_POST['valor2']) &&  
        isset($_POST['valor3']) && 
        isset($_POST['estado'])){
            extract($_POST);

            $valor1 = $valor1 == null ? 0 : $valor1;
            $valor2 = $valor2 == null ? 0 : $valor2;
            $valor3 = $valor3 == null ? 0 : $valor3;
            
            $total = $valor1 + $valor2 + $valor3;
            
            $msg = 'Total do ICMS: ';

            switch($estado){
                case 'SP': $msg .= $total * 0.18; break;
                case 'MG': $msg .= $total * 0.20; break;
                case 'RJ': $msg .= $total * 0.22; break;
                default: $msg = 'ICMS Invalido';
            }
        }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de ICMS</title>
</head>
<body>

    <form action="" method="post">
        <label for=""> Produto 1:
            <input type="text" name="valor1" maxlength="10">
        </label><br>
        
        <label for=""> Produto 2:
            <input type="text" name="valor2" maxlength="10">
        </label><br>
        
        <label for=""> Produto 3:
            <input type="text" name="valor3" maxlength="10">
        </label><br><br>
        
        ICMS POR ESTADO:
        <select name="estado">
            <option value="SP" selected="selected">SP - 18%</option>
            <option value="MG">MG - 20%</option>
            <option value="RJ">RJ - 22%</option>
        </select><br><br>

        <button type="submit">CALCULAR</button>
        <button type="reset">LIMPAR</button>
    </form>

    <?php
        echo "<br><br>";
        echo $msg;
        $msg = '';
        $_POST[] = ''; 
    ?>
    
</body>
</html>
<?php
    if (isset($_GET['txtnome']) && isset($_GET['txtemail'])){
        extract($_GET);
        echo "Nome: $txtnome - E-mail: $txtemail";
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre</title>
</head>
<body>
                <form method="GET">
                    <h3>Sobre</h3>

                    <label for='txtnome'>Nome:</label>
                    <input type="text" name="txtnome" id='txtnome' placeholder="Digite seu nome" required> <br><br>

                    <label for='txtemail'>E-mail:</label>
                    <input type="email" name="txtemail" id='txtemail' placeholder="Digite o e-mail" required> <br><br>

                    <label for='txtassunto'>Assunto:</label>
                    <input type="text" name="txtassunto" id='txtassunto' placeholder="Digite o assunto" required> <br><br>

                    <label for='txtmensagem'>Mensagem:</label>
                    <textarea name='txtmensagem' id='txtmensagem'>Digite aqui sua mensagem...</textarea><br><br>
                    
                    <input type="button" id='btnenviar' value='Enviar'>
                </form>


    <script>
        let txtnome = document.getElementById('txtnome')
        txtnome.value = 'Sérgio'
        txtnome.style.width = '300px'
        txtnome.focus();

        let txtemail = document.getElementById('txtemail')
        txtemail.value = 'sergio@local.com'
        txtemail.style.width = '300px'
        
        let txtassunto = document.getElementById('txtassunto')
        txtassunto.value = 'Assunto muito legal'
        txtassunto.style.width = '290px'

        let txtmensagem = document.getElementById('txtmensagem')
        txtmensagem.value = '...'
        txtmensagem.style.width = '275px'

        let btnenviar = document.getElementById('btnenviar')
        btnenviar.style.width = '100px'
        btnenviar.style.height = '30px'        

        btnenviar.addEventListener('click', function(){
            location.href=`sobre.php?txtnome=${txtnome.value}&txtemail=${txtemail.value}`
            alert(txtnome.value)
        })
    </script>
</body>
</html>
<?php
include __DIR__ . '../vendor/autoload.php';

use Includes\Conexao;

include 'assets/includes/enviaemail.php';

$msg = '';
if (isset($_POST['txtNome']) && isset($_POST['txtEmail']) && isset($_POST['txtAssunto'])) {
    extract($_POST);
    if (($txtNome != '') && ($txtEmail != '') && ($txtAssunto != '')) {
        $conexao = new Conexao();
        $con = $conexao->conectar();
        $sql = "INSERT INTO mensagem (nome, email, assunto, mensagem)
                    VALUES ('{$txtNome}', '{$txtEmail}', '{$txtAssunto}', '{$txtMensagem}')";
        $res = $con->query($sql);
        if ($res) {
            //$res = Enviar_Email::enviar($txtNome, $txtEmail, $txtAssunto, $txtMensagem);
            $msg = "<script>alert('Mensagem enviada com sucesso!')</script>";
            echo $msg;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include_once 'header.php'; ?>
</head>

<body>
    <!-- topo -->
    <?php include_once 'topo.php'; ?>
    <?php include_once 'menu.php'; ?>
    <!-- main -->
    <div class="p-3 main">
        <div class="row">
            <div class="col-lg-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24855.93809986116!2d-46.75247256190942!3d-22.169503137695337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c9b4d65170a803%3A0x137e9546a5f2f2b0!2sEscola%20T%C3%A9cnica%20Estadual%20Carolino%20da%20Motta%20e%20Silva!5e0!3m2!1spt-BR!2sbr!4v1634948389786!5m2!1spt-BR!2sbr" style="border: 0; border-radius: 5px; width: 100%; height: 550px" allowfullscreen="" loading="lazy"></iframe>
            </div>

            <div class="col-lg-3">
                <div class="card p-3 mb-2" style="height: 550px">
                    <h3>Endereço</h3>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card p-3" style="height: 550px">
                    <h3>Sobre</h3>
                    <form method="POST" action="sobre.php">
                        <div class="form-group">
                            <label class="form-label">Nome:</label><input type="text" name="txtNome" id="txtNome" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="form-label">E-mail:</label><input type="email" name="txtEmail" id="txtEmail" autofocus class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Assunto:</label><input type="text" name="txtAssunto" id="txtAssunto" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Mensagem:</label><textarea name="txtMensagem" id="txtMensagem" rows="5" class="form-control"> </textarea>

                        </div>
                        <hr>
                        <div class="form-group">
                            <input type="submit" id="btnEnviar" value="Enviar" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> <!-- fim do main -->
    <!-- rodapé -->
    <?php include_once 'rodape.php'; ?>
</body>

</html>
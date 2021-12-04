<?php
include __DIR__ . '../vendor/autoload.php';

use Includes\Conexao;

$msg = '';

if (isset($_POST['email']) && isset($_POST['senha'])) {

    extract($_POST);
    $erro = true;

    if (($email != '') && ($senha != '')) {

        //require_once 'assets/includes/Conexao.php';
        $conexao = new Conexao();
        $con = $conexao->conectar();
        $sql = "select * from usuario where email = '{$email}' and senha = SHA1('{$senha}')";
        $res = $con->query($sql);

        $id = '';
        $nome = '';
        $nivel = '';

        if ($res) {
            while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                $id = $row['id'];
                $nome = $row['nome'];
                $nivel = $row['nivel'];
            }

            if (($nome != '') && ($nivel != '')) {
                session_start();
                $_SESSION['sid'] = $id;
                $_SESSION['snome'] = $nome;
                $_SESSION['snivel'] = $nivel;
                $erro = false;

                if (isset($lembrar)) {
                    if ($lembrar == 'on') {
                        setcookie('clembrar', 'checked="checked"', time() + 60 * 60 * 24 * 1);
                        setcookie('cemail', $email, time() + 60 * 60 * 24 * 1);
                        setcookie('csenha', $senha, time() + 60 * 60 * 24 * 1);
                    }
                } else {
                    setcookie('clembrar', '', time() - 60 * 60 * 24 * 1);
                    setcookie('cemail', '', time() - 60 * 60 * 24 * 1);
                    setcookie('csenha', '', time() - 60 * 60 * 24 * 1);
                }
            }
        }
    }

    if ($erro) {
        $msg = 'Erro de Login/Senha';
    } else {
        header('Location: admin/');
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

        <!-- alinhamento -->
        <div class="d-flex justify-content-center">

            <!-- card -->
            <div class="card p-2 w-25" style="min-width: 300px">

                <form method="POST" action="login.php">
                    <h3>Controle de Acesso</h3>

                    <label class="form-label" for='email'>E-mail:</label>
                    <input type="email" name="email" id='email' placeholder="Digite o e-mail" class="form-control" value="<?php echo isset($_COOKIE['cemail']) ? $_COOKIE['cemail'] : ''; ?>" required>

                    <label class="form-label" for='senha'>Senha:</label>
                    <input type="password" name="senha" id='senha' placeholder="Digite a senha" class="form-control" value="<?php echo isset($_COOKIE['csenha']) ? $_COOKIE['csenha'] : ''; ?>" required>

                    <div class='form-check mt-1'>
                        <input type='checkbox' name='lembrar' id='lembrar' class='form-check-input' <?php echo isset($_COOKIE['clembrar']) ? $_COOKIE['clembrar'] : '' ?>>
                        <label for='lembrar'>Lembrar-me</label>
                    </div>

                    <button type="submit" class="btn btn-primary mt-3 shadow"><i class="fas fa-sign-in-alt"></i> Login</button>
                </form>

                <?php
                if (strlen($msg) > 0) {
                    echo "<div class='alert alert-danger' role='alert' mt-3>
                        {$msg}
                     </div>";
                }
                ?>

            </div><!-- card -->

        </div> <!-- alinhamento -->

    </div> <!-- main -->

    <!-- rodapé -->
    <?php include_once 'rodape.php'; ?>
</body>

</html>
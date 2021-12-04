<?php
include '../../vendor/autoload.php';

use Includes\Layout;
use Includes\Usuarios;

if (isset($_POST['_token'])) {
  $usuario = new Usuarios();
  $json = json_decode($usuario->store());
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <?php echo Layout::header(); ?>
</head>

<body>
  <?php echo Layout::topo(); ?>
  <?php echo Layout::menu(); ?>
  <!-- main -->
  <div class="p-3 main">
    <div class="container justify-content-center">

      <?php
      if (isset($json)) {
        $msg = ($json->msg == 'Erro' ? 'danger' : 'sucess');
        echo "<div class='alert-{$msg}'>{$json->mensagem}</div>";
      }
      ?>
      <div class="d-flex justify-content-center">
        <form method="POST" action="create.php">
          <input type="hidden" id="_token" name="_token" value="chave aleátoria">
          <h3>Cadastro de Usuário</h3>

          <label class="form-label" for='nome'>Nome:</label>
          <input type="text" name="nome" id='nome' placeholder="Digite o nome" class="form-control" required>

          <label class="form-label" for='email'>E-mail:</label>
          <input type="email" name="email" id='email' placeholder="Digite o e-mail" class="form-control" required>

          <label class="form-label" for='senha'>Senha:</label>
          <input type="password" name="senha" id='senha' placeholder="Digite a senha" class="form-control" required>
          <label class="form-label" for='senha'>Repita a Senha:</label>
          <input type="password" name="senha" id='senha' placeholder="Digite novamente a senha" class="form-control" required>

          <label class="form-label" for='selnivel'>Nível de Acesso:</label>
          <select name="nivel" id="nivel" class="form-select">
            <option value="A" selected>Administrador</option>
            <option value="M">Moderador</option>
            <option value="U">Usuário</option>
          </select>

          <button type="submit" class="btn btn-primary mt-3 shadow">
            <i class="fas fa-sign-in-alt"></i> Gravar</button>

        </form>
      </div>
    </div>
  </div>
  <!-- fim do main -->
  <!-- rodapé -->
  <?php echo Layout::rodape(); ?>
</body>

</html>
<?php
include '../../config.php';

use Includes\Usuarios;
use Includes\Layout;

$id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);
$usuarios = new Usuarios();
$usuarios->update();
$json = json_decode($usuarios->show($id));
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <?php echo Layout::header(); ?>
</head>

<body>
  <!-- topo -->
  <?php echo Layout::topo(); ?>
  <?php echo Layout::menu(); ?>
  <!-- main -->
  <div class="p-3 main">
    <div class="d-flex justify-content-center">
      <div class="card p-2 w-25" style="min-width: 300px">
        <?php if ($json->msg != 'OK') { ?>
          <div class="alert alert-danger" role="alert">
            echo $json->msg;
          </div>
        <?php
        } else {
          $row = $json->dados[0];
          switch ($row->nivel) {
            case 'A':
              $nivel = 'Admin';
              break;
            case 'M':
              $nivel = 'Moderador';
              break;
            case 'U':
              $nivel = 'Usuário';
              break;
          }
        ?>
          <h3>Dados do Usuário</h3>
          <form method="post" action="edit.php">
            <input type="hidden" name="_token" value="">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="id" value="<?= $id ?>">

            <label class="form-label" for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" class="form-control" value="<?= $row->nome ?>">
            <label class="form-label" for="email">E-mail:</label>
            <input type="email" name="email" id="email" class="form-control" value="<?= $row->email ?>">
            <label class="form-label" for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" class="form-control" value="">
            <label class="form-label" for="nivel">Nível de acesso:</label>
            <select name='nivel' id='nivel' class='form-select'>
              <option value="A" <?= $row->nivel == 'A' ? 'selected' : '' ?>>Admin</option>
              <option value="M" <?= $row->nivel == 'M' ? 'selected' : '' ?>>Moderador</option>
              <option value="U" <?= $row->nivel == 'U' ? 'selected' : '' ?>>Usuário</option>
            </select>

            <button type='submit' class='btn btn-primary mt-3 shadow'><i class="fas fa-save"></i> Gravar</button>
            <a href='#' onclick="history.go(-1)" class="btn btn-primary mt-3 shadow"><i class="fas fa-sign-out-alt"></i> Voltar</a>
          </form>
        <?php } ?>
      </div>
    </div>
  </div>
  <!-- fim do main -->
  <!-- rodapé -->
  <?php echo Layout::rodape(); ?>
</body>

</html>
<?php
include '../../config.php';

use Includes\Usuarios;
use Includes\Layout;

$id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);
$usuarios = new Usuarios();
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
          <label class="form-label" for="nome">Nome:</label>
          <input type="text" name="nome" id="nome" class="form-control" value="<?= $row->nome ?>" readonly>
          <label class="form-label" for="email">E-mail:</label>
          <input type="email" name="email" id="email" class="form-control" value="<?= $row->email ?>" readonly>
          <label class="form-label" for="senha">Senha:</label>
          <input type="password" name="senha" id="senha" class="form-control" readonly>
          <label class="form-label" for="nivel">Nível de acesso:</label>
          <input type="text" name="nivel" id="nivel" class="form-control" value="<?= $nivel ?>" readonly>
          <a href='#' onclick="history.go(-1)" class="btn btn-primary mt-3 shadow"><i class="fas fa-sign-in-alt"></i>Voltar</a>
        <?php } ?>
      </div>
    </div>
  </div>
  <!-- fim do main -->
  <!-- rodapé -->
  <?php echo Layout::rodape(); ?>
</body>

</html>
<?php
include '../../config.php';

use Includes\Layout;
use Includes\Usuarios;
use CoffeeCode\Paginator\Paginator;

$usuarios = new Usuarios();
$linhas = $usuarios->getNumRegistros();

$page = filter_input(INPUT_GET, "page", FILTER_VALIDATE_INT);
$pager = new Paginator();
$pager->pager($linhas, 10, $page);

$json = json_decode($usuarios->index($pager->limit(), $pager->offset()));
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

      <?php if ($json->msg != 'OK') { ?>
        <div class="alert alert-danger" role="alert">
          echo $json->msg;
        </div>
      <?php
      } else {
        echo "<div>
                <a href='create.php' class='btn btn-secondary my-3'>Criar Novo Usuário</a>
              </div>";

        echo "<table class='table table-striped table-bordered table-dark'>
                        <thead>
                        <tr>
                            <th>Ações</th>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Nível</th>
                        </tr>
                        </thead>
                        <tbody>";
        foreach ($json->dados as $row) {
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
          echo  "<tr>
                            <td>
                              <a href='show.php?id={$row->id}' class='btn btn-primary'><i class='far fa-eye'></i></a>
                              <a href='edit.php?id={$row->id}' class='btn btn-warning'><i class='far fa-edit'></i></a>
                              <a href='delete.php?id={$row->id}' class='btn btn-danger'><i class='far fa-trash-alt'></i></a>
                            </td>
                            <td>{$row->id}</td> 
                            <td>{$row->nome}</td>
                            <td>{$row->email}</td>
                            <td>{$nivel}</td>
                           </tr>";
        }
        echo "</table>";
        echo $pager->render(null, false);
      ?>
      <?php } ?>
    </div>
  </div>
  <!-- fim do main -->
  <!-- rodapé -->
  <?php echo Layout::rodape(); ?>
</body>

</html>
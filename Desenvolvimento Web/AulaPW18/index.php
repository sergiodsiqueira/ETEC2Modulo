<?php
define('PATH', 'http://localhost:8080/');
include __DIR__ . '../vendor/autoload.php';

// include 'routes/web.php';

use Includes\Conexao;
use Includes\Layout;
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
  <div class="container p-3">
    <div class="card-group">
      <?php
      //require_once 'assets/includes/Conexao.php';
      $conexao = new Conexao(); // instanciando um objeto a partir da classe Conexao
      $con = $conexao->conectar(); // chama o método conectar() faz a conexão com o BD

      $sql = 'SELECT N.id, N.titulo, N.descricao, N.foto, N.data_cadastro, U.nome 
                FROM noticia N, usuario U 
                WHERE N.id_usuario=U.id 
                ORDER BY data_cadastro DESC LIMIT 3';

      $res = $con->query($sql); // executa a consulta SQL

      $noticias = '';

      if ($res) { // se a consulta foi executada com sucesso
        while ($row = $res->fetch(PDO::FETCH_ASSOC)) { // retorna uma linha da tabela
          $noticias .= "<div class='card h-100 me-2'>
                        <img src='assets/imagens/{$row['foto']}' class='card-img-top' alt=''>
                        <div class='card-body'>
                          <h5 class='card-title'>{$row['titulo']}</h5>
                          <h6 class='card-text'>{$row['nome']}</h6>
                          <p class='card-text text-truncate'>{$row['descricao']}</p>
                        </div>
                        <div class='card-footer'>
                          <small class='text-muted'>{$row['data_cadastro']}</small>
                        </div>
                      </div>";
        }
      }
      echo $noticias;
      ?>
    </div>
  </div> <!-- fim do main -->
  <!-- rodapé -->
  <?php echo Layout::rodape(); ?>
</body>

</html>
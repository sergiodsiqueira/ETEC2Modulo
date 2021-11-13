<?php
include_once "./conexao.php"
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Projeto CRUD</title>
</head>

<body>

  <H1>Cadastro de Usuários</H1>

  <?php
  if (isset($_POST['nome']) && isset($_POST['email'])) {
    extract($_POST);

    if (!empty(trim($nome)) && !empty(trim($email))) {

      $email_valido = filter_var($email, FILTER_VALIDATE_EMAIL);

      if (!$email_valido) {
        echo "<script> 
              alert('Informe um e-mail válido!')
            </script>";
      } else {

        $SQL = "INSERT INTO usuarios(nome, email) VALUES (:nome,:email)";

        $cad_usuario = $conn->prepare($SQL);
        $cad_usuario->bindParam(':nome', $nome, PDO::PARAM_STR);
        $cad_usuario->bindParam(':email', $email, PDO::PARAM_STR);
        $cad_usuario->execute();

        if ($cad_usuario->rowCount()) {
          echo "<script> 
              alert('Usuário cadastrado com sucesso!')
            </script>";
        } else {
          echo "<script> 
              alert('Usuário não cadastrado!')
            </script>";
        }
      }
    }
  }

  ?>

  <form method="POST" action="" name="caduser">
    <label>Nome</label>
    <input type="text" name="nome" required="required"><br><br>

    <label>E-mail</label>
    <input type="email" name="email" required="required"><br><br>

    <button type="submit" name="btngravar">CADASTRAR</button>
  </form>

</body>

</html>
<?php
$msg = '';
$res = false;

if (isset($_POST['nome']) && 
	isset($_POST['email']) &&
	isset($_POST['telefone'])){
		extract($_POST);

	if (isset($_FILES['foto'])){
		//var_dump($_FILES['foto']); detalhes do arquivo
		$foto = $_FILES['foto'];
		if (file_exists($foto['tmp_name'])){
			$res = move_uploaded_file($foto['tmp_name'], 'img/'.$foto['name']);
		}
	}
	$img = 'img/'.$foto['name'];
	$msg = "$nome - $email - $telefone";
	$msg .= $res ? "<br><br><img src=$img height='150px'>" : ' - Erro ao carregar a foto';
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aula PW II | 27/08</title>
</head>
<body>

<!--form:post>label*3>input:text^button:submit -->
<form action="index.php" method="post" enctype="multipart/form-data">
	
	<label for="nome"> Nome:
		<input type="text" name="nome" id="nome">
	</label> <br>

	<label> E-mail:
		<input type="text" name="email">
	</label> <br>

	<label> Telefone:
		<input type="text" name="telefone">
	</label> <br>
	
	<label> Foto:
		<input type="file" name="foto">
	</label> <br>

	<button type="submit">ENVIAR</button>
</form>

<?php
	echo "<br>";
	if (strlen($msg) > 0) echo $msg;
?>

</body>
</html>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 4 | Desenvolvimento Web</title>
</head>

<body>
    <!-- EMET Criação do form -->
    <!-- form:post>label*2>input:text^img^button:submit -->

    <form action="calcular.php" method="post">

        <label for="valor1">Valor 1:
            <input type="text" name="valor1" id="valor1">
        </label><br><br>

        <label for="valor2">Valor 2:
            <input type="text" name="valor2" id="valor2">
        </label><br><br>

        Operador <select name="operador">
            <option value="">SELECIONE UMA OPERAÇÃO</option>
            <option value="+">SOMAR</option>
            <option value="-">SUBTRAIR</option>
            <option value="*">MULTIPLICAR</option>
            <option value="/">DIVIDIR</option>
        </select><br><br>

        <button type="submit">ENVIAR</button>
    </form>

</body>

</html>
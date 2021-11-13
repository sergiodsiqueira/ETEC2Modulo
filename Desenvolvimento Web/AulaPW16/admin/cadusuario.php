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
        <div class="d-flex justify-content-center">
            <div class="card p-2 w-25" style="min-width: 300px">
                <form action="POST" action="#">
                    <h3>Cadastro de Usuário</h3>

                    <label class="form-label" for='nome'>Nome:</label>
                    <input type="text" name="nome" id='nome' placeholder="Digite o nome" class="form-control" required>
                                  
                    <label class="form-label" for='email'>E-mail:</label>
                    <input type="email" name="email" id='email' placeholder="Digite o e-mail" class="form-control" required>

                    <label class="form-label" for='senha'>Senha:</label>
                    <input type="password" name="senha" id='senha' placeholder="Digite a senha" class="form-control" required>

                    <label class="form-label" for='selnivel'>Nível de Acesso:</label> <!-- Coloquei o for com o mesmo nome do select -->
                    <select name="selnivel" id="selnivel" class="form-select">
                        <option value="A" selected>Administrador</option>
                        <option value="M">Moderador</option>
                        <option value="U">Usuário</option>
                    </select>

                    <button type="submit" class="btn btn-primary mt-3 shadow">
                    <i class="fas fa-sign-in-alt"></i> Gravar</button>

                </form>
            </div> <!-- card --> 
        </div> <!-- d-flex -->
    </div> <!-- main -->
    
    
    <!-- rodapé -->
    <?php include_once 'rodape.php'; ?>
</body>
</html>
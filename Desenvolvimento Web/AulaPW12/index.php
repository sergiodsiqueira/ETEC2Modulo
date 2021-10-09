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
        <?php 
            require_once 'assets/includes/conexao.php';
            $conexao = new Conexao();
            $con = $conexao->conectar();
            $sql = 'select 
                        N.*, U.nome 
                    from 
                        noticia N, usuario U
                    where 
                        N.id_usuario = U.id
                    order by 
                        data_cadastro desc limit 3';
            $res = $con->query($sql);
            
            $noticias = '';
            if ($res) {
                while ($row = $res->fetch(PDO::FETCH_ASSOC)){
                    $noticias .= "<div class='col'>
                                    <div class='card h-100'>
                                    <img src='assets/imagens/{$row['foto']}' class='card-img-top' alt=''>
                                    <div class='card-body'>
                                        <h5 class='card-title'>{$row['titulo']}</h5>
                                        <h6 class='card-text'>{$row['nome']}</h6>
                                        <p class='card-text'>{$row['descricao']}</p>
                                    </div>
                                    <div class='card-footer'>
                                        <small class='text-muted'>{$row['data_cadastro']}</small>
                                    </div>
                                    </div>
                                </div>";
                }
            }
        ?>
        
        <div class="row row-cols-1 row-cols-md-3">
            <?php echo $noticias; ?>
        </div>
    </div>
    <!-- rodapé -->
    <?php include_once 'rodape.php'; ?>
</body>
</html>
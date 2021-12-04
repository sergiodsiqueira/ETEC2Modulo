<?php

namespace Includes;

class Layout
{

    public static function header()
    {
        return '<meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Site de Notícias</title>
                <link rel="stylesheet" href="' . PATH . 'assets/css/estilo.css">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer">';
    }

    public static function topo()
    {
        return '<div class="topo">
                  <img src="' . PATH . 'assets/imagens/logo.png" alt="">
                  <span>Site de Notícias</span>
                </div>';
    }

    public static function menu()
    {
        return '<div class="nav">
                    <ul>
                        <li><a href="' . PATH . 'index.php"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="' . PATH . 'sobre.php"><i class="fas fa-question-circle"></i> Sobre</a></li>
                        <li><a href="' . PATH . 'login.php"><i class="fas fa-user-lock"></i> Login</a></li>
                    </ul>
                </div>';
    }

    public static function rodape()
    {
        return '<div class="rodape">
            <div>Copyright &copy; 2021</div>
            <div class="social">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-whatsapp-square"></i></a>
                <a href="#"><i class="fab fa-twitter-square"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-instagram-square"></i></a>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>';
    }
}

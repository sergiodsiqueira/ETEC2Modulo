<?php
session_start(); //inicia sessão
$_SESSION = []; //limpa as variaveis de sessão
session_destroy(); //destroi a sessão
header('Location:../'); //desvia pra pagina inicial

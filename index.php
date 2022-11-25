<?php

session_start();

if (isset($_GET['pagina']) && $_GET['pagina'] == 'logout') {
    session_destroy();
    session_start();
    header('Location ?');
}

include_once 'banco/conexao.php';
include_once 'banco/autenticacao.php';

//limpar sacola
if (isset($_POST['limpar_carrinho'])) {
    unset($_SESSION['carrinho']);
}
//adicionar a sacola
if (isset($_POST['adicionar_carrinho'])) {
    $_SESSION['carrinho'][] = $_GET['id'];
}
//remover da sacola
if (isset($_POST['remover_carrinho'])) {
    unset($_SESSION['carrinho'][$_POST['produto']]);
}

include 'home.php';


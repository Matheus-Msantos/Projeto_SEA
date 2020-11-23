<?php

session_start();

$credenciais = [0 => ['user' => 'matheus@teste.com', 'pass' => '123456']];

if ( isset($_SESSION['login']) ){
    include 'menu.php';
}elseif ( isset($_POST['entrar'])){
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    if ( in_array( ['user' => $login, 'pass' => $senha], $credenciais ) ) {
        $_SESSION['login'] = $login;

        include 'menu.php';
    }
    else{
        $msg = 'Credenciais inválidas, tente novamente!';
        include'index_tpl.php';
    }
}else{
    include'index_tpl.php';
}
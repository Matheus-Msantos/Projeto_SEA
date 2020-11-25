<?php

session_start();

require_once 'db.php';

if ( isset($_SESSION['login']) ) {
    include 'menu.php';
}elseif ( isset($_POST['entrar']) ) {
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $r = $db->query("SELECT senha FROM usuario WHERE email = '$login'");
    $reg = $r->fetch( PDO::FETCH_ASSOC );
    $hash = $reg['senha'];

    if( password_verify($senha, $hash) ) {

        $_SESSION['login'] = $login;

        include 'menu.php';
    } else{
        $msg = 'Credenciais inválidas, tente novamente!';
        
        include 'index_tpl.php';
    }
} else{
    include 'index_tpl.php';
}



/*
if ( isset($_SESSION['login']) ){
    include 'menu.php';  
}elseif ( isset($_POST['entrar'] ) ){

    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $r = $db->query("SELECT senha FROM usuario WHERE email = '$login'");
    $reg = $r->fetch(PDO::FETCH_ASSOC);
    $hash = $reg['senha'];

    if ( password_verify($senha, $hash) ) {

        $_SESSION['login'] = $login;

        include 'menu.php';
    }
    else{
        $msg = 'Credenciais inválidas, tente novamente!';
        
        include 'index_tpl.php';
    }
}else{
    include 'index_tpl.php';
}

*/
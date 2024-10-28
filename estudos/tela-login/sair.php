<?php
    // sessao sair nao esta indo para o index

    session_start();
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: index.php');
?>
<?php
    session_start(); //5- cria o sistema

    //1- print_r($_REQUEST); 

    //2- VERIFICACAO

    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) { // verifica se o campo nao esta vazio

        // Acessa

        include_once('conexao.php');

        // 3- CRIACAO DE VARIAVEL
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        /*
        print_r($email);
        print_r($senha);
        */

        // 4- CONECTA AO BANCO DE DADOS
        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

        $result = $conexao->query($sql);

        /*
        print_r($result);
        print_r($sql);
        */

        if(mysqli_num_rows($result) < 1){

            //print_r('Nao existe');

            // caso nao exista nenhum registro destrua os dados
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Locations: login.php');

        } else {

            //print_r('Existe');

            // criacao das variaves
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: sistema.php');
        }

    } else {

        // Nao Acessa

        header('Location:index.php'); // retorna para o login
    }
?>
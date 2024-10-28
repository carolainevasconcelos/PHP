<?php
include_once('conexao.php');

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $sexo = $_POST['sexo'];
    $data_nascimento = $_POST['data_nascimento'];

    $sqlUpdate = "UPDATE usuarios SET nome='$nome',senha='$senha', email='$email',sexo='$sexo', data_nascimento='$data_nascimento' WHERE id='$id'";

    $result = $conexao->query($sqlUpdate);

} else {
    header('Location: sistema.php');
}
?>
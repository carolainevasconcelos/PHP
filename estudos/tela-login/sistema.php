<?php
//serve para proteger uma página restrita

session_start();

// 6
include_once('conexao.php');

//print_r($_SESSION);

if ((!isset($_SESSION['email']) == true) || (!isset($_SESSION['senha']) == true)) {

    unset($_SESSION['email']);
    unset($_SESSION['senha']);

    header('Location: index.php');
}

$logado = $_SESSION['email'];

// 5
$sql = "SELECT * FROM usuarios ORDER BY nome DESC";

$result = $conexao->query($sql);

// print_r($result);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="sair">
        <a href="sair.php">Sair</a>
    </div>
    <h1>Acessou o sistema</h1>
    <!-- Forma de armazenar os dados dos usuarios de formas individuais -->
    <div class="m-5">
        <!-- 7 -->
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Senha</th>
                    <th scope="col">Email</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Data de Nascimento</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // 8
                while ($user_data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $user_data['id'] . "</td>";
                    echo "<td>" . $user_data['nome'] . "</td>";
                    echo "<td>" . $user_data['senha'] . "</td>";
                    echo "<td>" . $user_data['email'] . "</td>";
                    echo "<td>" . $user_data['sexo'] . "</td>";
                    echo "<td>" . $user_data['data_nascimento'] . "</td>";
                    echo "<td>
                        <a class='image' href='edit.php?id=" . $user_data['id'] . "'>
                             <img src='img/image-pencil.png' alt='Editar'>
                        </a>
                    </td>";
                    echo "<td>
                        <a class='image' href='.php'>
                            <img src='img/image-lixeira.png' alt=''>
                        </a>
                    </td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>
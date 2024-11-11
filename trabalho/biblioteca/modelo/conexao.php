<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = 'Carolaine22';
$dbName = 'biblioteca';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// if($conexao->connect_errno){
//     echo "Erro";
// } else {
//     echo "Conexao efetuada com sucesso";
// }
?>
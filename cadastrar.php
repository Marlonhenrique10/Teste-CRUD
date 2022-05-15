<?php 

include 'conexao.php';

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cpf = $_POST['cpf'];

$sql = "INSERT INTO usuario VALUES ('', '$nome', '$sobrenome', '$email', '$telefone', '$cpf')";
$query_cadastrar = mysqli_query($conect, $sql);

header('location:listar.php');

?>
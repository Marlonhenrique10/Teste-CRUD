<?php 

include 'conexao.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cpf = $_POST['cpf'];

$sql = "UPDATE usuario SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', telefone = '$telefone', cpf = '$cpf' WHERE id = '$id'";
$query_cadastrar = mysqli_query($conect, $sql);

header('location:listar.php');

?>
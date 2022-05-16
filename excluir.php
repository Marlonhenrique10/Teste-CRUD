<?php 

include 'conexao.php';

$id = $_POST['id'];

$sql = "DELETE FROM usuario WHERE id = '$id'";
$query_cadastrar = mysqli_query($conect, $sql);

header('location:listar.php');
?>
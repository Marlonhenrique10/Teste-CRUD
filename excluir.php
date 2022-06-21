<?php 

include 'conexao.php';

$id = $_POST['id'];

$sql = "DELETE FROM informacao WHERE id = '$id'";
$query_cadastrar = mysqli_query($conect, $sql);

header('location:listar.php');
?>
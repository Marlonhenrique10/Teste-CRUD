<?php 

include 'conexao.php';

$id = $_POST['id_usuario'];

$sql = "DELETE FROM usuario WHERE id_usuario = '$id'";
$query_cadastrar = mysqli_query($conect, $sql);

header('location: listar.php');

?>
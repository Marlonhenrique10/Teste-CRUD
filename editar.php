<?php 

    include 'conexao.php';

    $id = $_POST['id'];
    $operadora = $_POST['operadora'];
    $planos = $_POST['plano'];
    $valorPlano = $_POST['vlPlano'];
    $coparticipacao = $_POST['coparticipacao'];
    $cobertura = $_POST['cobertura'];
    $hospital = $_POST['hospital'];
    $valoRembolso = $_POST['vlRembolso'];
    $logo = $_POST['editar-imagem'];
    $nomeOperadora = $_POST['nomeOperadora'];
    $visualizar = $_POST['visivel'];
    
    $sql = "UPDATE informacao
                SET operadora = '$operadora', planos = '$planos', valor_plano = '$valorPlano', 
                    coparticipacao = '$coparticipacao', cobertura = '$cobertura', hospital = '$hospital',
                    valor_rembolso = '$valoRembolso', logo = '$logo', nome_operadora = '$nomeOperadora', visualizar = '$visualizar' 
                WHERE id = '$id'";
    
    $query_cadastrar = mysqli_query($conect, $sql);

    header('location:listar.php');

?>
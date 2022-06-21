<?php 
    
    include 'conexao.php';
    
    $operadora = $_POST['operadora'];
    $planos = $_POST['plano'];
    $valorPlano = $_POST['vlPlano'];
    $coparticipacao = $_POST['coparticipacao'];
    $cobertura = $_POST['cobertura'];
    $hospital = $_POST['hospital'];
    $valoRembolso = $_POST['vlRembolso'];
    $logo = $_POST['logo'];
    $nomeOperadora = $_POST['nomeOperadora'];
    $visualizar = $_POST['visivel'];
    
    $sql = "INSERT INTO informacao (operadora, planos, valor_plano, coparticipacao, cobertura, hospital, valor_rembolso, logo, nome_operadora, visualizar) 
                    VALUES ('$operadora','$planos','$valorPlano','$coparticipacao','$cobertura','$hospital','$valoRembolso','$logo', '$nomeOperadora', '$visualizar')";
    
    $query_cadastrar = mysqli_query($conect, $sql);

    header('location:listar.php');
?>
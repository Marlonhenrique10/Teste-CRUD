<?php 

    $host = 'localhost';
    $user = 'root';
    $senha = '';
    $bd_name = 'planos_seguro';

    if($bd_name)
    {           
        $conect = mysqli_connect($host, $user, $senha, $bd_name);    
    }

?>
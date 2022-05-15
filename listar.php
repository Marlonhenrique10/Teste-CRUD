<?php 

include 'conexao.php';

$sql = "SELECT * FROM usuario";

$query = mysqli_query($conect, $sql);

?>
<!doctype html>
<html lang="pt-br">
  <head>
    <title>Desafio Esferas Software</title>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  </head>
  <body>
    <br>
    <div class="col-sm-12">
        <div class="card card-dark card-outline">
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <div class="m-0">
                            <div class="col-sm-9">
                                <a href="cadastrar.php" type="button" class="btn btn-danger" id="cadastrar" title="Cadastrar">
                                    <i class="fa fa-address-card"></i>&nbsp;
                                    Cadastrar
                                </a>
                            </div>
                        </div>
                    </div>                                            
                </div>
            </div>
        </div>
    </div>    

    <br>

    <div class="col-sm-12">
        <div class="card card-secundary card-tabs">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">                        
                        <div class="row">
                            <div class="col-sm">                                
                                <table class="table table-responsive-sm table-striped table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th class="text-center">Nome</th>
                                            <th class="text-center">Sobrenome</th>
                                            <th class="text-center">CPF</th>
                                            <th class="text-center">E-mail</th>
                                            <th class="text-center">Telefone</th>
                                            <th class="text-center">Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>                                        
                                        <?php 
                                        while($dados = mysqli_fetch_array($query))
                                        {
                                            
                                            $id = $dados['id_usuario'];
                                            $nome = $dados['nome'];
                                            $sobrenome = $dados['sobrenome'];
                                            $cpf = $dados['cpf'];
                                            $email = $dados['email'];
                                            $telefone = $dados['telefone'];
                                        
                                        ?>

                                        <tr>
                                            <td class="text-center"><?php echo $nome; ?></td>
                                            <td class="text-center"><?php echo $sobrenome; ?></td>
                                            <td class="text-center"><?php echo $cpf; ?></td>
                                            <td class="text-center"><?php echo $email; ?></td>
                                            <td class="text-center"><?php echo $telefone; ?></td>
                                            <td class="text-center">
                                                <a href="editar.php" type="button" class="btn btn-dark btn-editar" title="Editar Usuário">
                                                    <i class="fas fa-edit"></i>                  
                                                </a>
                                                <a href="#" type="button" class="btn btn-danger btn-excluir" title="Excluir Usuário">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php }; ?>                                                                               
                                    </tbody>                                    
                                </table> 
                            </div>
                        </div>                        
                    </div>      
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
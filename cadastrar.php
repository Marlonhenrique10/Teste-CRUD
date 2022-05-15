<?php 

include 'conexao.php';

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cpf = $_POST['cpf'];

$sql = "INSERT INTO usuario VALUES ('', '$nome', '$sobrenome', '$email', '$telefone', '$cpf')";
$query_cadastrar = mysqli_query($conect, $sql);

?>

<!doctype html>
<html lang="pt-br">
  <head>    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="col-lg-12">
        <div class="card card-primary card-outline mt-2">
            <div class="card-header">
                <div class="row">
                    <div class="col">                        
                        <h5 class="m-0">
                            Cadastrar Usuário
                        </h5>
                    </div>
                </div>

                <br>
                <hr>
                <br>

                <div class="col-sm-12">        
                    <div class="card-body">                
                        <form action="cadastrar.php" method="POST" id="formulario-usuario">

                            <div class="row">
                                <div class="col-sm-2">                                    
                                    <input type="text" name="id" class="form-control form-control-sm" hidden>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <label for="nome">Nome*</label>
                                    <input type="text" name="nome" id="nome" class="form-control form-control-sm" placeholder="Digite seu nome">
                                </div>

                                <div class="col-sm-1"></div>

                                <div class="col-sm-4 ml-1">
                                    <label for="sobrenome">Sobrenome*</label>
                                    <input type="text" id="sobrenome" name="sobrenome" class="form-control form-control-sm" placeholder="Digite seu sobrenome">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4 mt-5">
                                    <label for="email">E-mail</label>
                                    <input type="text" name="email" id="email" class="form-control form-control-sm" placeholder="Digite seu e-mail">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4 mt-5">
                                    <label for="telefone">Telefone*</label>
                                    <input type="text" name="telefone" id="telefone" class="form-control form-control-sm" placeholder="Digite seu telefone">
                                </div>

                                <div class="col-sm-1"></div>

                                <div class="col-sm-4 mt-5">
                                    <label for="cpf">CPF</label>
                                    <input type="text" name="cpf" id="cpf" class="form-control form-control-sm" placeholder="Digite seu cpf"> 
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-8 mt-5">
                                    <button type="submit" id="salvar" class="btn btn-primary"><i class="fa fas-save"></i> Salvar</button>
                                    <a href="listar.php" class="btn btn-secondary voltar">
                                        <i class="fa fas-replay"></i> Voltar
                                    </a>
                                </div>
                            </div>
                        </form>               
                    </div>             
                </div> 
            </div>
        </div>
    </div>     
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>    
    <script src="https://rawgit.com/RobinHerbots/Inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
    <script type="text/javascript">
        
        jQuery('#salvar').on('click', function(){
            
            let telefone = jQuery('#telefone').val();
    
            if(telefone.length < 12 ) {                
                swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Telefone inválido!',
                    button: 'OK',
                    timer: 100000,
                });
                return;
            }
        });

        $("input[id*='cpf']").inputmask({
            mask: ['999.999.999-99'],
            keepStatic: true
        });

        $("input[id*='telefone']").inputmask({
            mask: ['(55) 99 9 9999-9999'],
            keepStatic: true
        });        
        
    </script>
  </body>
</html>
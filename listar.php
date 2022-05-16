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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  </head>
  <body>
    <br>

    <div class="col-lg-12">
        <div class="card card-dark card-outline">
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <div class="m-0">
                            <button type="submit" class="btn btn-danger" id="cadastrar" title="Cadastrar">
                                <i class="fa fa-address-card"></i>&nbsp;
                                Cadastrar
                            </button>
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
                                            
                                            $id = $dados['id'];
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
                                                <form action="excluir.php" method="post">
                                                    <input type="text" name="id" value="<?= $id; ?>" hidden>
                                                    <button type="submit" class="btn btn-danger" title="Excluir">
                                                        <i class="fas fa-trash"></i>
                                                    </button>                                                    
                                                </form>
                                                <br>                                                
                                                <button type="submit" class="btn btn-dark editar" name="editar" title="Editar" data-codigo-id="<?= $id; ?>" data-codigo-nome="<?= $nome; ?>" data-codigo-sobrenome="<?= $sobrenome; ?>" data-codigo-email="<?= $email; ?>" data-codigo-telefone="<?= $telefone; ?>" data-codigo-cpf="<?= $cpf; ?>">
                                                    <i class="fas fa-edit"></i>
                                                </button>
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

    <!-- Modal Cadastrar Novo Usuário -->
    <div class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" id="modal-cadastrar">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="row">
                        <div class="m-0">
                            <h5 class="m-0 ml-4">                                
                                Cadastrar Usuário
                            </h5>
                        </div>
                    </div>
                    <hr>
                </div>
                <br>
                <div class="modal-body">
                    <form action="cadastrar.php" method="post">
                        <div class="row">                            
                            <div class="col-sm-4">
                                <label for="nome">Nome*</label>
                                <input type="text" id="nome" name="nome" class="form-control form-control-sm" required>                            
                            </div>
    
                            <div class="col-sm-4">
                                <label for="sobrenome"> Sobrenome</label>
                                <input type="text" id="sobrenome" name="sobrenome"  class="form-control form-control-sm" required>
                            </div>                            
                        </div>
                        
                        <br>
    
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="email"> E-mail</label>
                                <input type="text" id="email" name="email" class="form-control form-control-sm" required>
                            </div>
                        </div>
    
                        <br>
    
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="telefone"> Telefone</label>
                                <input type="text" name="telefone" id="telefone" class="form-control form-control-sm">
                            </div> 
                        
                            <div class="col-sm-4">
                                <label for="cpf">CPF</label>
                                <input type="text" id="cpf" name="cpf" class="form-control form-control-sm">
                            </div>
                        </div>                              
                        <!-- <input type="submit" value="Enviar"> -->
                        <div class="modal-footer">
                            <div class="row mb-3">
                                <div class="col-md">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal"> Fechar</button>
                                    <button  type="submit" class="btn btn-dark"> Salvar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Editar Usuário -->
    <div class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" id="modal-editar">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="row">
                        <div class="m-0">
                            <h5 class="m-0 ml-4">                                
                                Editar Usuário
                            </h5>
                        </div>
                    </div>
                    <hr>
                </div>
                <br>
                <div class="modal-body">
                    <form action="editar.php" method="post">
                        <div class="row">                            
                            <div class="col-sm-4">
                                <label for="nome">Nome*</label>
                                <input type="text" id="addNome" name="nome" class="form-control form-control-sm">                            
                            </div>
    
                            <div class="col-sm-4">
                                <label for="sobrenome"> Sobrenome</label>
                                <input type="text" id="addSobrenome" name="sobrenome" class="form-control form-control-sm">
                            </div>
                            
                            <div class="col-sm-2">
                                <input type="text" name="id" id="addId" hidden>
                            </div>
                        </div>
                        
                        <br>
    
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="email"> E-mail</label>
                                <input type="text" id="addEmail" name="email" class="form-control form-control-sm">
                            </div>
                        </div>
    
                        <br>
    
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="telefone"> Telefone</label>
                                <input type="text" name="telefone" id="addTelefone" class="form-control form-control-sm">
                            </div> 
                        
                            <div class="col-sm-4">
                                <label for="cpf">CPF</label>
                                <input type="text" id="addCpf" name="cpf" class="form-control form-control-sm">
                            </div>
                        </div>                              

                        <div class="modal-footer">
                            <div class="row mb-3">
                                <div class="col-md">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal"> Fechar</button>
                                    <button  type="submit" class="btn btn-dark"> Salvar</button>
                                </div>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://rawgit.com/RobinHerbots/Inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">            

        jQuery('#cadastrar').on('click', function(){
            $("input[id*='cpf']").inputmask({
                mask: ['999.999.999-99'],
                keepStatic: true
            });
    
            $("input[id*='telefone']").inputmask({
                mask: ['(55) 99 9 9999-9999'],
                keepStatic: true
            });

            jQuery('#modal-cadastrar').modal('show');

            var nome = jQuery('#nome').val();
            var sobrenome = jQuery('#sobrenome').val();
            var email = jQuery('#email').val();
            var telefone = jQuery('#telefone').val();
            var cpf = jQuery('#cpf').val();

            if(nome == '' && sobrenome == '' && email == '' && telefone == '' && cpf == '') {
                swal({
                    title: 'OPS!',
                    text: 'Nenhum campo pode estar vazio',
                    icon: 'error',
                    button: 'OK',
                });
                return;
            }            
        });            

        jQuery(document).on('click', '.editar', function(){
            jQuery('#modal-editar').modal('show');

            let nome = jQuery(this).attr('data-codigo-nome');
            let sobrenome = jQuery(this).attr('data-codigo-sobrenome');
            let id = jQuery(this).attr('data-codigo-id');
            let email = jQuery(this).attr('data-codigo-email');
            let telefone = jQuery(this).attr('data-codigo-telefone');
            let cpf = jQuery(this).attr('data-codigo-cpf');
            
            jQuery('#addNome').val(nome);
            jQuery('#addSobrenome').val(sobrenome);
            jQuery('#addId').val(id);
            jQuery('#addEmail').val(email);
            jQuery('#addTelefone').val(telefone);
            jQuery('#addCpf').val(cpf);

            $("input[id*='addCpf']").inputmask({
                mask: ['999.999.999-99'],
                keepStatic: true
            });

            $("input[id*='telefone']").inputmask({
                mask: ['(55) 99 9 9999-9999'],
                keepStatic: true
            });
        });
        
    </script>
  </body>
</html>
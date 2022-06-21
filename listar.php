<?php 

include 'conexao.php';

$sql = "SELECT * FROM informacao";

$query = mysqli_query($conect, $sql);

?>
<!doctype html>
<html lang="pt-br">
  <head>
    <title>Teste Marktub</title>    
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light margin">
        <a href="#" class="navbar-brand">
            <img src="logos_icones/logos_icones/logo_desafiador.png" class="imagemLogo">
        </a>
        <div class="collaps navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#home" class="nav-link" aria-current="page">HOME</a>
                </li>
                <li class="nav-item">
                    <a href="#contato" class="nav-link">CONTATO</a>
                </li>
                <li class="nav-item">
                    <a href="#planos" class="nav-link active" id="inicio">PLANOS</a>
                </li>                
                <li class="nav-item">
                    <a href="#cms" class="nav-link">CMS</a>
                </li>
                <li class="nav-item">
                    <a href="#historia" class="nav-link">História</a>
                </li>            
            </ul>                     
        </div>            
    </nav>

    <a class="btn-fixed" href="#inicio">
        <span class="material-icons">
            north
        </span>
    </a>
    
    <section id="planos">
        <h5 class="text-center mt-2">PLANOS</h5>        
        <div class="col-sm-12">
            <div class="card card-primary card-outline">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="cms">CMS</label><br>
                            <button class="btn btn-dark" style="margin-bottom: 10px;" id="cadastrar" title="Cadastrar">
                                <i class="fa fa-address-book"></i>&nbsp;
                                Cadastrar
                            </button>                               
                        </div>
                    </div>
                    <div class="row">                        
                        <div class="table-responsive">
                            <table class="table table-responsive-sm table-bordered table-striped" id="tabela-informacao">
                                <thead>
                                    <tr>
                                        <th class="text-center"> <input type="image" src="logos_icones/logos_icones/bradescologo.png" style="width: 225px; height: 75px; margin-left: 45px;" id="primeiraImagem" title="Primeira Imagem"> </th>
                                        <th class="text-center"> <input type="image" src="logos_icones/logos_icones/allianzlogo.png" style="width: 225px; height: 75px; margin-left: 45px;" id="segundaImagem" title="Segunda Imagem"> </th>
                                        <th class="text-center"> <input type="image" src="logos_icones/logos_icones/portologo.png" style="width: 225px; height: 75px; margin-left: 45px;" id="terceiraImagem" title="Terceira Imagem"> </th>                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                while($dados = mysqli_fetch_array($query)) {
                                    $id = $dados['id'];
                                    $operadora = $dados['operadora'];
                                    $planos = $dados['planos'];
                                    $valorPlano = $dados['valor_plano'];
                                    $coparticipacao = $dados['coparticipacao'];
                                    $cobertura = $dados['cobertura'];
                                    $hospital = $dados['hospital'];
                                    $valorRembolso = $dados['valor_rembolso'];
                                    $logo = ['logo'];
                                    $nomeOperadora = $dados['nome_operadora'];
                                    $visualizar = $dados['visualizar'];
                                
                                ?>

                                <tr>
                                    <td class="text-center">
                                        <table class="table table-responsive-sm table-bordered table-striped" id="tabela-primeira-imagem">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Operadora</th>
                                                    <th class="text-center">Nome do Plano</th>
                                                    <th class="text-center">Valor do plano</th>
                                                    <th class="text-center">Coparticipação</th>
                                                    <th class="text-center">Cobertura</th>
                                                    <th class="text-center">Hospital</th>
                                                    <th class="text-center">Valor do Rembolso</th>                                                    
                                                    <th class="text-center">Nome da Operadora</th>                                                   
                                                    <th class="text-center">Ações</th>                                                   
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <td class="text-center"><?= $operadora; ?></td>
                                                <td class="text-center"><?= $planos; ?></td>
                                                <td class="text-center"><?= 'R$' . $valorPlano; ?></td>
                                                <td class="text-center"><?= $coparticipacao . '%'; ?></td>
                                                <td class="text-center"><?= $cobertura; ?></td>
                                                <td class="text-center"><?= $hospital; ?></td>
                                                <td class="text-center"><?= 'R$' . $valorRembolso; ?></td>
                                                <td class="text-center"><?= $nomeOperadora; ?></td>     
                                                <td class="text-center">
                                                    <button class="btn btn-dark btn-editar" title="Editar" data-codigo-id="<?= $id; ?>" data-codigo-operadora="<?= $operadora; ?>" data-codigo-plano="<?= $planos; ?>" data-valor-plano="<?= $valorPlano; ?>" data-codigo-coparticipacao="<?= $coparticipacao; ?>" data-codigo-cobertura="<?= $cobertura; ?>" data-codigo-hospital="<?= $hospital; ?>" data-valor-rembolso="<?=  $valorRembolso; ?>" data-codigo-logo="<?= $logo; ?>" data-nome-operadora="<?= $nomeOperadora; ?>" data-codigo-visualizar="<?= $visualizar; ?>">
                                                        <i class="fa fa-edit"></i>                                            
                                                    </button>
                                                    <form action="excluir.php" method="post">
                                                        <input type="text" name="id" value="<?= $id; ?>" hidden>                                         
                                                        <button class="btn btn-warning btn-excluir mt-1" data-codigo-id="<?= $id; ?>" title="Excluir">
                                                            <i class="fa fa-trash"></i>                                                
                                                        </button>  
                                                    </form> 
                                                </td>     
                                            </tbody>
                                        </table>
                                    </td>       

                                    <td class="text-center">
                                        <table class="table table-responsive table-bordered table-striped" id="tabela-primeira-imagem">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Operadora</th>
                                                    <th class="text-center">Nome do Plano</th>
                                                    <th class="text-center">Valor do plano</th>
                                                    <th class="text-center">Coparticipação</th>
                                                    <th class="text-center">Cobertura</th>
                                                    <th class="text-center">Hospital</th>
                                                    <th class="text-center">Valor do Rembolso</th>                                                    
                                                    <th class="text-center">Nome da Operadora</th>                                                   
                                                    <th class="text-center">Ações</th>                                                   
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <td class="text-center"><?= $operadora; ?></td>
                                                <td class="text-center"><?= $planos; ?></td>
                                                <td class="text-center"><?= 'R$' . $valorPlano; ?></td>
                                                <td class="text-center"><?= $coparticipacao . '%'; ?></td>
                                                <td class="text-center"><?= $cobertura; ?></td>
                                                <td class="text-center"><?= $hospital; ?></td>
                                                <td class="text-center"><?= 'R$' . $valorRembolso; ?></td>
                                                <td class="text-center"><?= $nomeOperadora; ?></td>     
                                                <td class="text-center">
                                                    <button class="btn btn-dark btn-editar" title="Editar" data-codigo-id="<?= $id; ?>" data-codigo-operadora="<?= $operadora; ?>" data-codigo-plano="<?= $planos; ?>" data-valor-plano="<?= $valorPlano; ?>" data-codigo-coparticipacao="<?= $coparticipacao; ?>" data-codigo-cobertura="<?= $cobertura; ?>" data-codigo-hospital="<?= $hospital; ?>" data-valor-rembolso="<?=  $valorRembolso; ?>" data-codigo-logo="<?= $logo; ?>" data-nome-operadora="<?= $nomeOperadora; ?>" data-codigo-visualizar="<?= $visualizar; ?>">
                                                        <i class="fa fa-edit"></i>                                            
                                                    </button>
                                                    <form action="excluir.php" method="post">
                                                        <input type="text" name="id" value="<?= $id; ?>" hidden>                                         
                                                        <button class="btn btn-warning btn-excluir mt-1" data-codigo-id="<?= $id; ?>" title="Excluir">
                                                            <i class="fa fa-trash"></i>                                                
                                                        </button>  
                                                    </form> 
                                                </td>     
                                            </tbody>
                                        </table>
                                    </td>                                    
                                    <td class="text-center">
                                        <table class="table table-responsive table-bordered table-striped" id="tabela-primeira-imagem">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Operadora</th>
                                                    <th class="text-center">Nome do Plano</th>
                                                    <th class="text-center">Valor do plano</th>
                                                    <th class="text-center">Coparticipação</th>
                                                    <th class="text-center">Cobertura</th>
                                                    <th class="text-center">Hospital</th>
                                                    <th class="text-center">Valor do Rembolso</th>                                                    
                                                    <th class="text-center">Nome da Operadora</th>                                                   
                                                    <th class="text-center">Ações</th>                                                   
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <td class="text-center"><?= $operadora; ?></td>
                                                <td class="text-center"><?= $planos; ?></td>
                                                <td class="text-center"><?= 'R$' . $valorPlano; ?></td>
                                                <td class="text-center"><?= $coparticipacao . '%'; ?></td>
                                                <td class="text-center"><?= $cobertura; ?></td>
                                                <td class="text-center"><?= $hospital; ?></td>
                                                <td class="text-center"><?= 'R$' . $valorRembolso; ?></td>
                                                <td class="text-center"><?= $nomeOperadora; ?></td>     
                                                <td class="text-center">
                                                    <button class="btn btn-dark btn-editar" title="Editar" data-codigo-id="<?= $id; ?>" data-codigo-operadora="<?= $operadora; ?>" data-codigo-plano="<?= $planos; ?>" data-valor-plano="<?= $valorPlano; ?>" data-codigo-coparticipacao="<?= $coparticipacao; ?>" data-codigo-cobertura="<?= $cobertura; ?>" data-codigo-hospital="<?= $hospital; ?>" data-valor-rembolso="<?=  $valorRembolso; ?>" data-codigo-logo="<?= $logo; ?>" data-nome-operadora="<?= $nomeOperadora; ?>" data-codigo-visualizar="<?= $visualizar; ?>">
                                                        <i class="fa fa-edit"></i>                                            
                                                    </button>
                                                    <form action="excluir.php" method="post">
                                                        <input type="text" name="id" value="<?= $id; ?>" hidden>                                         
                                                        <button class="btn btn-warning btn-excluir mt-1" data-codigo-id="<?= $id; ?>" title="Excluir">
                                                            <i class="fa fa-trash"></i>                                                
                                                        </button>  
                                                    </form> 
                                                </td>     
                                            </tbody>
                                        </table>
                                    </td>                                                                    
                                </tr>                                    
                                </tbody>
                                <?php }; ?>
                            </table>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    

    <section id="historia">
        <h5 class="text-center" style="margin-top: 20px;">História</h5>
        <div style="margin-left: 20px; margin-top: 40px;">
            <img src="logos_icones/logos_icones/logo_desafiador.png" align="left" style="width: 220px; height: 95px;">
            <p>Com muito profissionalismo, integridade, imparcialidade e valorização das pessoas em cada processo do nosso trabalho,<br> hoje atendemos mais de 2000 clientes nos mais variados setores.</p>
            <p>Para chegar onde estamos hoje trabalhamos para desenvolver um atendimento altamente personalizado e qualificado para cuidar de cada um de nossos clientes.<br> Nosso maior compromisso é proporcionar a melhor experiência em saúde e bem-estar.</p>            
        </div>
    </section>

    <section id="contato" style="margin-left: 10px; margin-right: 10px;">
        <footer>                             
            <ul class="listaNaoOrdenada">            
                <li>
                    <a href="mailto:teste@gmail.com">
                        <i class="fa fa-envelope"> teste@gmail.com</i>
                    </a>                          
                </li><br>               
                <li>
                    <a href="tel:+5511999999999">
                    <i class="fa fa-volume-control-phone">  Telefone: 11999999999</i>
                    </a>
                </li><br>
                <li>
                    <a href="https://github.com/Marlonhenrique10" target="_blank">
                    <i class="fa fa-github-square">  Github</i>
                    </a>
                </li>            
            </ul>       
            <p style="font-size: small; font-style: italic; margin-left: 6px;">Desenvolvido por Marlon Henrique</p>                  
        </footer>
    </section>

    <!-- Modal para cadastrar cms -->
    <div class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" id="cadastrar-cms">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="row">
                        <div class="m-0">
                            <h5 class="m-0">                                
                                Plano:
                            </h5>
                        </div>
                    </div>                    
                </div>

                <div class="modal-body">
                    <form action="cadastrar.php" method="post">

                        <div class="row">

                            <div class="col-sm-3">
                                <label for="operadora" class="mb-2">Operadora*</label>
                                <input type="text" name="operadora" id="operadora" class="form-control form-control-sm" required="required" placeholder="Digite a operadora">                                
                            </div>
    
                            <div class="col-sm-3">
                                <label for="nomePlano" class="mb-2">Nome do Plano*</label>
                                <input type="text" name="plano" id="plano" class="form-control form-control-sm" placeholder="Digite o nome do plano" required="required">
                            </div>
    
                            <div class="col-sm-3">
                                <label for="vlPlano" class="mb-2">Valor do Plano (R$)*</label>
                                <input type="number" name="vlPlano" id="vlplano" class="form-control form-control-sm" placeholder="Digite o valor do plano" required="required">
                            </div>
                        </div>
    
                        <br>

                        <div class="row">
                            <div class="col-sm-3">
                                <label for="coparticipacao">Coparticipação*</label>
                                <input type="text" name="coparticipacao" id="coparticipacao" class="form-control form-control-sm" placeholder="Digite a coparticipação em %" required="required">
                            </div>

                            <div class="col-sm-3">
                                <label for="cobertura">Cobertura*</label>
                                <input type="text" name="cobertura" id="cobertura" class="form-control form-control-sm" required="required" placeholder="Digite a cobertura">                                
                            </div>                        
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-sm-4">
                                <label for="hospital">Hospitais*</label>
                                <div class="input-group">
                                    <input type="text" name="hospital" id="hospital" class="form-control form-control-sm" style="margin-right: 10px;" placeholder="Digite o nome do hospital" required="required">
                                    <button class="btn btn-secondary">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
    
                        <br>

                        <div class="row">
                            <div class="col-sm-3">
                                <label for="vlRembolso">Valor do Rembolso (R$)*</label>
                                <input type="number" name="vlRembolso" id="vlrembolso" class="form-control form-control-sm" placeholder="Digite o valor do rembolso" required="required">
                            </div>                        
                        </div>                                            

                        <hr>                        

                        <div class="modal-header">
                            <div class="row">
                                <div class="m-0">
                                    <h5 class="m-0">
                                        OPERADORA:
                                    </h5>
                                </div>
                            </div>                            
                        </div>
                        <div class="modal-body">
                            <div class="col-sm-4 text-center" style="background-color: #e1e1e1; margin-bottom: 2rem;">
                                <span class="text-secondary"> SUA IMAGEM</span>
                                <div class="row justify-content-center" style="height:200px;">
                                    <img id="visualizador" alt="selecione imagem"  class="col-sm-10" required="required">
                                </div>
            
                                <div class="row justify-content-center">
                                    <label for="imagem" id="addImagem" class="btn btn-dark col-sm-4 mt-2 mb-2 text-center" style="cursor: pointer;" title="Selecionar uma imagem">
                                        Selecionar
                                    </label>
            
                                    <span class="col-sm-1">&nbsp;</span>
            
                                    <label for="imagem" id="remover-imagem" class="btn btn-warning col-sm-4 mt-2 mb-2 text-center" onclick="removerImagem(event)" style="cursor: pointer;" title="Remover a imagem selecionada">
                                        Remover
                                    </label>
            
                                    <input id="imagem" name="logo" type="file" accept="image/*" onchange="carregarImagem(event)" style="display: none;" required="required">
                                </div>
            
            
                            </div>

                            <br>
                            
                            <div class="row">
                                <div class="col-sm-3">
                                    <label for="nomeOperadora">Nome da Operadora*</label>
                                    <input type="text" name="nomeOperadora" id="nomeOperadora" class="form-control form-control-sm" placeholder="Digite o nome da operadora" required="required">
                                </div>                                
                            </div>

                            <br><br>

                            <div class="row">
                                <div class="col-sm-3">
                                    Visível na página inicial?*
                                    <br>
                                    NÃO <label class="switch mb-2 mt-2">
                                    <input type="checkbox" id="visivel" name="visivel">
                                    <span class="slider round"></span>
                                    </label> SIM
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="row">
                                <div class="col-sm">
                                    <button type="button" class="btn btn-secondary btn-fechar" data-dismiss="modal"> Fechar</button>
                                    <button type="submit" class="btn btn-dark"> Salvar</button>
                                </div>
                            </div>
                        </div>
                    </form>                    
                </div>
            </div>
        </div>
    </div>

    <!-- Modal para editar cms -->
    <div class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" id="editar-cms">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="row">
                        <div class="m-0">
                            <h5 class="m-0">                                
                                Plano:
                            </h5>
                        </div>
                    </div>                    
                </div>

                <div class="modal-body">
                    <form action="editar.php" method="post">

                        <div class="row">                            
                            <div class="col-sm-3">
                                <label for="operadora" class="mb-2">Operadora*</label>
                                <input type="text" name="operadora" id="edtOperadora" class="form-control form-control-sm" required="required" placeholder="Digite a operadora">                                
                            </div>
    
                            <div class="col-sm-3">
                                <label for="nomePlano" class="mb-2">Nome do Plano*</label>
                                <input type="text" name="plano" id="edtPlano" class="form-control form-control-sm" placeholder="Digite o nome do plano" required="required">
                            </div>
    
                            <div class="col-sm-3">
                                <label for="vlPlano" class="mb-2">Valor do Plano (R$)*</label>
                                <input type="number" name="vlPlano" id="edtVlplano" class="form-control form-control-sm" placeholder="Digite o valor do plano" required="required">
                            </div>

                            <div class="col-sm-1">
                                <input type="text" name="id" id="edtId" class="form-control form-control-sm" hidden>
                            </div>
                        </div>
    
                        <br>

                        <div class="row">
                            <div class="col-sm-3">
                                <label for="coparticipacao">Coparticipação*</label>
                                <input type="text" name="coparticipacao" id="edtCoparticipacao" class="form-control form-control-sm" placeholder="Digite a coparticipação em %" required="required">
                            </div>

                            <div class="col-sm-3">
                                <label for="cobertura">Cobertura*</label>
                                <input type="text" name="cobertura" id="edtCobertura" class="form-control form-control-sm" required="required" placeholder="Digite a cobertura">                                
                            </div>                        
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-sm-4">
                                <label for="hospital">Hospitais*</label>
                                <div class="input-group">
                                    <input type="text" name="hospital" id="edtHospital" class="form-control form-control-sm" style="margin-right: 10px;" placeholder="Digite o nome do hospital" required="required">
                                    <button class="btn btn-secondary">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
    
                        <br>

                        <div class="row">
                            <div class="col-sm-3">
                                <label for="vlRembolso">Valor do Rembolso (R$)*</label>
                                <input type="number" name="vlRembolso" id="edtVlrembolso" class="form-control form-control-sm" placeholder="Digite o valor do rembolso" required="required">
                            </div>                        
                        </div>                                            

                        <hr>                        

                        <div class="modal-header">
                            <div class="row">
                                <div class="m-0">
                                    <h5 class="m-0">
                                        OPERADORA:
                                    </h5>
                                </div>
                            </div>                            
                        </div>
                        <div class="modal-body">
                            <div class="col-sm-4 text-center" style="background-color: #e1e1e1; margin-bottom: 2rem;">
                                <span class="text-secondary"> SUA IMAGEM</span>
                                <div class="row justify-content-center" style="height:200px;">
                                    <img id="visualizador2" alt="selecione a imagem"  class="col-sm-10" required="required">
                                </div>
            
                                <div class="row justify-content-center">
                                    <label for="editar-imagem" id="editImagem" class="btn btn-dark col-sm-4 mt-2 mb-2 text-center" style="cursor: pointer;" title="Selecionar uma imagem">
                                        Selecionar
                                    </label>
            
                                    <span class="col-sm-1">&nbsp;</span>
            
                                    <label for="editar-imagem" id="remover-imagem" class="btn btn-warning col-sm-4 mt-2 mb-2 text-center" onclick="tirarImagem(event)" style="cursor: pointer;" title="Remover a imagem selecionada">
                                        Remover
                                    </label>
            
                                    <input id="editar-imagem" name="editar-imagem" type="file" accept="image/*" onchange="trocarImagem(event)" style="display: none;" required="required">
                                </div>            
                            </div>

                            <br>
                            
                            <div class="row">
                                <div class="col-sm-3">
                                    <label for="nomeOperadora">Nome da Operadora*</label>
                                    <input type="text" name="nomeOperadora" id="edtNomeOperadora" class="form-control form-control-sm" placeholder="Digite o nome da operadora" required="required">
                                </div>                                
                            </div>

                            <br><br>

                            <div class="row">
                                <div class="col-sm-3">
                                    Visível na página inicial?*
                                    <br>
                                    NÃO <label class="switch mb-2 mt-2">
                                    <input type="checkbox" id="edtVisivel" name="visivel">
                                    <span class="slider round"></span>
                                    </label> SIM
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="row">
                                <div class="col-sm">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal"> Fechar</button>
                                    <button type="submit" class="btn btn-dark"> Salvar</button>
                                </div>
                            </div>
                        </div>
                    </form>                    
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
    <script type="text/javascript" charset="utf-8" src="/Scripts/jquery.js"></script>
    <script type="text/javascript" charset="utf-8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="/Scripts/jquery.dataTables.js"></script>
    <script type="text/javascript">

        const botao = document.querySelector(".btn-fixed");

        // Ele só vai entrar aqui quando o evento que está dentro do metodo(addEventListener) for chamdado

        window.addEventListener("scroll", function(event){

        // Ele está verificando se meu scroll está no inicio da página ou não, se ele estiver não mostra a seta para levar o usuário para o topo da página

            if (window.scrollY == 0) {
                botao.classList.remove("visible");
            } else {
                botao.classList.add("visible");
            }
        });        
    </script>

    <script>    
        
        jQuery('#cadastrar').on('click', function(){
            jQuery('#cadastrar-cms').modal('show');
        });

        // Aqui ele vai fazer a funcionalidade para o usuário pode selecionar a imagem que quer
        const visualizador = document.getElementById('visualizador');
        const imagemPreview = visualizador.src;
        const labelSelecionarImagem = document.getElementById('addImagem');
        const textLabelSelecionarImagem = labelSelecionarImagem.innerHTML;

        labelSelecionarImagem.addEventListener('click', function() {
            labelSelecionarImagem.innerText = 'CARREGANDO...';
        });

        const carregarImagem = function(event) {
            labelSelecionarImagem.innerHTML = 'CARREGANDO...';
            var reader = new FileReader();

            reader.onload = function() {

                visualizador.src = reader.result;
                visualizador.style.opacity = 1;
                visualizador.style.padding = 0;

                labelSelecionarImagem.innerText = 'Trocar';
                labelSelecionarImagem.title = 'Trocar imagem selecionada';

            };

            reader.readAsDataURL(event.target.files[0]);
        };

        const removerImagem = function(event) {

            event.preventDefault();
            inputImagem = document.getElementById('imagem');
            inputImagem.value = null;
            visualizador.src = imagemPreview;
            visualizador.style.opacity = 0.3;
            visualizador.style.padding = "3rem";
            labelSelecionarImagem.innerHTML = textLabelSelecionarImagem;

        };

        jQuery(document).on('click', '.btn-fechar', function(){
            jQuery('#operadora').val('');
            jQuery('#plano').val('');
            jQuery('#vlplano').val('');
            jQuery('#coparticipacao').val('');
            jQuery('#cobertura').val('');
            jQuery('#hospital').val('');
            jQuery('#vlrembolso').val('');
            jQuery('#nomeOperadora').val('');
            jQuery('#visivel').prop('checked', false);
        });

        jQuery(document).on('click', '.btn-editar', function(){
            
            jQuery('#editar-cms').modal('show');

            let codId = jQuery(this).attr('data-codigo-id');
            let operadora = jQuery(this).attr('data-codigo-operadora');
            let planos = jQuery(this).attr('data-codigo-plano');
            let valorPlano = jQuery(this).attr('data-valor-plano');
            let coparticipacao = jQuery(this).attr('data-codigo-coparticipacao');
            let cobertura = jQuery(this).attr('data-codigo-cobertura');
            let hospital = jQuery(this).attr('data-codigo-hospital');
            let valoRembolso = jQuery(this).attr('data-valor-rembolso');
            let logo = jQuery(this).attr('data-codigo-logo');
            let nomeOperadora = jQuery(this).attr('data-nome-operadora');
            let visualizar = jQuery(this).attr('data-codigo-visualizar');

            jQuery('#edtId').val(codId);
            jQuery('#edtOperadora').val(operadora);
            jQuery('#edtPlano').val(planos);
            jQuery('#edtVlplano').val(valorPlano);
            jQuery('#edtCoparticipacao').val(coparticipacao);
            jQuery('#edtCobertura').val(cobertura);
            jQuery('#edtHospital').val(hospital);
            jQuery('#edtVlrembolso').val(valoRembolso);
            jQuery('#edtVisualizador').attr('src', logo);
            jQuery('#edtNomeOperadora').val(nomeOperadora);
            jQuery('#edtVisivel').prop('checked', visualizar);
        });

        const visualizarImagem = document.getElementById('visualizador2"');
        const imagem = visualizador2.src;
        const selecionarImagem = document.getElementById('editImagem');
        const SelecionarImagem = selecionarImagem.innerHTML;

        selecionarImagem.addEventListener('click', function() {
            selecionarImagem.innerText = 'CARREGANDO...';
        });

        const trocarImagem = function(event) {
            selecionarImagem.innerHTML = 'CARREGANDO...';
            var reader = new FileReader();

            reader.onload = function() {

                visualizador2.src = reader.result;
                visualizador2.style.opacity = 1;
                visualizador2.style.padding = 0;

                selecionarImagem.innerText = 'Trocar';
                selecionarImagem.title = 'Trocar imagem selecionada';

            };

            reader.readAsDataURL(event.target.files[0]);
        };

        const tirarImagem = function(event) {

            event.preventDefault();
            inputImagem = document.getElementById('editar-imagem');
            inputImagem.value = null;
            visualizador2.src = imagem;
            visualizador2.style.opacity = 0.3;
            visualizador2.style.padding = "3rem";
            selecionarImagem.innerHTML = SelecionarImagem;

        };

        $(document).ready(function () {
            $('#tabela-informacao').DataTable({
                "scrollX": true,
                "bDestroy": true,
                "responsive": true,                           
            });
        });                                           
    </script>
  </body>
</html>
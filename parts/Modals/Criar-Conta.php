<?php
    $QueryBuscarClasses = "SELECT * FROM tb_classes";
    $ExeQrBuscarClasses = mysqli_query($connection, $QueryBuscarClasses);
    $ResQrBuscarClasses = mysqli_num_rows($ExeQrBuscarClasses);
    
    $QueryBuscarArmas = "SELECT * FROM tb_item_armas";
    $ExeQrBuscarArmas = mysqli_query($connection, $QueryBuscarArmas);
    $ResQrBuscarArmas = mysqli_num_rows($ExeQrBuscarArmas);

    $QueryBuscarArmas2 = "SELECT * FROM tb_item_armas";
    $ExeQrBuscarArmas2 = mysqli_query($connection, $QueryBuscarArmas2);
    $ResQrBuscarArmas2 = mysqli_num_rows($ExeQrBuscarArmas2);

    $QueryBuscarDef = "SELECT * FROM tb_item_def";
    $ExeQrBuscarDef = mysqli_query($connection, $QueryBuscarDef);
    $ResQrBuscarDef = mysqli_num_rows($ExeQrBuscarDef);
?>
<!--Modal para cadastro do aluno novo-->
<div class="modal fade in" id="Criar-Conta" tabindex="-1" role="dialog" aria-labelledby="Cadastro-Player" style="">
    <form action="#" method="post" class="">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-labelledb="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="ModalCadastro">Criar conta de usuário</h4>
                </div>
                <div class="modal-body">
                    <!--Dados do Jogador-->

                    <div class="form-group">
                        <h3>Dados do Jogador</h3>
                        <div class="col-md-12">
                            <label for="NomePlayer">Jogador</label>
                            <input type="text" id="NomePlayer" name="NomePlayer" class="form-control" placeholder="Nome do Jogador">
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <label for="EmailUsuario">E-Mail</label>
                                <input type="text" id="EmailUsuario" name="EmailUsuario" class="form-control" placeholder="exemplo@email.com.br">
                            </div>
                            <div class="col-md-6">
                                <label for="SenhaUsuario">Senha</label>
                                <input type="password" id="SenhaUsuario" name="SenhaUsuario" class="form-control" placeholder="******">
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
                <!--Footer-->
                <div class="modal-footer">
                    <div class="col-md-6">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="AceitoContrato" id="AceitoContrato" value="1">
                                Aceito os termos de contratos estabelecidos <a href="#" target="_blank">aqui</a>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <button type="button" class="btn btn-xl btn-danger" data-dismiss="modal">Canelar</button>
                        <button type="submit" class="btn btn-xl btn-success" name="CadastrarUsuario">Cadastrar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

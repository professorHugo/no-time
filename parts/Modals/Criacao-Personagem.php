<?php
    $QueryBuscarClasses = "SELECT * FROM tb_classes LIMIT 1, 100";
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
<div class="modal fade in" id="Cadastro-Player" tabindex="-1" role="dialog" aria-labelledby="Cadastro-Player" style="">
    <form action="#" method="post" class="">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-labelledb="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="ModalCadastro">Criando a ficha do seu personagem</h4>
                </div>
                <div class="modal-body">
                    <!--Dados do Jogador-->

                    <div class="form-group">
                        <h3>Dados do Jogador</h3>
                        <div class="col-md-12">
                            <label for="NomePlayer">Jogador</label>
                            <input type="text" id="NomePlayer" name="NomePlayer" class="form-control" placeholder="<?php echo $_SESSION['Login']['nome_usuario'];?>" >
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <label for="NomePersonagem">Personagem</label>
                                <input type="text" id="NomePersonagem" name="NomePersonagem" class="form-control" placeholder="Nome">
                            </div>
                            <div class="col-md-6">
                                <label for="IdadePersonagem">Idade Personagem</label>
                                <input type="number" id="IdadePersonagem" name="IdadePersonagem" class="form-control" placeholder="Idade do Personagem">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <label for="Raca">Raça:</label>
                                <select name="Raca" id="Raca" class="form-control">
                                    <option value="1">Humano</option>
                                    <option value="2">Android</option>
                                    <option value="3">Alienigena</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="Classe">Classe:</label>
                                <select name="ClassePersonagem" id="ClassePersonagem" class="form-control" onchange="definirClasse(this.value);exibirEquipamentos(this.value);escolherHabilidades(this.value)">
                                    <option value="NULL" selected disabled>Escolha a Classe</option>
                                    <?php
                                    while($Classes = mysqli_fetch_assoc($ExeQrBuscarClasses)){
                                        echo "
                                        <option value='$Classes[id_classe]'>
                                            $Classes[nome_classe]
                                        </option>
                                        ";
                                    }
                                    ?>
                                </select>
                            </div>


                        </div>
                    </div>

                    <div class="clearfix"></div>
                    <!--Dados da Classe escolhida-->
                    <div class="form-group">
                        <div id="DadosClasse"></div>
                    </div>
                    <!--Equipamentos-->
                    <div class="clearfix"></div>
                    <div class="form-group">
                        <div id="Equipamentos"></div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group">
                        <div id="HabilidadesClasse"></div>
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
                        <button type="submit" class="btn btn-xl btn-success" name="CadastrarPersonagem">Cadastrar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

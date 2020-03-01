<!--Modal para cadastro do aluno novo-->
<div class="modal fade in" id="EditarArma<?php echo $ResArmas['id_item_arma']?>" tabindex="-1" role="dialog" aria-labelledby="Cadastro-Player" style="">
    <form action="index.php?url=Administrar&T=Armas&EditarArma" method="post" class="">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-labelledb="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="Modal-Editar-Classe">
                        Editando a arma:
                        <?php echo 
                            lmword($ResArmas['descricao_item_arma'],16)." | ID: ".$ResArmas['id_item_arma']
                        ?>
                    </h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="ArmaEditar" value="<?php echo $ResArmas['id_item_arma']?>">
                    <div class="col-md-8">
                        <label for="NomeArma">Nome da Arma</label>
                        <input type="text" class="form-control" name="NomeArma" id="NomeArma" value="<?php echo $ResArmas['descricao_item_arma']?>">
                    </div>
                    <div class="col-md-4">
                        <label for="CustoArma">Preço</label>
                        <input type="number" class="form-control" name="CustoArma" id="CustoArma" value="<?php echo $ResArmas['custo_item_arma']?>">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-4">
                        <label for="TipoArma">Tipo</label>
                        <select name="TipoArma" id="TipoArma" class="form-control">
                        <?php
                            $QueryBuscarTipos = "SELECT * FROM tb_tipo_itens";
                            $ExeQrBuscarTipos = mysqli_query($connection, $QueryBuscarTipos);
                            foreach($ExeQrBuscarTipos as $TiposArmas):
                            ?>
                            <option value="<?php echo $TiposArmas['tipo_item']?>">
                                <?php echo $TiposArmas['tipo_item']?>
                            </option>
                            <?php
                            endforeach;
                        ?>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="ClasseArma">Classe</label>
                        <?php $IdClasseArma = $ResArmas['classe_item_arma'];?>
                        <select name="ClasseArma1" id="ClasseArma1" class="form-control">
                            <?php
                            //Buscar Classe da arma
                            $QueryBuscarArmaClasse = "SELECT DISTINCT * FROM tb_classes";
                            $ExeQrBuscarArmaClasse = mysqli_query($connection, $QueryBuscarArmaClasse);
                            foreach($ExeQrBuscarArmaClasse as $ArmaClasse):
                                ?>
                                <option value="<?php echo $ArmaClasse['id_classe']; ?>">
                                   <?php 
                                    echo $ArmaClasse['nome_classe']; 
                                    ?>
                                </option>
                                <?php
                            endforeach;
                            
                            ?>
                        </select>
                    </div>
                    
                    <div class="col-md-4">
                        <label for="DanoArma">Dano</label>
                        <input type="text" class="form-control" name="DanoArma" id="DanoArma" value="<?php echo $ResArmas['dano_item_arma']; ?>">
                    </div>
                    
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
                <!--Footer-->
                <div class="modal-footer">
                    <div class="col-md-8">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="AceitoMudarArma" id="AceitoMudarArma" value="1">
                                Sei que ao salvar os dados declarados aqui vão alterar as informações armazenadas no sistema
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <button type="button" class="btn btn-xl btn-danger" data-dismiss="modal">Canelar</button>
                        <button type="submit" class="btn btn-xl btn-success" name="EditaArma"><i></i> Salvar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

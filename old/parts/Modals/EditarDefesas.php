<!--Modal para cadastro do aluno novo-->
<div class="modal fade in" id="EditarDef<?php echo $ResDef['id_item_def']?>" tabindex="-1" role="dialog" aria-labelledby="Cadastro-Player" style="">
    <form action="index.php?url=Administrar&T=Defesas&EditarDefesa" method="post" class="">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-labelledb="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="Modal-Editar-Classe">
                        Editando a arma:
                        <?php echo 
                            lmword($ResDef['descricao_item_def'],16)." | ID: ".$ResDef['id_item_def']
                        ?>
                    </h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="DefEditar" value="<?php echo $ResDef['id_item_def']?>">
                    <div class="col-md-12">
                        <label for="NomeDef">Nome da Defesa</label>
                        <input type="text" class="form-control" name="NomeDef" id="NomeDef" value="<?php echo $ResDef['descricao_item_def']?>">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-4">
                        <label for="TipoDef">Tipo</label>
                        <input type="text" class="form-control" name="TipoDef" id="TipoDef" value="<?php echo $ResDef['tipo_item_def']?>">
                    </div>
                    <div class="col-md-4">
                        <label for="ClasseDef">Classe</label>
                        <input type="text" class="form-control" name="ClasseDef" id="ClasseDef" value="<?php echo 'Classe->implementar'; ?>">
                    </div>
                    
                    <div class="col-md-4">
                        <label for="DanoDef">Dano</label>
                        <input type="text" class="form-control" name="DanoDef" id="DanoDef" value="<?php echo $ResDef['dano_item_def']; ?>">
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
                        <button type="submit" class="btn btn-xl btn-success" name="EditaDef"><i></i> Salvar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

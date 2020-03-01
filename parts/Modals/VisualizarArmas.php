<!--Modal para visualizar a classe-->
<div class="modal fade in" id="VisualizarArma<?php echo $ResArmas['id_item_arma']?>" tabindex="-1" role="dialog" aria-labelledby="Cadastro-Player" style="">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-labelledb="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="Modal-Editar-Classe">
                    Arma: <?php echo $ResArmas['id_item_arma']?>
                </h4>
            </div>
            <div class="modal-body">
                    <div class="col-md-8">
                        <label for="NomeArma">Nome da Arma</label>
                        <input type="text" class="form-control" name="NomeArma" id="NomeArma" value="<?php echo $ResArmas['descricao_item_arma']?>" disabled>
                    </div>
                    <div class="col-md-4">
                        <label for="CustoArma">Preço</label>
                        <input type="number" class="form-control" name="CustoArma" id="CustoArma" value="<?php echo $ResArmas['custo_item_arma']?>" disabled>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-4">
                        <label for="TipoArma">Tipo</label>
                        
                            <input type="text" class="form-control" disabled value="<?php echo $ResArmas['tipo_item_arma']?>">
                             
                    </div>
                    <div class="col-md-4">
                        <label for="ClasseArma">Classe</label>
                        <?php $IdClasseArma = $ResArmas['classe_item_arma'];?>
                        <select name="ClasseArma1" id="ClasseArma1" disabled class="form-control">
                            <?php
                            //Buscar Classe da arma
                            $QueryBuscarArmaClasse = "SELECT DISTINCT * FROM tb_classes WHERE id_classe = '$IdClasseArma' ";
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
                        <input type="text" class="form-control" disabled id="DanoArma" value="<?php echo $ResArmas['dano_item_arma']; ?>">
                    </div>
                    
                    <div class="clearfix"></div>
                </div>
            <div class="clearfix"></div>
            <!--Footer-->
            <div class="modal-footer">

                <button type="button" class="btn btn-xl btn-danger" data-dismiss="modal">Fechar</button>

            </div>
        </div>
    </div>
</div>

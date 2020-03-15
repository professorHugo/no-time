<!-- Modal Adicionar Equipamento -->
<div class="modal fade" id="AdicionarEquipamento" tabindex="-1" role="dialog" aria-labelledby="AdicionarEquipamento">
    <form action="?url=Administrar&T=Armas&Adicionar" method="post">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Adicionar novo equipamento</h4>
                </div>
                <div class="modal-body">
                    <div class="col-md-8">
                        <label for="DescArma">Nome da Arma</label>
                        <input name="DescArma" id="DescArma" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label for="CustoArma">Preço</label>
                        <input type="number" class="form-control" name="CustoArma" id="CustoArma">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-4">
                        <label for="TipoArma">Tipo de Arma</label>
                        <select name="TipoArma" id="" class="form-control">
                        <?php
                            $QueryBuscarTiposArmas = "SELECT * FROM tb_tipo_itens";
                            $ExeQrBuscarTiposArmas = mysqli_query($connection, $QueryBuscarTiposArmas);
                            foreach($ExeQrBuscarTiposArmas as $TiposArma):
                            ?>
                            <option value="<?php echo $TiposArma['tipo_item']?>">
                                <?php echo $TiposArma['tipo_item']?>
                            </option>
                            <?php
                              endforeach;
                        ?>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="ClasseArma">Classe da Arma</label>
                        <select name="ClasseArma" id="ClasseArma" class="form-control">
                            <?php
                              $QueryBuscarClasseArmas = "SELECT * FROM tb_classes";
                              $ExeQrBuscarClasseArmas = mysqli_query($connection, $QueryBuscarClasseArmas);
                              foreach($ExeQrBuscarClasseArmas as $ClasseArmas):
                              ?>
                            <option value="<?php echo $ClasseArmas['id_classe']?>">
                                <?php echo $ClasseArmas['nome_classe']?>
                            </option>
                            <?php
                  endforeach;
              ?>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="DanoArma">Dano da Arma</label>
                        <input type="text" name="DanoArma" id="DanoArma" class="form-control">
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Adicionar Arma</button>
                </div>
            </div>
        </div>
    </form>
</div>

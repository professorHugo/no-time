<!-- Modal Editar Capítulo -->
    <div class="modal fade" id="EditarHistoria<?php echo $Capitulos['id_capitulo']?>" tabindex="-1" role="dialog" aria-labelledby="InserirCapitulo">
        <form action="#" method="post">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">
                            Editando o Capítulo: <?php echo $Capitulos['titulo_capitulo']?>
                        </h4>
                    </div>
                    <div class="modal-body">
                        <label for="TituloCapituloEdit">Título: </label>
                        <input type="text" name="TituloCapituloEdit" id="TituloCapituloEdit" class="form-control" value="<?php echo $Capitulos['titulo_capitulo']?>">
                        <input type="hidden" name="CapituloEditar" value="<?php echo $Capitulos['id_capitulo']?>">

                        <label for="TextoCapituloEdit">Texto</label>
                        <textarea class="form-control" name="TextoCapituloEdit" cols="30" rows="15" id="TextoCapituloEdit"><?php echo $Capitulos['texto_capitulo']?></textarea>
                    </div>
                    <div class="modal-footer">
                        <div class="col-xs-6">
                        <?php
                        $QueryBuscarCapituloAtivo1 = "SELECT * FROM tb_capitulos_historia WHERE id_capitulo = $Capitulos[id_capitulo]";
                        $ExeQrBuscarCapituloAtivo1 = mysqli_query($connection, $QueryBuscarCapituloAtivo1);
                        foreach($ExeQrBuscarCapituloAtivo1 as $Ativo1):
                        if($Ativo1['ativo'] == 1){
                            echo'<label for="Ativar">Ativo</label>';
                        }else{
                            echo'<label for="Ativar">Inativo</label>';

                        }
                        endforeach;
                        ?>
                        <select name="Ativar" id="Ativar">
                        <?php
                        $QueryBuscarCapituloAtivo2 = "SELECT * FROM tb_capitulos_historia WHERE id_capitulo = $Capitulos[id_capitulo]";
                        $ExeQrBuscarCapituloAtivo2 = mysqli_query($connection, $QueryBuscarCapituloAtivo2);
                        foreach($ExeQrBuscarCapituloAtivo2 as $Ativo2):
                        if($Ativo2['ativo'] == 1){
                            echo'
                            <option value="1">Ativado</option>
			                <option value="0">Desativar</option>
                            ';
                        }else{
                            echo'
			                <option value="0">Desativado</option>
                            <option value="1">Ativar</option>
                            ';
                        }
                        endforeach;
                        ?>
                        </select>
                        </div>
                        <div class="col-xs-6">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                            <button type="submit" class="btn btn-primary" name="EditarCapitulo">Salvar Capítulo</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- Modal Ler Capítulo -->
    <div class="modal fade" id="LerHistoria<?php echo $Capitulos['id_capitulo']?>" tabindex="-1" role="dialog" aria-labelledby="InserirCapitulo">
        <form action="#" method="post">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">
                            Título: <?php echo $Capitulos['titulo_capitulo']?>
                        </h4>
                    </div>
                    <div class="modal-body">
                        <?php echo $Capitulos['texto_capitulo']?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
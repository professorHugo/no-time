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

                        <label for="TextoCapituloEdit">Texto</label>
                        <textarea class="form-control" name="TextoCapituloEdit" cols="30" rows="10" id="TextoCapituloEdit"><?php echo $Capitulos['texto_capitulo']?></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary" name="EditarCapitulo">Salvar Capítulo</button>
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
                            Editando o Capítulo: <?php echo $Capitulos['titulo_capitulo']?>
                        </h4>
                    </div>
                    <div class="modal-body">
                        <label for="TituloCapituloEdit">Título: </label>
                        <input type="text" disabled name="TituloCapituloEdit" id="TituloCapituloEdit" class="form-control" value="<?php echo $Capitulos['titulo_capitulo']?>">

                        <label for="TextoCapituloEdit">Texto</label>
                        <textarea class="form-control" disabled name="TextoCapituloEdit" cols="30" rows="10" id="TextoCapituloEdit"><?php echo $Capitulos['texto_capitulo']?></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
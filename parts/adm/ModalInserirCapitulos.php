<!-- Modal Inserir Capítulo -->
<div class="modal fade" id="InserirCapitulo" tabindex="-1" role="dialog" aria-labelledby="InserirCapitulo">
    <form action="#" method="post">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Inserir Capítulo</h4>
                </div>
                <div class="modal-body">
                    <label for="TituloCapitulo">Título: </label>
                    <input type="text" name="TituloCapitulo" id="TituloCapitulo" class="form-control">
                    <label for="TextoCapitulo">Texto</label>
                    <textarea class="form-control" name="TextoCapitulo" cols="30" rows="10" id="TextoCapitulo"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary" name="SalvarCapitulo">Salvar Capítulo</button>
                </div>
            </div>
        </div>
    </form>
</div>

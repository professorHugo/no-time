<!--Modal para cadastro do aluno novo-->
<div class="modal fade in" id="EditarRaca<?php echo $ResRaca['id_raca']?>" tabindex="-1" role="dialog" aria-labelledby="Cadastro-Player" style="">
    <form action="index.php?url=Administrar&T=Racas&EditarRaca" method="post" class="">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-labelledb="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="Modal-Editar-Classe">
                    Editando a raça: <?php echo $ResRaca['nome_raca']?>
                    </h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="RacaEditar" value="<?php echo $ResRaca['id_raca']?>">
                    <p class="lead">
                        <label for="NomeRaca">Nome da Raça</label>
                    </p>
                    <div class="col-md-12">
                        <label>
                            <input type="text" class="form-control" name="NomeRaca" id="NomeRaca" value="<?php echo $ResRaca['nome_raca']?>">
                        </label>
                    </div>                    
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
                <!--Footer-->
                <div class="modal-footer">
                    <div class="col-md-8">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="AceitoMudarRacas" id="AceitoMudarRacas" value="1">
                                Sei que ao salvar os dados declarados aqui vão alterar as informações armazenadas no sistema
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <button type="button" class="btn btn-xl btn-danger" data-dismiss="modal">Canelar</button>
                        <button type="submit" class="btn btn-xl btn-success" name="EditarRaca"><i></i> Salvar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
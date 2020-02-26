<!--Modal para cadastro do aluno novo-->
<div class="modal fade in" id="EditarClasse<?php echo $ResClasse['id_classe']?>" tabindex="-1" role="dialog" aria-labelledby="Cadastro-Player" style="">
    <form action="index.php?url=Administrar&T=Classes&Editar" method="post" class="">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-labelledb="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="Modal-Editar-Classe">
                    Editando a classe: <?php echo $ResClasse['nome_classe']?>
                    </h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="ClasseEditar" value="<?php echo $ResClasse['id_classe']?>">
                    <p class="lead">
                        <label for="NomeClasse">Nome da Classe</label>
                    </p>
                    <div class="col-md-12">
                        <label>
                            <input type="text" class="form-control" name="NomeClasse" id="NomeClasse" value="<?php echo $ResClasse['nome_classe']?>">
                        </label>
                    </div>
                    <p class="lead">Atributos</p>
                    <div class="col-md-6">
                        <label for="Atr1">Atributo1</label>
                        <input type="text" class="form-control" name="Atr1" id="Atr1" value="<?php echo $ResClasse['atr1']?>">
                        <label for="Atr2">Atributo2</label>
                        <input type="text" class="form-control" name="Atr2" id="Atr2" value="<?php echo $ResClasse['atr2']?>">
                    </div>
                    <div class="col-md-6">
                        <label for="Atr3">Atributo3</label>
                        <input type="text" class="form-control" name="Atr3" id="Atr3" value="<?php echo $ResClasse['atr3']?>">
                        <label for="Atr4">Atributo4</label>
                        <input type="text" class="form-control" name="Atr4" id="Atr4" value="<?php echo $ResClasse['atr4']?>">
                    </div>
                    <p class="lead">Habilidades</p>
                    <div class="col-md-6">
                        <label for="Hab1">Habilidade1</label>
                        <input type="text" class="form-control" name="Hab1" id="Hab1" value="<?php echo $ResClasse['hab_c1']?>">
                        <label for="Hab2">Habilidade2</label>
                        <input type="text" class="form-control" name="Hab2" id="Hab2" value="<?php echo $ResClasse['hab_c2']?>">
                    </div>
                    <div class="col-md-6">
                        <label for="Hab3">Habilidade3</label>
                        <input type="text" class="form-control" name="Hab3" id="Hab3" value="<?php echo $ResClasse['hab_c3']?>">
                        <label for="Hab4">Habilidade4</label>
                        <input type="text" class="form-control" name="Hab4" id="Hab4" value="<?php echo $ResClasse['hab_c4']?>">
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
                        <button type="submit" class="btn btn-xl btn-success" name="EditarClasse"><i></i> Salvar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
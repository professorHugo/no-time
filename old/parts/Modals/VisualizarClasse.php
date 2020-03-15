<!--Modal para visualizar a classe-->
<div class="modal fade in" id="VisualizarClasse<?php echo $ResClasse['id_classe']?>" tabindex="-1" role="dialog" aria-labelledby="Cadastro-Player" style="">

    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-labelledb="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="Modal-Editar-Classe">
                    Classe: <?php echo $ResClasse['nome_classe']?>
                </h4>
            </div>
            <div class="modal-body">
                <div class="col-xs-6">
                    <p class="lead">Atributos</p>
                    <p>
                        <label for="Atr1">Atributo1</label>: <?php echo $ResClasse['atr1']?>
                    </p>
                    <p>
                        <label for="Atr2">Atributo2</label>: <?php echo $ResClasse['atr2']?>
                    </p>
                    <p>
                        <label for="Atr3">Atributo3</label>: <?php echo $ResClasse['atr3']?>
                    </p>
                    <p>
                        <label for="Atr4">Atributo4</label>: <?php echo $ResClasse['atr4']?>
                    </p>
                    <hr>
                    <p class="lead">Habilidades</p>
                    <p>
                        <label for="Hab1">Habilidade1</label>: <?php echo $ResClasse['hab_c1']?>
                    </p>

                    <p>
                        <label for="Hab2">Habilidade2</label>: <?php echo $ResClasse['hab_c2']?>
                    </p>
                    <p>
                        <label for="Hab3">Habilidade3</label>: <?php echo $ResClasse['hab_c3']?>
                    </p>
                    <p>
                        <label for="Hab4">Habilidade4</label>: <?php echo $ResClasse['hab_c4']?>
                    </p>
                </div>
                <div class="col-xs-6 text-justify">
                    <p class="lead">Descrição</p>
                    <p>
                        <?php echo $ResClasse['descr_classe'];?>
                    </p>
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
